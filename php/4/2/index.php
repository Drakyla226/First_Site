<?php $title_name = "Ассоциативные массивы"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Ассоциативные массивы</div>
    <div class="div_main"><b>Ассоциативные</b> массивы - это массивы, которые используют именованные ключи, которые вы им присваиваем. Есть два способа создания такого массива:</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        <b>// Первый способ:</b><br>
        $people = array("David"=>"27", "Amy"=>"22", "John"=>"18");<br>
        <b>// Второй способ:</b><br>
        $people[David] = "27";<br>
        $people[Amy] = "22";<br>
        $people[John] = "18";<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">В первом примере обратите внимание на использование знака <b>=></b> для присваивания значений к именованным ключам.</div>

    <div class="div_main">Используйте именованные ключи для доступа к членам массива:</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $people = array("David"=>"27", "Amy"=>"22", "John"=>"18");<br>
        <u>echo</u> $people["Amy"]; // Вывод: 22<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">По ключу массива можно узнать его значение.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
