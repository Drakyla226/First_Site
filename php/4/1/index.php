<?php $title_name = "Числовые массивы"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Массивы</div>
    <div class="div_main"><b>Массив</b> - это специальная переменная, которая может одновременно хранить больше одного значения.</div>
    <div class="div_main">Если у вас есть список наименований (список имен), хранение их по одному в разных переменных будет выглядеть следующим образом:</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $name1 = "David";<br>
        $name2 = "Amy";<br>
        $name3 = "John";<br>
        ?&gt;
    </div>
    <div class="div_main">Но что.ю если у вас в списке 100 или больше имен? Решением будет создать массив.</div>

    <div class="div_head" id="head_2">Числовые массивы</div>
    <div class="div_main">Числовые, или индексированные массивы, ассоциируют числовой индекс с их значениями. Индекс может быть присвоен автоматически (индекс начинается с 0), следующим образом:</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $names = array("David", "Amy", "John");<br>
        ?&gt;
    </div>
    <div class="div_main">В качестве альтернативы, можно присвоить свой индекс вручную:</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $names[0] = "David";<br>
        $names[1] = "Amy";<br>
        $names[2] = "John";<br>
        ?&gt;
    </div>
    <div class="div_main">Мы определили массив с именем <b>$names</b>, который хранит три значения. Вы можете получить доступ к элементу массива через его индекс:</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        <u>echo</u> $names[0]; // Вывод: David<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Запомните, что индекс массива начинается с <b>0</b>, а не с <b>1</b>.</div>

    <div class="div_head" id="head_2">Числовые массивы</div>
    <div class="div_main">Вы можете хранить вместе целые числа, строки и значения других типов данных в одном массиве:</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $my = array(20, "Олег", "П-11");<br>
        echo "Меня зовут $my[1], мне $my[0]. Учащийся группы $my[2]";<br>
        // Вывод: <?php  $my = array("Олег", 20, "П-11");
        echo "Меня зовут $my[0], мне $my[1]. Учащийся группы $my[2]";?><br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Массив может хранить любой тип данных.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
