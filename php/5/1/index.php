<?php $title_name = "Операторы If Else"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Условные выражения</div>
    <div class="div_main"><b>Условные выражения</b> выполняют различные действия для различных решенний. Оператор <b>if else</b> используется для выполнения некоторого кода, если условие <b>верно</b>, и выполнение другого кода, если условие <b>ложно</b>.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        if (<условие>){<br>
          Код выполнения при условии = true (истина)<br>
        }else{<br>
          Код выполнения при условии = false (ложь)<br>
        }<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Вы также можете использовать операторы <b>if</b> без оператора <b>else</b>, если вам не нужно ничего выполнять при <b>ложном условии</b>.</div>

    <div class="div_head" id="head_2">If Else</div>
    <div class="div_main">Нижеуказанный пример выводит наибольшее из двух чисел:</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $x = 10;<br>
        $y = 20;<br>
        if ($x >= y){<br>
          <u>echo</u> $x;<br>
        }else{<br>
          <u>echo</u> $y;<br>
        }<br>
        // Вывод: 20 ($y)<br>
        ?&gt;
    </div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
