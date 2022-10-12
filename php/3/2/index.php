<?php $title_name = "Операторы присваивания"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Операторы присваивания</div>
    <div class="div_main">Операторы <b>присваивания</b> служат для установки значения для переменных</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $a = 5;<br>
        $a = $b; // num2 = 5<br>
        ?&gt;
    </div>
    <div class="div_main"><b>$a</b> и <b>$b</b> теперь оба содержат значение 5.</div>
    <div class="div_main">Операторы присваивания могут быть также использованы вместе с арифметическими операторами.</div>
    <table class="t3_1">
      <tr align="center">
        <td class="td_1">Присваивание</td><td class="td_1">То же, что и...</td><td class="td_1">Описание</td>
      </tr>
      <tr align="center" class="tr_">
        <td>x += y</td><td>x = x + y</td><td><b>Сложение</b></td>
      </tr>
      <tr align="center" class="tr__">
        <td>x -= y</td><td>x = x - y</td><td><b>Вычитание</b></td>
      </tr>
      <tr align="center" class="tr_">
        <td>x *= y</td><td>x = x * y</td><td><b>Умножение</b></td>
      </tr>
      <tr align="center" class="tr__">
        <td>x /= y</td><td>x = x / y</td><td><b>Деление</b></td>
      </tr>
      <tr align="center" class="tr_">
        <td>x %= y</td><td>x = x % y</td><td><b>Деление по модулю</b></td>
      </tr>
    </table>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $x = 50;<br>
        $x += 100;<br>
        <u>echo</u> $x; // Вывод: 150<br>
        ?&gt;
    </div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
