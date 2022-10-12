<?php $title_name = "Функции определенные пользователем"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Функции</div>
    <div class="div_main"><b>Функция</b> является блоком выражения, которые могут повторно использоваться в программе. Функция не будет выполнена сразу после загрузки страницы, она будет выполнена после ее вызова. Объявление пользовательских функций начинается со слова <b>function</b></div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        function functionName(){<br>
        // Код функции<br>
        }<br>
        ?&gt;
    </div>
    <div class="div_main">Имя функции может начинаться с буквы или нижнего подчеркивания, но не с цифры или специального символа.</div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Имена функций <b>не</b> явяляются чувствительными к регистру.</div>

    <div class="div_main">Создадим функцию <b>sayHello()</b>. Открывающая фигурная скобка (<b>{</b>) указывает на начало кода функции, а закрывающая фигурная скобка (<b>}</b>) на окончание кода функции. Для вызова функции необходимо просто ввести ее имя.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        function sayHello(){<br>
        <u>echo</u> "Hello!"<br>
        }<br>
        sayHello(); // Вывод: Hello<br>
        ?&gt;
    </div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
