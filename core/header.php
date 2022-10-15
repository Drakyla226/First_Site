<?php session_start();?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
    <?php $style_css = "/core/style.css"; ?>
    <?php $images = "/core/images/"; ?>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <?php echo "<title>".$title_name."</title>"?>
    <link rel="stylesheet" href="<?php echo $style_css;?>">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
<header>
    <div class="conteiner">

        <div class="logo">
            <a class="header_logo_link" title="На главную" href="/">LOGO</a>
        </div>

        <nav class="nav_menu">
            <ul class="sub_menu">
                <!--<li><a class="nav_link">c#</a>
                  <ul class="ul_bot">

                    !-- C# --
                    <li><a class="c_link" href="#">Базовые концепции языка</a>
                      <ul class="ul_bottom">
                        <li class="li_title"><a class="c_link" href="#">Базовые концепции</a></li>
                        <li><a href="#">Что такое C#</a></li>
                        <li><a href="#">Переменные</a></li>
                      </ul>
                    </li>

                    <li><a class="c_link" href="#">Условные выражения и циклы</a>
                      <ul class="ul_bottom">
                        <li class="li_title"><a class="c_link" href="#">Условные выражения и циклы</a></li>
                        <li><a href="#">Выражение if-else</a></li>
                        <li><a href="#">Оператор switch</a></li>
                      </ul>
                    </li>

                  </ul>
                </li>

                <li><a class="nav_link">python</a>
                  <ul class="ul_bot">

                    !-- PYTHON --
                    <li><a class="py_link" href="#">Пусто</a>
                      <ul class="ul_bottom">
                        <li class="li_title"><a class="py_link" href="#">Пусто</a></li>
                        <li><a href="#">Пусто</a></li>
                        <li><a href="#">Пусто</a></li>
                      </ul>
                    </li>

                    <li><a class="py_link" href="#">Пусто</a>
                      <ul class="ul_bottom">
                        <li class="li_title"><a class="py_link" href="#">Пусто</a></li>
                        <li><a href="#">Пусто</a></li>
                        <li><a href="#">Пусто</a></li>
                      </ul>
                    </li>

                  </ul>
                </li>-->

                <li><a class="nav_link">php</a>
                    <ul class="ul_bot">

                        <!-- PHP -->
                        <li><a class="p_link" href="#">Базовый синтаксис языка</a>
                            <ul class="ul_bottom">
                                <li class="li_title"><a class="p_link" href="/php/1">Базовый синтаксис языка</a></li>
                                <li><a href="/php/1/1">Введение</a></li>
                                <li><a href="/php/1/2">PHP теги</a></li>
                                <li><a href="/php/1/3">Echo</a></li>
                                <li><a href="/php/1/4">Комментарии</a></li>
                            </ul>
                        </li>

                        <li><a class="p_link" href="#">Переменные</a>
                            <ul class="ul_bottom">
                                <li class="li_title"><a class="p_link" href="/php/2">Переменные</a></li>
                                <li><a href="/php/2/1">Переменные</a></li>
                                <li><a href="/php/2/2">Константы</a></li>
                                <li><a href="/php/2/3">Типы данных</a></li>
                                <li><a href="/php/2/4">Область видимости переменных</a></li>
                                <li><a href="/php/2/5">Переменные переменных</a></li>
                            </ul>
                        </li>

                        <li><a class="p_link" href="#">Операторы</a>
                            <ul class="ul_bottom">
                                <li class="li_title"><a class="p_link" href="/php/3">Переменные</a></li>
                                <li><a href="/php/3/1">Арифметические операторы</a></li>
                                <li><a href="/php/3/2">Операторы присваивания</a></li>
                                <li><a href="/php/3/3">Операторы сравнения</a></li>
                                <li><a href="/php/3/4">Логические операторы</a></li>
                            </ul>
                        </li>

                        <li><a class="p_link" href="#">Массивы</a>
                            <ul class="ul_bottom">
                                <li class="li_title"><a class="p_link" href="/php/4">Переменные</a></li>
                                <li><a href="/php/4/1">Числовые массивы</a></li>
                                <li><a href="/php/4/2">Ассоциативные массивы</a></li>
                                <li><a href="/php/4/3">Многомерные массивы</a></li>
                            </ul>
                        </li>

                        <li><a class="p_link" href="#">Управляющие структуры</a>
                            <ul class="ul_bottom">
                                <li class="li_title"><a class="p_link" href="/php/5">Переменные</a></li>
                                <li><a href="/php/5/1">Операторы If Else</a></li>
                                <li><a href="/php/5/2">Операторы Ilseif</a></li>
                                <li><a href="/php/5/3">Цикл While</a></li>
                                <li><a href="/php/5/4">Цикл Do While</a></li>
                                <li><a href="/php/5/5">Цикл For</a></li>
                                <li><a href="/php/5/6">Цикл Foreach</a></li>
                                <li><a href="/php/5/7">Оператор Switch</a></li>
                                <li><a href="/php/5/8">Оператор Break</a></li>
                                <li><a href="/php/5/9">Оператор Continue</a></li>
                                <li><a href="/php/5/10">Include и Require</a></li>
                            </ul>
                        </li>

                        <li><a class="p_link" href="#">Функции</a>
                            <ul class="ul_bottom">
                                <li class="li_title"><a class="p_link" href="/php/6">Переменные</a></li>
                                <li><a href="/php/6/1">Функции определенные пользователем</a></li>
                                <li><a href="/php/6/2">Параметры функций</a></li>
                                <li><a href="/php/6/3">Оператор Return</a></li>
                            </ul>
                        </li>

                        <li><a class="p_link" href="#">Предопределенные переменные</a>
                            <ul class="ul_bottom">
                                <li class="li_title"><a class="p_link" href="/php/7">Переменные</a></li>
                                <li><a href="/php/7/1">$_SERVER. Переменные Script Name</a></li>
                                <li><a href="/php/7/2">$_SERVER. Переменные Host Name</a></li>
                                <li><a href="/php/7/3">PHP формы</a></li>
                                <li><a href="/php/7/4">GET и POST</a></li>
                            </ul>
                        </li>

                        <li><a class="p_link" href="#">Работы с файламиё</a>
                            <ul class="ul_bottom">
                                <li class="li_title"><a class="p_link" href="/php/8">Переменные</a></li>
                                <li><a href="/php/8/1">Записть в файл</a></li>
                                <li><a href="/php/8/2">Добавление к файлу</a></li>
                                <li><a href="/php/8/3">Чтение файла</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>

        <nav>
            <ul>
                <li>
                    <?php
                        if (isset($_SESSION['username'])){
                            $login = $_SESSION['username'];
                            echo "<a class=\"nav_link_auth\" href=/log_out>Выйти</a>";
                    ?>
                </li>
                <?php }else{?>
                    <li><a class="nav_link_auth" href=/log_in>Войти</a></li>
                <?php }?>
            </ul>
        </nav>

    </div>
</header>

<div class="cont_main">
