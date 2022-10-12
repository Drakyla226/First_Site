<?php $title_name = "Оператор break"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Оператор break</div>
    <div class="div_main">Как было рассказано в предыдущем уроке, оператор <b>break</b> используется для выхода из выражения <b>switch</b> при нахождении соответствий. Если оператор <b>break</b> отсутствует, то код продолжит выполняться.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $x = 1;<br>
        switch ($x){<br>
          case 1:<br>
            <u>echo</u> "1";<br>
          case 2:<br>
            <u>echo</u> "2";<br>
          default:<br>
            <u>echo</u> "Совпадений нет";<br>
        }<br>
        // Вывод: 12Совпадений нет<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Оператор <b>break</b> заканчивает текущий <b>for, foreach, while, do...while</b> или <b>switch</b> и продолжает выполнять программу со строки, расположенной сразу после цикла. Оператор <b>break</b> во внешней части программы (т.е. не в управляющем цикле) остановит скрипт.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
