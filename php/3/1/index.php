<?php $title_name = "Арифметические операторы"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Операторы</div>
    <div class="div_main"><b>Операторы</b> выполняют операции над переменными и значениями.</div>
    <table>
      <tr align="center">
        <td>1</td>
        <td><b>+</b></td>
        <td>2</td>
        <td><b>=</b></td>
        <td>3</td>
      </tr>
      <tr align="center">
        <td>операнд</td>
        <td><b>оператор</b></td>
        <td>операнд</td>
        <td><b>оператор</b></td>
        <td>операнд</td>
      </tr>
    </table>


    <div class="div_head" id="head_2">Арифметические операторы</div>
    <div class="div_main"><b>Арифметические операторы</b> работают с числовыми значениями для выполнения обычных арифметических операций.</div>
    <table class="t3_1">
      <tr align="center">
        <td class="td_1">Оператор</td><td class="td_1">Название</td><td class="td_1">Пример</td>
      </tr>
      <tr align="center" class="tr_">
        <td>+</td><td><b>Сложение</b></td><td>$x + $y</td>
      </tr>
      <tr align="center" class="tr__">
        <td>-</td><td><b>Вычитание</b></td><td>$x + $y</td>
      </tr>
      <tr align="center" class="tr_">
        <td>*</td><td><b>Умножение</b></td><td>$x * $y</td>
      </tr>
      <tr align="center" class="tr__">
        <td>/</td><td><b>Деление</b></td><td>$x / $y</td>
      </tr>
      <tr align="center" class="tr_">
        <td>%</td><td><b>Деление по модулю</b></td><td>$x % $y</td>
      </tr>
    </table>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $x = 10;<br>
        $y = 6;<br>
        <u>echo</u> $x + $y; // Вывод: 16<br>
        <u>echo</u> $x - $y; // Вывод: 4<br>
        <u>echo</u> $x * $y; // Вывод: 60<br>
        <u>echo</u> $x / $y; // Вывод: 1.6666666666667<br>
        <u>echo</u> $x % $y; // Вывод: 4<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Если вы используете числа с плавающей точкой с оператором делания по модолю (отстаток от деления) , то они конвертируются в <b>целые числа до операции</b>.</div>

    <div class="div_head" id="head_2">Инеремент и декремент</div>
    <div class="div_main">Операторы <b>инкремента</b> используются для инкрементирования значения переменных.</div>
    <div class="div_main">Операторы <b>декремента</b> используются для декрементирования значения переменных.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        $x+=;<br>
        $x--;<br>
    </div>
    <div class="div_main">
      Операторы инкремента и декремента могут находиться либо до, либо после переменнойю.
    </div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        $x++;<br>
        $x--;<br>
        ++$x;<br>
        --$x;<br>
    </div>
    <div class="div_main">
      Разница в том, что пост-инкремент возвращает оригинальное значение <b>до</b> изменения переменной, а пре-инкремент сначала изменяет переменную, а зачем возвращает значение.
    </div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
      &lt;?php<br>
      $a = 2;<br>
      $b = $a++; // a = 3, b = 2<br>
      $a = 2;<br>
      $b = ++$a; // a = 3, b = 3<br>
      ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Операторы инкремента используются для инкрементирования значений переменных.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
