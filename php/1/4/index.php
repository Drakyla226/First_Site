<?php $title_name = "Комментарии"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Комментарии</div>
    <div class="div_main">В PHP коде.ю <b>комментарии</b> являются строкой, которая не выполняется как часть программы. Вы можете использовать комментарии, чтобы общаться с другими программистами, чтобы они могли понять, что вы сделали, или в качестве напоминания для вас, что сделаил вы.<br><br>
        <b>Однострочный</b> комментарий начинается с <b>//</b>:</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        //Жирный текст<br>
        <u>echo</u> "&lt;strong&gt;Это жирный текст&lt;/strong&gt;";<br>
        ?&gt;
    </div>

    <div class="div_head" id="head_2">Многострочные комментарии</div>
    <div class="div_main"><b>Многострочные комментарии</b> используются для составления комментариев, которые занимают больше одной строки.<br>
        Многострочные комментарии начинаются с <b>/*</b> и заканчиваются <b>*/</b>.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        <u>echo</u> "Первая строчка";<br>
        /*<br>
        Это пример<br>
        Многострочных комментариев<br>
        */<br>
        <u>echo</u> "Вторая строчка";<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Добавление комментариев при написании кода является хорошей практикой. Они погомают другим понять ваше мышление и вам становится легче возвращаться к вашему коду спустя время.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
