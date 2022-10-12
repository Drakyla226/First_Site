<?php $title_name = "Типы данных"?>
<?php require($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main class="main_head">
    <div class="div_head">Типы данных</div>
    <div class="div_main">Переменные могут хранить различные типы данных.</div>
    <div class="div_main">Типы данных. поддерживаемые языком PHP являются: <b>String, Integer, Boolean, Array, Object, NULL, Resource.</b></div>

    <div class="div_head" id="head_2">String</div>
    <div class="div_main"><b>Строка</b> - это последовательность символов, типа "Hello Word!"</div>
    <div class="div_main">Строкой может быть любой текст, заключенный в одинарные или двойные <b>кавычки</b> ('Текст' либо "Текст")</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $str1 = 'Hello Word!'; // Одинарные кавычки<br>
        $str2 = "Hello Word!"; // Двойные кавычки<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Вы можете объединить две строки с помощью точки - оператора конкатенации ( <b><u>echo</u> $str1.str2</b> )</div>

    <div class="div_head" id="head_2">Integer</div>
    <div class="div_main"><b>Integer</b> - Это целое число (без десятичной точки), которое должно соответствовать следующим критериям:
      <ul>
        <li>&#9866; Не может содержать запятые или пробелы;</li>
        <li>&#9866; Не должно иметь весядитную точку;</li>
        <li>&#9866; Может быьть либо положительным, либо отрицательным.</li>
      </ul>
    </div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $int1 = 20; // Положительное число<br>
        $int2 = -20; // Отрицательное число<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Переменные могут хранить различные типы данных.</div>

    <div class="div_head" id="head_2">Float</div>
    <div class="div_main"><b>Float</b>, или же число с плавающей точкой - это число, которое включает десятичную точку.</div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $flt1 = 22.22; // Положительное число с плавающей точкой.
        $flt2 = -22.22; // Отрицательное число с плавающей точкой.
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">Тип <b>Float</b> используется для определения более точного числа при каком-либо решении задачи.</div>

    <div class="div_head" id="head_2">Boolean</div>
    <div class="div_main">
      <b>Boolean</b> представляет собой два возможных состояния: <b>True</b>(истина) или <b>False</b>(ложь).
    </div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $bl = false;<br>
        if ( $bl ){<br>
          echo "Переменная истина.";}<br>
        else{<br>
          echo "Переменная ложна.";}<br>
        ?&gt;
    </div>
      <div class="div_logo">&#9745;</div>
      <div class="div_fix_main">Boolean часто используется в условном тестировании.</div>

      <div class="div_head" id="head_2">Заключение</div>
      <div class="div_main">
      Большинство типов данных может использоваться в комбинации друг с другом.
      Рассмотрим пример с рассмотрением сложения строки (string) с числом (integer):
    </div>
    <div class="div_logo" id="php_logo">PHP</div>
    <div class="div_code">
        &lt;?php<br>
        $int = 20;<br>
        $str = '10';<br>
        $sum = $int + $str;
        <u>echo</u> $sum;<br>
        ?&gt;
    </div>
    <div class="div_logo">&#9745;</div>
    <div class="div_fix_main">PHP автоматически конвертирует каждую переменную в необходимый тип данных, соответствующий ее значению. Вот почему переменная $str обрабатывается как число</div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
