<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Загружаем переменные из .env (если нет dotenv, используем getenv)
$appPassword = getenv('GMAIL_APP_PASSWORD');
if (!$appPassword && file_exists(__DIR__ . '/.env')) {
    $env = parse_ini_file(__DIR__ . '/.env');
    $appPassword = $env['GMAIL_APP_PASSWORD'] ?? '';
}

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = $_POST['name'] ?? '';
$organization = $_POST['organization'] ?? '';
$phone = $_POST['phone'] ?? '';
$email = $_POST['email'] ?? '';

if (empty($name) || empty($organization) || empty($phone) || empty($email)) {
    echo json_encode(['success' => false, 'message' => 'Заполните все поля!']);
    exit;
}

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'infoktpby@gmail.com';
    $mail->Password   = $appPassword;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom('infoktpby@gmail.com', 'ktp.by');
    $mail->addAddress('ktp@ktp.by');

    $mail->isHTML(false);
    $mail->Subject = 'Новая заявка с ktp.by - Салазки СНЕМ.26.3.036.001';
    
    $message = "Поступила новая заявка с сайта ktp.by\n";
    $message .= "Товар: Салазки СНЕМ.26.3.036.001\n";
    $message .= str_repeat('-', 40) . "\n";
    $message .= "Имя: $name\n";
    $message .= "Организация: $organization\n";
    $message .= "Телефон: $phone\n";
    $message .= "Email: $email\n";
    $message .= str_repeat('-', 40) . "\n";
    $message .= "Дата заявки: " . date('d.m.Y H:i:s');
    
    $mail->Body = $message;

    $mail->send();
    
    echo json_encode([
        'success' => true,
        'message' => 'Заявка успешно отправлена! Мы свяжемся с вами.'
    ]);
    
} catch (Exception $e) {
    error_log('PHPMailer Error: ' . $mail->ErrorInfo);
    echo json_encode([
        'success' => false,
        'message' => 'Ошибка отправки. Попробуйте позже.'
    ]);
}
?>