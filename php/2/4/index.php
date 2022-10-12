<?php $title_name = "Область видимости переменных"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Область видимости переменных</div>
    <div class="div_main">PHP переменные могут быть объявлены в любом месте скрипта.</div>
    <div class="div_main"><b>Областью видимости переменной</b> является часть скрипта, в котором можно ссылаться на переменную, или ее использовать.</div>
    <div class="div_main">Наиболее используемыми областями видимости в PHP являются <b>локальная</b> и <b>глобальная</b>.</div>
    <div class="div_main">Переменная, объявленная вне функции, имеет <b>глобальную область видимости.</b></div>
    <div class="div_main">Переменная, объявленная внутри функции, имеет <b>локальную область видимости</b>, и может быть доступна только внутри функции.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $name = 'Oleg';<br>
        function getName(){<br>
          <u>echo</u> $name;}<br>
          getName(); // <u>Error: Underfined variable: name</u><br>
        ?&gt;
    </div>
    <div class="div_main">Этот скрипт вызовет ошибку, потому что переменная $name имеет глобальную область видимости, и к ней не может быть получен доступ изнутри функции getName().</div>

    <div class="div_head" id="head_2">Ключевое слово global</div>
    <div class="div_main">Ключевое слово <b>global</b> используется для получения доступна к глобальной переменной внутри функции.</div>
    <div class="div_main">Чтобы это сделать, необходимо использовать ключевое слово <b>global</b> внутри функции перед переменной.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $name = 'Oleg';<br>
        function getName(){<br>
          global $name;<br>
          <u>echo</u> $name;}<br>
          getName(); // Вывод: Oleg<br>
        ?&gt;
    </div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
