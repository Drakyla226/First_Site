<?php $title_name = "Операторы сравнивания"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Операторы сравления</div>
    <div class="div_main">Операторы <b>сравнения</b> сравнивают <b>два</b> значения (числи или строки).</div>
    <div class="div_main">Операторы сравнения используются внутри условных операторов, и вычисляются равными <b>true (истина)</b> или <b>false (ложь)</b>.</div>

    <table class="t3_1">
      <tr align="center">
        <td class="td_1">Оператор</td><td class="td_1">Название</td><td class="td_1">Пример</td><td class="td_1">Результат</td>
      </tr>
      <tr align="center" class="tr_">
        <td>==</td><td><b>Равно</b></td><td>$x == $y</td><td><b>Истина при $x равно $y</b></td>
      </tr>
      <tr align="center" class="tr__">
        <td>===</td><td><b>Идентичность</b></td><td>$x === $y</td><td><b>Истина при $x равно $y и однотипны</b></td>
      </tr>
      <tr align="center" class="tr_">
        <td><></td></td><td><b>Не равно</b></td><td>$x <> $y</td><td><b>Истина при $x не равно $y</b></td>
      </tr>
      <tr align="center" class="tr__">
        <td>!==</td><td><b>Не идентично</b></td><td>$x !== $y></td><td><b>Истина при $x равно $y или не однотипны</b></td>
      </tr>
    </table>

    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Будьте осторожны с использованием <b>==</b> и <b>===</b>, первый (<b>==</b>) не проверяет тип данных, а второй (<b>===</b>) проверяет.</div>

    <div class="div_head" id="head_2">Операторы сравления</div>
    <div class="div_main">Дополнительные операторы сравнения:</div>

    <table class="t3_1">
      <tr align="center">
        <td class="td_1">Оператор</td><td class="td_1">Название</td><td class="td_1">Пример</td><td class="td_1">Результат</td>
      </tr>
      <tr align="center" class="tr_">
        <td>></td></td><td><b>Больше чем</b></td><td>$x > $y</td><td><b>Истина при $x больше чем $y</b></td>
      </tr>
      <tr align="center" class="tr__">
        <td><</td><td><b>Меньше чем</b></td><td>$x < $y</td><td><b>Истина при $x меньше чем $y</b></td>
      </tr>
      <tr align="center" class="tr_">
        <td>>=</td></td></td><td><b>Больше, либо равно</b></td><td>$x >= $y</td><td><b>Истина при $x больше, лиоб равно $y</b></td>
      </tr>
      <tr align="center" class="tr__">
        <td><=</td><td><b>Меньше, либо равно</b></td><td>$x <= $y</td><td><b>Истина при $x меньше, лиоб равно $y</b></td>
      </tr>
    </table>

    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Операторы сравления в PHP используются для сравнения двух значений.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
