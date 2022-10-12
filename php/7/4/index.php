<?php $title_name = "GET и POST"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">POST</div>
    <div class="div_main">Двумя методами для подтверждения форм является <b>GET</b> и <b>POST</b>. Информация, отправленная из формы с помощью метода <b>POST</b> является невидимой для других, так как все имена и/или значения встроены в теле HTTP запроса. Также, нет лимитов по количеству отправляемой информации. Более того, <b>POST</b> поддержимает дополнительную функциональность, такую как поддержку передачи составных данных во время загрузки файлов на сервер. Однако, не представляется возможным установка закладки на странице, потому что значения не видны.</div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main"><b>POST</b> является  предпочитаемым методом для отправки информации.</div>

    <div class="div_head" id="head_2">GET</div>
    <div class="div_main">Информация, отправленная из формы с помощью метода <b>GET</b> является видимой для всех (все имена переменных и значения отображаются в <b>URL</b>). <b>GET</b> также устанавливает лимит на количество отправляемой информации - около 2000 символов. Однако, так как переменные отображаются в URL, можно сделать закладку страницы, что может быть полезным в некоторых ситуациях.</div>
    <div class="div_main"><b>Файл формы:</b></div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        &lt;form class="form_add_chat" method="POST" id="myclearform"><br>
            &lt;input placeholder="Введите сообщение" id="new_mess" name="Text"&gt;<br>
            &lt;button class="but_" id="but_mess" type="submit"&gt;Оправить&lt;/button&gt;<br>
        &lt;/form&gt;<br>
        ?&gt;
    </div>
    <div class="div_main"><b>Файл вывода:</b></div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        <u>echo</u> "Вы ввели: ".&#36;_GET['text'];<br>
        ?&gt;
    </div>

    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main"><b>GET</b> нельзя <b>никогда</b> использовать для отправки паролей, или другой важдой информации. При использовании <b>POST</b> или <b>GET</b>, проведение надлежащей проверки данных с помощью фильтрации и обработки жизненно важно, чтобы защититься от хакеров и эксплойтов.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
