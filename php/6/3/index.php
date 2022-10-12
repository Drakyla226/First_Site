<?php $title_name = "Оператор return"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Return</div>
    <div class="div_main">Функция может возвращать значение с помощью оператора <b>return</b>. Оператор <b>return</b> останавливает выполнение функции и отправляет значение обратно к вызывающему коду.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        function nult($num1, $num2){<br>
          $res = $num1 * $num2;<br>
          return $res;<br>
        }<br>
        <u>echo</u> mult(4, 5); // Вывод: 20<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Если оператор <b>return</b> будет пропущен, то будет возвращего <b>NULL</b>. Функция не может вернуть множество значений, но возвращение <b>массива</b> происведет такой же результат.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
