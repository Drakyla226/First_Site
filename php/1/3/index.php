<?php $title_name = "Echo"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Echo</div>
    <div class="div_main">PHP имеет встроенную функцию "<b><u>echo</u></b>", которая используется для вывода текста. В действительности, это не функция, это <b>конструкция языка</b>. Поэтому, она не требует использование скобок.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        <u>echo</u> "I Love PHP!";<br>
        ?&gt;
    </div>
    <div class="dic_main">HTMl разметка модет быть добавлена тексту в выражении конструкции <b><u>echo</u></b>.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        <u>echo</u> "&lt;strong&gt;Это жирный текст&lt;/strong&gt;";<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Текст должен быть в одинарных или <b>двойных кавычках</b>.</div>

    <div class="div_head" id="head_2">PHP выражения</div>
    <div class="div_main">Каждое PHP выражение должно заканчиваться точкой с <b>запятой</b>.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        <u>echo</u> "A";<br>
        <u>echo</u> "B";<br>
        <u>echo</u> "C";<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Если забыть добавить точку с запятой в конце выражения, то будет получена <b>ошибка</b>.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
