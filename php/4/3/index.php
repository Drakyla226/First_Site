<?php $title_name = "Многомерные массивы"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Многомерные массивы</div>
    <div class="div_main"><b>Многомерные</b> массивы содержат один или больше массивов.</div>
    <div class="div_main">Размерность массива означает число индексов, которые вам понадобится, чтобы выбрать:
      <ul>
        <li>&#9866; Для <b>двухмерного</b> массива, вам понадобится два индекса, чтобы выбрать элемент;</li>
        <li>&#9866; Для <b>трехмерного</b> массива, вам понадобится три индекса, чтобы выбрать элемент;</li>
      </ul>
    </div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Массивы с более, чем тремя уровнями глубины, являются сложным для управления.</div>

    <div class="div_main">Создадим двухмерный массив, содержащий три массива:</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $people = array(<br>
        'online'=>array("David", "Amy"),<br>
        'offline'=>array("John", "Rob"),<br>
        'away'=>("Daniel", "Caesar")<br>
        );<br>
        ?&gt;
    </div>
    
        <div class="div_main">Теперь двухмерный массив <b>$people</b> содержит три массива и имеет два индекса: <b>строку</b> и <b>столбец</b>.</div>
        <div class="div_main">Чтобы получить доступ к элементам массива <b>$people</b>, мы должны указать два индекса.</div>
        <div class="div_logo" id="php_logo">PHP</div>
        <div class="div_code">
            &lt;?php<br>
            <u>echo</u> $people['online'][1]; // Вывод: Amy<br>
            <u>echo</u> $people['away'][0]; // Вывод: Daniel<br>
            ?&gt;
        </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Массив в многомерных массивах могут быть числовые, так и ассоциативными.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
