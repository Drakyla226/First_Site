<?php $title_name = "Include и Require"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">include и require</div>
    <div class="div_main">Выражение <b>include</b> и <b>require</b> позволяет включить содержимое одного PHP файла в другой PHP файл, до выполнения его сервером. Включение фалов экономит немного времени. Вы можете создавать стандартный заголовок, нижний колонтитул, или файл меню для всех ваш страниц. Зачем, когда необходимо обновление заголовка, вы модете обновить только его включенный файл.</div>
    <div class="div_main">Предположим, что у нас есть стандартный файл заголовка с именем <b>header.php</b>:</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        <u>echo</u> "&lt;h1&gt;Welcom&lt;/h1&gt;"<br>
        ?&gt;
    </div>
    <div class="div_main">Использайте выражание <b>include</b> для включения заголовочного файла в страницу:</div>
    <div class="div_main">Предположим, что у нас есть стандартный файл заголовка с именем <b>header.php</b>:</div>
    <div class="div_code">
        &lt;?php<br>
        include "header.php";<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Выражение <b>include</b> и <b>require</b> позволяют включить содержимое одного PHP файла в другой PHP файл, до выполнения его сервером.</div>

    <div class="div_main">Выражение <b>require</b> идентично выражению <b>include</b>, отличием является то, что в случае отказа, убдет выведена фатальная ошибка. Когда файл включен с помощью выражения <b>include</b>, но PHP не может его найти, то скрипт продолжает выполняться. В случае с <b>require</b>, скрипт прекратит выполнение и выведет ошибку.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        require "header.php";<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Используйте <b>require</b>, когда файл необходим для запуска приложения. Используйте <b>include</b>, когда наличие файла не обязательно. Выполнение приложения продолжится, даже если файл не будет найден.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
