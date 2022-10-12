<?php $title_name = "Оператор elseif"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Оператор elseif</div>
    <div class="div_main">Используйте выражение <b>if...elseif...else</b> для определения <b>нового</b> условия для тестирования, если первое условие является <b>ложным</b>.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        if (<условие>){<br>
          Код выполнения при условии = true (истина)<br>
        }elseif (<условие>){<br>
          Код выполнения при условии = true (истина)<br>
        }else{<br>
          Код выполнения при условии = false (ложь)<br>
        }<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Вы можете добавить столько выражений <b>elseif</b>, сколько вам необходимо. Только не забывайте, что выражение <b>elseif</b> должно начинаться с оператора <b>if</b>.</div>

    <div class="div_main">Нижеуказанный пример выводит наибольшее из двух чисел, а если эти числа равны, то выводит их сумму:</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $x = 15;<br>
        $y = 15;<br>
        if ($x > y){<br>
          <u>echo</u> $x;<br>
        }elseif ($x < y){<br>
          <u>echo</u> $y;<br>
        }else{<br>
          <u>echo</u> $x + $y;<br>
        }<br>
        // Вывод: 30 ($x + $y)<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Фигурные скобки могут быть пропущены, если имеется только одно выражение после if | elseif | else</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $x = 5;<br>
        if ($x >= 0)<br>
          <u>echo</u> $x;<br>
        else<br>
          <u>echo</u> "x < 0";<br>
        // Вывод: 5 ($x)<br>
        ?&gt;
    </div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
