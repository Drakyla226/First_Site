<?php $title_name = "Оператор continue"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Оператор continue</div>
    <div class="div_main">при использовании внутри структуры цилка, оператор <b>continue</b> позволяет пропустить то, что осталось от текущей итерации цикла и перейти к следующей. Зачем выполнение продолжается с подсчета условия и происходит переход к началу следующей итерации.</div>
    <div class="div_main">Следующий пример пропускает четные числа в цикле <b>for</b>.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        for ($i = 0; $i < 10; $i++){<br>
          if ($i / 2 ==0){<br>
            continue;<br>
          }<br>
          <u>echo</u> "$i ";<br>
        }<br>
        // Вывод: 1 3 5 7 9<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Вы можете использовать оператор <b>continue</b> со всеми цикличными структурами.</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
