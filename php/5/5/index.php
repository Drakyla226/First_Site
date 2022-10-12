<?php $title_name = "Цикл for"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Цикл for</div>
    <div class="div_main">Цикл <b>for</b> используется тогда, когда вы заранее знаете, сколько раз должен запуститься скрипт.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        for (init; test; increment){<br>
          // Код...<br>
        }<br>
        ?&gt;
    </div>
    <div class="div_main">
      <b>Параметры:</b>
      <ul>
        <li><b>init</b>: инициализирует значение счетчика цикла;</li>
        <li><b>test</b>: вычисляется при каждом итерации цикла, продолжая выполнение, если условие <b>верно</b>, и останавливается, если условие <b>ложно</b>;</li>
        <li><b>increment</b>: увеличивает значение счетчика цикла.</li>
      </ul>
  </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">каждое выражение параметра может быть пустым, или может содержать несколько выражений, разделенных между собой <b>запятыми</b>. В выражении <b>for</b>, параметры разделяются <b>точной с запятой</b></div>

    <div class="div_main">Нижеуказанный пример выводит числа от 0 до 5:</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        for ($i = 0; i < 6; i++){<br>
          <u>echo</u> "i = $i &lt;br/&gt;";<br>
        }<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Цикл <b>for</b> в примере выше сначала устанавливает переменную <b>$i</b> равно <b>0</b>,затем проверяет условие <b>$i < 6</b>. Если устовие верное, то запускаемся код. После этого происходит инкрементирование переменной <b>$i</b> (i++).</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
