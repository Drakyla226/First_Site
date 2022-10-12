<?php $title_name = "Чтение файла"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Чтение файла</div>
    <div class="div_main">Функция <b>file()</b> считывает весь файл в <b>массив</b>. Каждый элемент массива соответствует строке файла:</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $file = file("names.txt");<br>
        foreach ($file as $line){<br>
          <u>echo</u> $line.", ";<br>
        }<br>
        ?&gt;
    </div>
    <div class="div_main">Таким образом выводятся все строки из файла и разделяются запятыми.</div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Мы используем цикл <b>foreach</b>, потому что переменная <b>$file</b> является <b>массивом</b>.</div>

    <div class="div_main">В конце вывода в предыдущем примере будет запятая, потому что мы напечатали ее после каждого элемента массива. Следующий код позволяет нам избежать вывода этой последней запятов.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $file = file("names.txt");<br>
        $count = count($file);<br>
        $i = 1;<br>
        foreach ($file as $line){<br>
          <u>echo</u> $line<br>
          if ($i < $count){<br>
            <u>echo</u> ", ";<br>
          }<br>
          i++;<br>
        }<br>
        ?&gt;
    </div>
    <div class="div_main">Переменная <b>$count</b> использует функцию <b>count</b> для получения количества элементов массива <b>$file</b>. Затем в цикле <b>foreach</b> после вывода каждой строки мы определяет меньше ли текущая <b>строка</b>, чем общее количество строк, и выводим запятую, если это так.</div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Таким образом мы избегаем вывод этой последней запятой, потому что в конце <b>$i</b> равно <b>$count</b>.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
