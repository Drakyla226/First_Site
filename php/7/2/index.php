<?php $title_name = "&#36;_SERVER. Переменные: host name"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">&#36;_SERVER</div>
    <div class="div_main"><b>&#36;_SERVER['HTTPS_HOST']</b> возвращает Host из текущего запроса. Этот метод может быть полезен, когда у вас много изображений на одном сервере и вам необходимо их перенести на другой <b>host</b>. Вместо замены пути каждого изображения, вы можете сделать следующее:</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $host = &#36;_SERVER['HTTPS_HOST'];<br>
        $image_path = $host.'/images/';<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Теперь путь к вашим сзображениям является динамическим. Он изменится автоматически, основываясь на заголовке <b>Host</b>.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
