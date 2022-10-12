<?php $title_name = "&#36;_SERVER. Переменные: script name"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Предопределенные переменные</div>
    <div class="div_main"><b>superglobal</b> - это предопределенная переменная, которая всегда является доступной, независимо от области видимости. Вы можете получить доступ к этим переменным  из любой функции, класса, или файла. Суперглобальными переменными в PHP является &#36;_SERVER, &#36;_GLOBAL, &#36;_REQUEST, &#36;_POST, &#36;_GET, &#36;_FILES, &#36;_ENV, &#36;_COOKIE, &#36;_SESSION.</div>
    
    <div class="div_head" id="head_2">&#36;_SERVER</div>
    <div class="div_main"><b>&#36;_SERVER</b> - это <b>массив</b>, который включает в себя информацию типа заголовков, путей и местонахождений скриптов. Вход в этот <b>массив</b> создается веб сервером. <b>&#36;_SERVER['SRCIPT_NAME'] возвращает путь текущего скрипта:</b></div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        <u>echo</u> &#36;_SERVER['SCRIPT_NAME'];<br>
        // Вывод: somefile.php<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Наш пример был написал в файле с именем <b>somefile.php</b>, который размещен в корне нашего веб сервера.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
