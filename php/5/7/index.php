<?php $title_name = "Оператор switch"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Оператор switch</div>
    <div class="div_main">Оператор <b>switch</b> является альтернативой выражения <b>if...elseif...else</b>. Используйте оператор switch для выбора одного блока кода из множества для выполнения.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        switch (variable) {<br>
          case 'value1':<br>
            // code...<br>
            break;<br>
          case 'value2':<br>
            // code...<br>
            break;<br>
          default:<br>
            // code...<br>
            break;<br>
        }&gt;
    </div>
    <div class="div_main">
      <b>Параметры</b>:
      <ul>
        <li><b>variable</b>: переменная значения;</li>
        <li><b>value1, value2...</b>: переменная, которую неободимо сравнить с <b>variable</b></li>
        <li><b>default</b>: значение по умолчанию, если все условия <b>ложны</b>.</li>
      </ul>
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Ключевое слово <b>break</b>, которое следует за каждым <b>case</b>, используется для предотвращения автоматического перехлда на следующий сектор <b>case</b>. Если вы забудите указать выражение <b>break;</b> , то PHP автоматически прожолжит выполненяться через последующие выражения <b>case</b>, даже если они не соответствуют выражению.</div>

    <div class="div_head" id="head_2">default</div>
    <div class="div_main">Выражение <b>default</b> используется, если не было найдено совпадение:</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $x = 5;<br>
        switch ($x){<br>
          case 1:<br>
            <u>echo</u> "Один";<br>
            break;<br>
          case 2:<br>
            <u>echo</u> "Два";<br>
            break;<br>
          case 3:<br>
            <u>echo</u> "Три";<br>
            break;<br>
          default:<br>
            <u>echo</u> "Нет совпадений"<br>
        }<br>
        // Совпадений нет<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Выражение <b>default</b> является опциональным и может быть опещено.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
