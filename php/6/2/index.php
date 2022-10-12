<?php $title_name = "Параметры функций"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Параметры функций</div>
    <div class="div_main">Информация может быть передана в функции через <b>аргументы</b>, которые являются переменными. Агрументы указываются после имени функции, внутри скобок. Далее наша функция принимает число, умножает его на два и возвращаем результат:</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        function multiplyByTwo($number){<br>
          $answer = $number * 2;<br>
          <u>echo</u> $answer;<br>
        }<br>
        multiplyByTwo(3); // Вывод: 6<br>
        ?&gt;
    </div>
    <div class="div_main">Вы можете добавить столько аргументов, сколько вам необходимо, разделяя их <b>запятыми</b>.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        function multiplyByTwo($num1, $num2){<br>
          <u>echo</u> $num1 * $num2;<br>
        }<br>
        multiplyByTwo(2, 4); // Вывод: 8<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">При определении функций, переменные представляющие значение, которые передаются для работы в функцию, называются <b>параметрами</b>. Однако, при использовании функции, значение, которое вы ей передаете, называется <b>аргументом</b>.</div>

    <div class="div_head" id="head_2">Аргументы по умолчанию</div>
    <div class="div_main">Аргументы по умолчанию могут быть определены для аргументов функции. В примере ниже мы вызываем функцию <b>setCounter()</b>. Здесь еет аргументов, так что она примет значение по умолчанию, которые быть определены.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        function setCounter($num = 5){<br>
          <u>echo</u> "Counter = $num";<br>
        }<br>
        setCounter(10); // Вывод: 10<br>
        setCounter(); // Вывод: 5<br>
        ?&gt;
    </div>
    <div class="div_main">Также в функции могул быть переменные по умолчанию и переменные не по умолчанию</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        function setCounter($num1, $num2 = 5){<br>
          <u>echo</u> $num1 * $num2;<br>
        }<br>
        setCounter(10, 10); // Вывод: 100<br>
        setCounter(10); // Вывод: 50<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">При использовании аргументов по умолчанию, они должны располагаться с правой стороны от аргументов не по умолчанию, иначе они будет работать не так как от них ожидается.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
