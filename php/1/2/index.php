<?php $title_name = "PHP теги"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">PHP синтаксис</div>
    <div class="div_main">Скрипты PHP начитаются с <b>&lt;?php</b> и заканчиваются <b>?&gt;</b></div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        //PHP code goes here<br>
        ?&gt;
    </div>
    <div class="div_main"  id="main_2">
        Далее следует пример простого PHP фалйа. PHP скрипт использует встроенную функцию, которая называется <b>"echo"</b>, для вывода текста "Hello Word!" на веб страницу.
    </div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;html&gt;<br>
        &lt;head&gt;<br>
        &lt;title&gt;Моя первая PHP страница&lt;/title&gt;<br>
        &lt;/head&gt;<br>
        &lt;body&gt;<br>
        &lt;?php<br>
        echo "Hello Word!"<br>
        ?&gt;<br>
        &lt;/body&gt;<br>
        &lt;html&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">PHP выражения заканчиваются точной с <b>запятой (;)</b>.</div>

    <div class="div_main" id="main_2">В качестве альтернативы, мы можем включить PHP в HTML тег &lt;script&gt;</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;html&gt;<br>
        &lt;head&gt;<br>
        &lt;title&gt;Моя первая PHP страница&lt;/title&gt;<br>
        &lt;/head&gt;<br>
        &lt;body&gt;<br>
        &lt;script language="php"&gt;<br>
        echo "Hello Word!"<br>
        &lt;/script&gt;<br>
        &lt;/body&gt;<br>
        &lt;html&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Однако, в последней версии PHP, убрана поддержка тегов &lt;script language="php"&gt;&lt;/script&gt;. Поэтому, мы рекомендуем использовать исключительно <b>&lt;?php ?&gt;</b></div>

    <div class="div_main" id="main_2">Вы также можете использовать сокращенные PHP теги, &lt;? ?&gt;, поскольку они поддерживаются сервером.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?<br>
        echo "Hello Word!"<br>
        ?&gt;<br>
    </div>
    <div class="div_fix_main">Однако, <b>&lt;?php ?&gt;</b>, как официальный стандарт, является рекомендованным способом определения PHP скриптов.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
