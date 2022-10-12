<?php $title_name = "Добавление к файлу"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Добавление к файлу</div>
    <div class="div_main">Если вы хотите добавить содержимое к файлу, вам необходимо открыть файл в <b>режиме добавления</b>.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $file = fopen("test.txt", "a");<br>
        fwrite($file, "Text");<br>
        fclose($file);<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">При добавлении в файл с помощью <b>режима "a"</b>, указатель файла установлен в конец файла, что гарантирует, что вся новая информация будет добавлена в конец файла.</div>

    <div class="div_main">Давайте создадим пример формы, которая добавляет заполненную информацию в файл.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        if (isset($_POST['text'])){<br>
          $name = $_POST['text'];<br>
          $file = fopen('names.txt', 'a');<br>
          fwrite($file, $name."\n");<br>
          fclose(file);<br>
        }<br>
        ?&gt;<br>
        &lt;form method="post"&gt;<br>
        Name: &lt;input type="text" name="text"/&gt;<br>
        &lt;input type="submit" name="submit"/&gt;<br>
    </div>
    <div class="div.main">Теперь при каждом вводе имени и ег оотправке оно добавляется в файл <b>names.txt</b> с новой строки.</div>
    <div class="div.main">Фунция <b>isset()</b> определяет, была ли отправлена форма, а также содержится ли текст значение.</div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Мы не определили атрибут <b>action</b> для формы, так что она будет отправлена сама себе.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
