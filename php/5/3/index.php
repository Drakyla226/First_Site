<?php $title_name = "Цикл while"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Циклы</div>
    <div class="div_main">При написании кода, возможно вам понадобится повторно запустить один и тот же блок кода. Всмето добавления несколько их идентичных строк кода в скрипте, мы можем использорвать <b>цикл</b> для выполнения подобного задания.</div>

    <div class="div_head" id="head_2">Цикл while</div>
    <div class="div_main">Цикл <b>while</b> выполняет блок кода, пока указанное условие является верным.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        while (<условие>) {<br>
          // Код...<br>
        }<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Если условие никогда не станет <b>ложным</b>, то выражение будет продолжать выполняться бесконечно.</div>

    <div class="div_main">В нижеуказанном примере сначала устанавливается значение переменной <b>$i</b> равной <b>1</b>, затем цикл <b>while</b> будет запускаться, пока <b>$i</b> меньше 7 ($i < 7). <b>$i</b> будет увеличиваться на <b>1</b> при каждом запуске цикла ($i++).</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $i = 1;<br>
        while ($i < 7){<br>
          <u>echo</u> "i = $i &lt;br/&gt;";<br>
          i++;<br>
        }<br>
        ?&gt;
    </div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
