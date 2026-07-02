<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Загружаем .env
$env = [];
if (file_exists(__DIR__ . '/.env')) {
    $lines = file(__DIR__ . '/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos($line, '=') !== false && strpos($line, '#') !== 0) {
            list($key, $value) = explode('=', $line, 2);
            $env[trim($key)] = trim($value);
        }
    }
}

$appPassword = $env['GMAIL_APP_PASSWORD'] ?? '';

if (empty($appPassword)) {
    echo json_encode(['success' => false, 'message' => 'Ошибка: не найден пароль почты']);
    exit;
}

require __DIR__ . '/vendor/autoload.php';

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
    // Настройки SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'infoktpby@gmail.com';
    $mail->Password   = $appPassword;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // === КОДИРОВКА UTF-8 ===
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';

    // Отправитель и получатель
    $mail->setFrom('infoktpby@gmail.com', 'ktp.by');
    $mail->addAddress('ktp@ktp.by');

    // === СОДЕРЖАНИЕ ПИСЬМА ===
    $mail->isHTML(false);
    $mail->Subject = 'Новая заявка с ktp.by';
    
    $message = "Поступила новая заявка с сайта ktp.by\n";
    $message .= str_repeat('=', 40) . "\n";
    $message .= "Имя: $name\n";
    $message .= "Организация: $organization\n";
    $message .= "Телефон: $phone\n";
    $message .= "Email: $email\n";
    $message .= str_repeat('=', 40) . "\n";
    $message .= "Дата: " . date('d.m.Y H:i:s');
    
    $mail->Body = $message;

    $mail->send();
    echo json_encode(['success' => true, 'message' => 'Заявка успешно отправлена!']);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Ошибка: ' . $mail->ErrorInfo]);
}
?>