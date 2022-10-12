<?php $title_name = "Константы"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Константы</div>
    <div class="div_main"><b>Константы</b> похожи на переменные, за исключением того, что они не могут быть изменены или переопределеных после их первоначального определения.<br>
        Начинайте имя вышей константы с буквы или нижнего подчеркивания.<br>
        Чтобы создать константу используйте функцию <b>define()</b>:</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        define(name, value, case-insensitive)
    </div>

    <div class="div_main">
        Параметры:<br>
        <ul>
            <li>&#9866; <b>name</b>: определяет имя константы.</li>
            <li>&#9866; <b>value</b>: определяет значение константы.</li>
            <li>&#9866; <b>case-insensitive</b>: определяет, должно ли имя константы быть не чувствительным к регистру. Значение по умолчанию является <b>false(ложь)</b></li>
        </ul>
        Нижеуказанный пример создает константу с именем, <b>чусвствительным к регистру</b>:
    </div>
    <div class="div_code">
        &lt;?php<br>
        define("Name", "Oleg");<br>
        <u>echo</u> Name;<br>
        ?&gt;
    </div>

    <div class="div_main">
        В примере ниже создается константа с именем, <b>не чувствительным к регистру</b>:
    </div>
    <div class="div_code">
        &lt;?php<br>
        define("Name", "Oleg", true);<br>
        <u>echo</u> name;<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Знак доллара ($) не нужен перед именем константы.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
