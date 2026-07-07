---
title: "Подстанции комплектные трансформаторные КТП «МКЭ»"
description: "Типовые решения для подстанции комплектные трансформаторные КТП «МКЭ» согласно ТУ BY 693307094.002-2025"
slug: ktp-mke
summary: "Типовые решения для КТП «МКЭ». Принципиальные электрические схемы (Э6). Перечень элементов (ПЭ3). Габаритные и установочные размеры. 3-D модели"
date: 2026-06-08T14:00:00+03:00
lastmod: 2026-06-08T14:00:02+02:00
draft: false
tags: ["КТП", "10кВ", "0,4кВ", "Типовое решение", "Комплектные трансформаторные подстанции"]
#categories: [""]
series: ["Подстанции комплектные трансформаторные КТП «МКЭ»"]
# weight: 1
# aliases: ["/first"] # старая ссылка с которой нужно сделать редирект
author: "Главный инженер"
# author: ["Mitulka", "Veroncher"] # multiple authors
showToc: true
TocOpen: true
hidemeta: false
comments: false
# canonicalURL: "https://canonical.url/to/page"
disableHLJS: true # to disable highlightjs
disableShare: false
hideSummary: false
searchHidden: false
ShowReadingTime: true
ShowBreadCrumbs: true
ShowPostNavLinks: true
ShowWordCount: true
ShowRssButtonInSectionTermList: true
UseHugoToc: true
cover:
  image: "/ktp/img/ktp-cover.png" # путь к обложке поста
  alt: "Альбом типовых решений КТП «МКЭ»" # alt text
  caption: "Альбом типовых решений КТП «МКЭ»" # display caption under cover
  relative: true # when using page bundles set this to true
  hidden: false # only hide on current single page
editPost:
    URL: "https://github.com/mutilka/ktp-by-src/tree/master/content/ru"
    Text: "Предложить изменения" # edit text
    appendFilePath: true # to append file path to Edit link
---


## Технические условия подстанции комплектные трансформаторные КТП «МКЭ» ТУ BY 693307094.002-2025

{{< figure src="../img/ty-by-693307094_003-2026-scan-1-800-600.jpg" alt="Технические условия. Подстанции комплектные трансформаторные КТП «МКЭ» согласно ТУ BY 693307094.002-2025" caption="Технические условия. Подстанции комплектные трансформаторные КТП «МКЭ» согласно ТУ BY 693307094.002-2025" width="600px" height="auto">}}

## Структура условного обозначения подстанции комплектные трансформаторные КТП «МКЭ»

{{< figure src="../img/struktura-uslovnogo-oboznacheniya-ktp-mke.png" alt="Структура условного обозначения КТП «МКЭ»" caption="Структура условного обозначения. Подстанции комплектные трансформаторные КТП «МКЭ»" width="800px" height="auto">}}

## Общая информация о подстанциях комплектных трансформаторных КТП «МКЭ»

Подстанции комплектные трансформаторные КТП «МКЭ», предназначенную для приема, преобразования, распределения электрической энергии трехфазного переменного тока частотой 50 Гц в сетях с изолированной или компенсированной нейтралью на стороне высокого напряжения до 35кВ и глухозаземленной нейтралью на стороне низкого напряжения 0,23кВ; 0,4кВ; 0,69кВ в системах электроснабжения.

КТП применяются в системах электроснабжения жилищно-коммунальных, общественных объектов, промышленных предприятий, в том числе объектов нефтедобывающей промышленности, а также коттеджных поселков и зон индивидуальной застройки. В КТП может быть установлен сухой или маслонаполненный трансформатор.

КТП имеет два варианта исполнения:
- с кабельным вводом;
- с воздушным вводом.

## Основные параметры подстанции комплектных трансформаторных КТП «МКЭ»

| Наименование параметра | Значение параметра для мощности силового трансформатора, кВА |
| --- | :---: |
| Мощность трансформатора, кВА | 63-16000 |
| Группа соединений трансформатора | ∆/Yo -11; Y/Yo - 0; Y/Zн - 11 |
| Номинальное напряжение на стороне ВН, кВ | 6,0; 10,0; 20,0; 35,0 |
| Наибольшее рабочее напряжение на стороне ВН, кВ по ГОСТ 721-77 | 7,2; 12,0; 24,0; 40,5 |
| Номинальное напряжение на стороне НН, кВ по ГОСТ 21128-83 | 0,23; 0,4; 0,69 |
| Номинальный ток сборных шин устройства ввода со стороны ВН, А | 630-3150 |
| Номинальный ток сборных шин устройства ввода со стороны НН, А | 100-8000 |
| Частота переменного тока, Гц | 50 |
| Уровень изоляции по ГОСТ 1516.3-96 | а. с сухим трансформатором — Облегченная изоляция; б. с масляным трансформатором — Нормальная изоляция |
| Климатическое исполнение и категории размещения по ГОСТ 15150-69 | У1 |
| Степень защиты по ГОСТ 14254-2015 (IEC 60529:2013) | IP23; IP44; IP54 |
| Срок службы, лет | Не менее 25 |

## Общий 3D вид подстанции комплектной трансформаторной в металлическом корпусе КТП «МКЭ»

<!-- Скрипт для смены темы в 3D-модели KeyShotXR -->
<script>
(function() {
    const iframe = document.querySelector('.post-content iframe');
    if (!iframe) return;

    function reloadWithTheme() {
        let src = iframe.src.split('?')[0];                    // базовый URL
        const isDark = document.documentElement.getAttribute('data-theme') === 'dark';
        const theme = isDark ? 'dark' : 'light';
        
        iframe.src = `${src}?theme=${theme}&t=${Date.now()}`;
    }

    // Следим за сменой темы
    const observer = new MutationObserver(reloadWithTheme);
    observer.observe(document.documentElement, {
        attributes: true,
        attributeFilter: ['data-theme']
    });

    // Первая загрузка с правильной темой
    reloadWithTheme();
})();
</script>

<div style="max-width: 800px; max-height: 600px; margin: 0 auto;">
  <div style="left: 0px; width: 100%; height: 0px; position: relative; padding-bottom: 75%; overflow: hidden;">
  <img style = "backgroud-color: transparent">
    <iframe src="/ktp/1ktp-m-100-10-0_4-kk-u1.9/1ktp-m-100-10-0_4-kk-u1.9.html"
                 allowfullscreen
                 style="position: absolute; top: 0px; left: 0px; height: 100%; width: 1px; min-width: 100%; *width: 100%;"
                 frameborder="0"
                 scrolling="no">
    </iframe>
    </img>
  </div>
</div>

## Общий 3D вид подстанции комплектной трансформаторной в бетонном корпусе КТП «МКЭ»

<!-- Скрипт для смены темы в 3D-модели KeyShotXR -->
<script>
(function() {
    const iframe = document.querySelector('.post-content iframe');
    if (!iframe) return;

    function reloadWithTheme() {
        let src = iframe.src.split('?')[0];                    // базовый URL
        const isDark = document.documentElement.getAttribute('data-theme') === 'dark';
        const theme = isDark ? 'dark' : 'light';
        
        iframe.src = `${src}?theme=${theme}&t=${Date.now()}`;
    }

    // Следим за сменой темы
    const observer = new MutationObserver(reloadWithTheme);
    observer.observe(document.documentElement, {
        attributes: true,
        attributeFilter: ['data-theme']
    });

    // Первая загрузка с правильной темой
    reloadWithTheme();
})();
</script>

<div style="max-width: 800px; max-height: 600px; margin: 0 auto;">
  <div style="left: 0px; width: 100%; height: 0px; position: relative; padding-bottom: 75%; overflow: hidden;">
  <img style = "backgroud-color: transparent">
    <iframe src="/ktp/2ktp-b-630-10-0_4-kk-u1.21/2ktp-b-630-10-0_4-kk-u1.21.html"
                 allowfullscreen
                 style="position: absolute; top: 0px; left: 0px; height: 100%; width: 1px; min-width: 100%; *width: 100%;"
                 frameborder="0"
                 scrolling="no">
    </iframe>
    </img>
  </div>
</div>

<!-- Заменить в HTML

         // === Определение темы ===
        let isDark = false;

        try {
            // Приоритет 1: Параметр из URL
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('theme')) {
                isDark = urlParams.get('theme') === 'dark';
            } 
            // Приоритет 2: Тема родительской страницы
            else {
                const parentTheme = window.parent.document.documentElement.getAttribute('data-theme');
                isDark = (parentTheme === 'dark');
            }
        } catch (e) {
            // Приоритет 3: Системная тема
            isDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        }

        var backgroundColor = isDark ? "#1d1e20" : "transparent";
            
         // var backgroundColor = "transparent";
        
        // var backgroundColor = "#FFFFFF";
        
/Заменить в HTML -->

## Альбом типовых решений для 2КТП-Б для трансформаторов мощностью 100 – 630кВА

### Таблица применяемого оборудования 2КТП-Б

| Номер типового решения | ШхДхВ, мм | 100 кВА | 160 кВА | 250 кВА | 400 кВА | 630 кВА | <center>Оборудование РУВН (максимально)</center> | <center>Наименование типового решения</center> |
|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---|:---|
| [2001](#2001) | 3000х6500х2700 | ✅ | ✅ | ❌ | ❌ | ❌ | Моноблоки – 6 шт. | <span style="white-space: nowrap;">2001-2КТП-Б-160-3000-6500-моноблок-1-ряд</span> |
| [2002](#2002) | 3000х6500х2700 | ✅ | ✅ | ❌ | ❌ | ❌ | КРУ «МКЭ» (схемы 301 - 322) – 6 шт. | <span style="white-space: nowrap;">2002-2КТП-Б-160-3000-6500-КРУ-300-1-ряд</span> |
| [2003](#2003) | 3000х8000х2700 | ✅ | ✅ | ✅ | ❌ | ❌ | Моноблоки – 6 шт. | <span style="white-space: nowrap;">2003-2КТП-Б-250-3000-8000-моноблок-1-ряд</span> |
| [2004](#2004) | 3000х8000х2700 | ✅ | ✅ | ✅ | ❌ | ❌ | КРУ «МКЭ» (схемы 301 - 322) – 6 шт. | <span style="white-space: nowrap;">2004-2КТП-Б-250-3000-8000-КРУ-300-1-ряд</span> |
| [2005](#2005) | 3000х8540х2700 | ✅ | ✅ | ✅ | ✅ | ✅ | Моноблоки – 6 шт. | <span style="white-space: nowrap;">2005-2КТП-Б-630-3000-8540-моноблок-1-ряд</span> |
| [2006](#2006) | 3000х8540х2700 | ✅ | ✅ | ✅ | ✅ | ✅ | КРУ «МКЭ» (схемы 301 - 322) – 6 шт. | <span style="white-space: nowrap;">2006-2КТП-Б-630-3000-8540-КРУ-300-1-ряд</span> |
| [2007](#2007) | 3000х8540х2700 | ✅ | ✅ | ✅ | ❌ | ❌ | Моноблоки – 8 шт. | <span style="white-space: nowrap;">2007-2КТП-Б-250-3000-8540-моноблок-угловое</span> |
| [2008](#2008) | 3000х8540х2700 | ✅ | ✅ | ✅ | ❌ | ❌ | КРУ «МКЭ» (схемы 301 - 322) – 8 шт. | <span style="white-space: nowrap;">2008-2КТП-Б-250-3000-8540-КРУ-300-угловое</span> |
| [2009](#2009) | 3200х6700х2700 | ✅ | ✅ | ✅ | ❌ | ❌ | Моноблоки – 6 шт. | <span style="white-space: nowrap;">2009-2КТП-Б-250-3200-6500-моноблок-1-ряд</span> |
| [2010](#2010) | 3200х6700х2700 | ✅ | ✅ | ✅ | ❌ | ❌ | КРУ «МКЭ» (схемы 301 - 322) – 6 шт. | <span style="white-space: nowrap;">2010-2КТП-Б-250-3200-6500-КРУ-300-1-ряд</span> |
| [2011](#2011) | 3200х6700х2700 | ✅ | ✅ | ✅ | ❌ | ❌ | Моноблоки – 8 шт. | <span style="white-space: nowrap;">2011-2КТП-Б-250-3200-6700-моноблок-2-ряда</span> |
| [2012](#2012) | 3200х7500х2700 | ✅ | ✅ | ✅ | ❌ | ❌ | КСО «МКЭ» (схемы 001 - 100) – 6 шт. | <span style="white-space: nowrap;">2012-2КТП-Б-250-3200-7500-КСО-000-2-ряда</span> |
| [2013](#2013) | 3500х7100х2700 | ✅ | ✅ | ✅ | ✅ | ✅ | Моноблоки – 8 шт. | <span style="white-space: nowrap;">2013-2КТП-Б-630-3500-7100-моноблок-1-ряд</span> |
| [2014](#2014) | 3500х7100х2700 | ✅ | ✅ | ✅ | ✅ | ✅ | КРУ «МКЭ» (схемы 301 - 322) – 6 шт. | <span style="white-space: nowrap;">2014-2КТП-Б-630-3500-7100-КРУ-300-1-ряд</span> |
| [2015](#2015) | 3500х7500х2700 | ✅ | ✅ | ✅ | ✅ | ✅ | КСО «МКЭ» (схемы 901 - 940) – 8 шт. | <span style="white-space: nowrap;">2015-2КТП-Б-630-3500-7500-КСО-900-1-ряд</span> |
| [2016](#2016) | 3500х7300х2700 | ✅ | ✅ | ✅ | ✅ | ✅ | Моноблоки – 10 шт. | <span style="white-space: nowrap;">2016-2КТП-Б-630-3500-7300-моноблок-2-ряда</span> |
| [2017](#2017) | 3500х7300х2700 | ✅ | ✅ | ✅ | ✅ | ✅ | КРУ «МКЭ» (схемы 301 - 322) – 8 шт. | <span style="white-space: nowrap;">2017-2КТП-Б-630-3500-7300-КРУ-300-2-ряда</span> |
| [2018](#2018) | 3500х8400х2700 | ✅ | ✅ | ✅ | ✅ | ✅ | КСО «МКЭ» (схемы 901 - 940) – 10 шт. | <span style="white-space: nowrap;">2018-2КТП-Б-630-3500-8400-КСО-900-угловое</span> |
| [2019](#2019) | 3500х8400х2700 | ✅ | ✅ | ✅ | ✅ | ✅ | Моноблок – 10 шт. | <span style="white-space: nowrap;">2019-2КТП-Б-630-3500-8400-моноблок-угловое</span> |
| [2020](#2020) | 3500х8400х2700 | ✅ | ✅ | ✅ | ✅ | ✅ | КРУ «МКЭ» (схемы 301 - 322) – 10 шт. | <span style="white-space: nowrap;">2020-2КТП-Б-630-3500-8400-КРУ-300-угловое</span> |
| [2021](#2021) | 3500х8400х2700 | ✅ | ✅ | ✅ | ✅ | ✅ | КРУ «МКЭ» (схемы 201 - 227) – 6 шт. | <span style="white-space: nowrap;">2021-2КТП-Б-630-3500-8400-КРУ-200-угловое</span> |

<div class="gallery">

<div class="gallery-item" id="2001">

### Типовое решение №2001

{{< gallery
src="../img/2001-2ktp-b-160-3000-6500-monoblok-1-ryad.png"
alt="2001-2КТП-Б-160-3000-6500-моноблок-1-ряд"
caption="КТП «МКЭ» мощностью **не более 160кВА** (3000х6500х2700 мм) с **моноблоками** установленными на стороне РУВН с **однорядным расположением**"
>}}

</div>

<div class="gallery-item" id="2002">

### Типовое решение №2002

{{< gallery src="../img/2002-2ktp-b-160-3000-6500-kru-300-1-ryad.png"
alt="2002-2КТП-Б-160-3000-6500-КРУ-300-1-ряд"
caption="КТП «МКЭ» мощностью **не более 160кВА** (3000х6500х2700 мм) с **КРУ «МКЭ» с твердой изоляцией** (схемы 301 - 322) установленными на стороне РУВН с **однорядным расположением**"
>}}

</div>

<div class="gallery-item" id="2003">

### Типовое решение №2003

{{< gallery
src="../img/2003-2ktp-b-250-3000-8000-monoblok-1-ryad.png"
alt="2003-2КТП-Б-250-3000-8000-моноблок-1-ряд"
caption="КТП «МКЭ» мощностью **не более 250кВА** (3000х8000х2700 мм) с **моноблоками** установленными на стороне РУВН с **однорядным расположением**"
>}}

</div>

<div class="gallery-item" id="2004">

### Типовое решение №2004

{{< gallery
src="../img/2004-2ktp-b-250-3000-8000-kru-300-1-ryad.png"
alt="2004-2КТП-Б-250-3000-8000-КРУ-300-1-ряд"
caption="КТП «МКЭ» мощностью **не более 250кВА** (3000х8000х2700 мм) с **КРУ «МКЭ» с твердой изоляцией** (схемы 301 - 322) установленными на стороне РУВН с **однорядным расположением**"
>}}

</div>

<div class="gallery-item" id="2005">

### Типовое решение №2005

{{< gallery
src="../img/2005-2ktp-b-630-3000-8540-monoblok-1-ryad.png"
alt="2005-2КТП-Б-630-3000-8540-моноблок-1-ряд"
caption="КТП «МКЭ» мощностью **не более 250кВА** (3000х8540х2700 мм) с **моноблоками** установленными на стороне РУВН с **однорядным расположением**"
>}}

</div>

<div class="gallery-item" id="2006">

### Типовое решение №2006

{{< gallery
src="../img/2006-2ktp-b-630-3000-8540-kru-300-1-ryad.png"
alt="2006-2КТП-Б-630-3000-8540-КРУ-300-1-ряд"
caption="КТП «МКЭ» мощностью **не более 250кВА** (3000х8540х2700 мм) с **КРУ «МКЭ» с твердой изоляцией** (схемы 301 - 322) установленными на стороне РУВН с **однорядным расположением**"
>}}

</div>

<div class="gallery-item" id="2007">

### Типовое решение №2007

{{< gallery
src="../img/2007-2ktp-b-250-3000-8540-monoblok-uglovoe.png"
alt="2007-2КТП-Б-250-3000-8540-моноблок-угловое"
caption="КТП «МКЭ» мощностью **не более 250кВА** (3200х6500х2700 мм) с **моноблоками** установленными на стороне РУВН с **угловым расположением**"
>}}

</div>

<div class="gallery-item" id="2008">

### Типовое решение №2008

{{< gallery
src="../img/2008-2ktp-b-250-3000-8540-kru-300-uglovoe.png"
alt="2008-2КТП-Б-250-3000-8540-КРУ-300-угловое"
caption="КТП «МКЭ» мощностью **не более 250кВА** (3200х6500х2700 мм) с **КРУ «МКЭ» с твердой изоляцией** (схемы 301 - 322) установленными на стороне РУВН с **угловым расположением**"
>}}

</div>
<div class="gallery-item" id="2009">

### Типовое решение №2009

{{< gallery
src="../img/2009-2ktp-b-250-3200-6500-monoblok-1-ryad.png"
alt="2009-2КТП-Б-250-3200-6500-моноблок-1-ряд"
caption="КТП «МКЭ» **не более 250кВА** (3200х6700х2700 мм) с **моноблоками** установленными на стороне РУВН с **однорядным расположением**"
>}}

</div>

<div class="gallery-item" id="2010">

### Типовое решение №2010

{{< gallery
src="../img/2010-2ktp-b-250-3200-6500-kru-300-1-ryad.png"
alt="2010-2КТП-Б-250-3200-6500-КРУ-300-1-ряд"
caption="КТП «МКЭ» **не более 250кВА** (3200х6500х2700 мм) с **КРУ «МКЭ» с твердой изоляцией** (схемы 301 - 322) установленными на стороне РУВН с **однорядным расположением**"
>}}

</div>

<div class="gallery-item" id="2011">

### Типовое решение №2011

{{< gallery
src="../img/2011-2ktp-b-250-3200-6700-monoblok-2-ryada.png"
alt=""
caption="КТП «МКЭ» мощностью **не более 250кВА** (3200х6700х2700 мм) с **моноблоками** установленными на стороне РУВН с **двухрядным расположением**"
>}}

</div>

<div class="gallery-item" id="2012">

### Типовое решение №2012

{{< gallery
src="../img/2012-2ktp-b-250-3200-7500-kso-000-2-ryada.png"
alt=""
caption="КТП «МКЭ» мощностью **не более 250кВА** (3200х7500х2700 мм) с **КСО «МКЭ»** (схемы 001 - 100) установленными на стороне РУВН с **двухрядным расположением**"
>}}

</div>

<div class="gallery-item" id="2013">

### Типовое решение №2013

{{< gallery
src="../img/2013-2ktp-b-630-3500-7100-monoblok-1-ryad.png"
alt=""
caption="КТП «МКЭ» мощностью **не более 630кВА** (3500х7100х2700 мм) с **моноблоками** установленными на стороне РУВН с **однорядным расположением**"
>}}

</div>

<!--
<div class="gallery-item">

### Типовое решение №2014

{{< gallery
src="../img/1014-2ktp-b-630-3500-7100-monoblok-1-ryad.png"
alt=""
caption="КТП «МКЭ» мощностью **не более 630кВА** (3500х7100х2700 мм) с **моноблоками** установленными на стороне РУВН с однорядным расположением"
>}}

</div>

<div class="gallery-item">

### Типовое решение №2015

{{< gallery
src="../img/1015-2ktp-b-630-3500-7300-kru-300-2-ryada.png"
alt=""
caption="КТП «МКЭ» мощностью **не более 630кВА** (3500х7300х2700 мм) с **КРУ «МКЭ» с твердой изоляцией** (схемы 301 – 322) установленными на стороне РУВН с двухрядным расположением"
>}}

</div>

<div class="gallery-item">

### Типовое решение №2016

{{< gallery
src="../img/1016-2ktp-b-630-3500-7300-monoblok-2-ryada.png"
alt=""
caption="КТП «МКЭ» мощностью **не более 630кВА** (3500х7300х2700 мм) с **моноблоками** установленными на стороне РУВН с двухрядным расположением"
>}}

</div>

<div class="gallery-item">

### Типовое решение №2017

{{< gallery
src="../img/1017-2ktp-b-630-3500-7500-kso-900-1-ryad.png"
alt=""
caption="КТП «МКЭ» мощностью **не более 630кВА** (3500х7500х2700 мм) **КСО «МКЭ»** (схемы 901.01 – 940.01) установленными на стороне РУВН с однорядным расположением"
>}}

</div>

<div class="gallery-item">

### Типовое решение №2018

{{< gallery
src="../img/1018-2ktp-b-630-3500-8400-kru-200-uglovoe.png"
alt=""
caption="КТП «МКЭ» мощностью **не более 630кВА** (3500х8400х2700 мм) с **КРУ «МКЭ» малогабаритного исполнения** (схемы 201 – 227) установленными на стороне РУВН с угловым расположением"
>}}

</div>

<div class="gallery-item">

### Типовое решение №2019

{{< gallery
src="../img/1019-2ktp-b-630-3500-8400-kru-300-uglovoe.png"
alt=""
caption="КТП «МКЭ» мощностью **не более 630кВА** (3500х8400х2700 мм) с **КРУ «МКЭ» с твердой изоляцией** (схемы 301 – 322) установленными на стороне РУВН с угловым расположением"
>}}

</div>

<div class="gallery-item">

### Типовое решение №2020

{{< gallery
src="../img/1020-2ktp-b-630-3500-8400-kso-900-uglovoe.png"
alt=""
caption="КТП «МКЭ» мощностью **не более 630кВА** (3500х8400х2700 мм) с **КСО «МКЭ»** для схем 9ХХ.ХХ установленными на стороне РУВН с угловым расположением"
>}}

</div>

<div class="gallery-item">

### Типовое решение №2021

{{< gallery
src="../img/1021-2ktp-b-630-3500-8400-monoblok-uglovoe.png"
alt=""
caption="КТП «МКЭ» мощностью **не более 630кВА** (3500х8400х2700 мм) с **моноблоками** установленными на стороне РУВН с угловым расположением"
>}}

</div>
-->

</div>

<!-- Скрипт для Lightbox -->
<script>
(function() {
  const lightbox = document.createElement('div');
  lightbox.id = 'lightbox';
  lightbox.innerHTML = `
    <img id="lightbox-img" src="" alt="">
    <div id="lightbox-caption" class="caption"></div>
  `;
  document.body.appendChild(lightbox);

  function openLightbox(img) {
    document.getElementById('lightbox-img').src = img.dataset.full || img.src;
    document.getElementById('lightbox-caption').textContent = img.dataset.caption || img.alt || '';
    lightbox.classList.add('active');
  }

  // Делегирование событий (гораздо эффективнее)
  document.addEventListener('click', e => {
    if (e.target.matches('.gallery-item img')) {
      openLightbox(e.target);
    }
  });

  // Закрытие
  lightbox.addEventListener('click', e => {
    if (e.target === lightbox) lightbox.classList.remove('active');
  });

  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && lightbox.classList.contains('active')) {
      lightbox.classList.remove('active');
    }
  });
})();
</script>