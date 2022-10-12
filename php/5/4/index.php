<?php $title_name = "Цикл do while"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Цикл do ... while</div>
    <div class="div_main">Цикл <b>do ... while</b> всегда один раз выполняет блок кода, затем проверяет условие, и повторняет цикл, пока указанное условие будет верным.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        do {<br>
          // Код...<br>
        }while(<условие>);<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Независимо от того, будет условие <b>верныйм</b> или <b>ложным</b>, код будет выполнен по меньшей мере <b>один раз</b>, что может быть полезным в некоторых ситуациях.</div>

    <div class="div_main">Нижеуказанный пример выведет некоторое сообщение, а затем инкрементирует переменную <b>$i</b> на единицу. Затем будет проверено условие, и цикл продолжит запускаться пока переменная <b>$i</b> будет меньше, либо равно 7.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $i = 5;<br>
        do{<br>
          echo "i = $i &lt;br/&gt;";<br>
          i++;<br>
        }while($i <= 7)<br>
      ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Обратите примание, что в цикле <b>do ... while</b> условие проверяется <b>после</b> выполнения выражений внутри цикла. Это значит, что цикл <b>do ... while</b> выполнится по меньшей мере один раз, даже если условие изначально было ложным.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
