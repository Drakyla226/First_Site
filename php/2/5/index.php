<?php $title_name = "Переменные переменных"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Переменные переменных</div>
    <div class="div_main">В PHP вы можете использовать одну переменную для определения другого имени переменной. <b>Переменная переменной</b> рассматриваем значение другой переменной, в качестве ее имени.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $a = 'hello';<br>
        $hello = 'Hi!';<br>
        <u>echo</u> $aa; // Вывод: Hi!
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main"><b>$aa</b> является переменной, которая использует значение другой переменной,<b>$a</b>, в качестве имени. Значение $a эквивалентно "hello". В результате будет переменная $hello, хранящая значение "Hi!".</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
