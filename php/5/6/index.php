<?php $title_name = "Цикл foreach"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Цикл foreach</div>
    <div class="div_main">Цикл <b>foreach</b> работает только с массивами, и используется для прохождения по каждой паре ключ/значение в массиве.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        foreach ($variable as $value){<br>
          // Код...<br>
        }<br>
        // Или же<br>
        foreach ($variable as $key => $value){<br>
          // Код...<br>
        }<br>
        ?&gt;
    </div>
    <div class="div_main">Первая форма циклично проходит по массиву. На каждой итерации значение текущего элемента присваивается к переменной <b>$value</b>, а указатель массива смещается на единицу, пока не достигнет последнего элемента массива.</div>
    <div class="div_main">Вторая форма при каждой итерации будет дополнительно присваивать текущий ключ элемента к переменной <b>$key</b>.</div>
    <div class="div_main">Следующий пример демонстрирует цилк, который выводит значение массива <b>$names</b>:</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $names = array ("John", "David", "Amy");<br>
        foreach ($names as $name){<br>
          <u>echo</u> "$name &lt;br/&gt;;<br>
        }<br>
        ?&gt;
    </div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
