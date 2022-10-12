<?php $title_name = "Логические операторы"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Логические операторы</div>
    <div class="div_main"><b>Логические</b> операторы используются ддля комбинации условных выражений.</div>

    <table class="t3_1">
      <tr align="center">
        <td class="td_1">Оператор</td><td class="td_1">Название</td><td class="td_1">Пример</td><td class="td_1">Результат</td>
      </tr>
      <tr align="center" class="tr_">
        <td>and</td></td><td><b>И</b></td><td>$x and $y</td><td><b>Истина, если и $x, и $y истины</b></td>
      </tr>
      <tr align="center" class="tr__">
        <td>or</td><td><b>Или</b></td><td>$x or $y</td><td><b>Истина, если либо $x, либо $y истины</b></td>
      </tr>
      <tr align="center" class="tr_">
        <td>xor</td></td></td><td><b>Исключающее или</b></td><td>$x xor $y</td><td><b>Истина, если либо $x, либо $y истины, но не истины оба</b></td>
      </tr>
      <tr align="center" class="tr__">
        <td>&&</td><td><b>И</b></td><td>$x && $y</td><td><b>Истина, если и $x, и $y истины</b></td>
      </tr>
      <tr align="center" class="tr_">
        <td>||</td><td><b>Или</b></td><td>$x || $y</td><td><b>Истина, если либо $x, либо $y истины</b></td>
      </tr>
      <tr align="center" class="tr__">
      <td>!</td><td><b>Не</b></td><td>!$x<td><b>Истина, если $x не истино</b></td>
    </tr>
    </table>

    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Вы можете объединить столько терминов, сколько вам необходимо. Используйте скобки <b>()</b> для приоритета.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
