<?php $title_name = "PHP формы"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Формы (fomr)</div>
    <div class="div_main">Целью суперглобальных переменнях <b>&#36;_GET</b> и <b>&#36;_POST</b>.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        &lt;form method="post"&gt;<br>
        Name: &lt;input type = "text" name="name"/&gt;<br>
        Age: &lt;input type="text" name="age"/&gt;<br>
        &lt;input type="submit" name="submit" value="submit"/&gt;<br>
        &lt;/form"&gt;<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Целью суперглобальных перменных <b>&#36;_GET</b> и <b>&#36;_POST</b> является сбор информации, которая вводится в форму.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
