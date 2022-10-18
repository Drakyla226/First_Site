<?php $title_name = "Восстановление пароля"?>
<?php require($_SERVER[DOCUMENT_ROOT] . "/core/header.php"); ?>

    <div class="block_auth">
        <div class="main_auth">
            <h1>ВОССТАНОВЛЕНИЕ ПАРОЛЯ</h1>
            <form class="form_auth" method="POST">
                <input class="br_auth" type="password" placeholder="Пароль" name="Password"> <br>
                <input class="br_auth" type="password" placeholder="Подтверждение пароля" name="Password_"> <br>
                <button class="but_" type="submit" id="reg__" name="Register">Изменить пароль</button>
            </form>

            <?php
            if (isset($_POST['Password']) and isset($_POST['Password_'])){
                $password = $_POST['Password'];
                $password_ = $_POST['Password_'];
                $nis_login = "SELECT * FROM `user` WHERE `login` LIKE '{$login}' AND `password` LIKE '{$password}'";

                $add_user = "UPDATE `user` SET `password=`{$password} WHERE `login` = '$login'";
                $result = $DB -> query($add_user);
                $count = mysqli_num_rows($result);

                if ($count == 1){
                    echo "<a href=/new_password>Задать новый пароль</a>";
                }
                else{echo "<pre>Неверный логин или Email</pre>";}
            }
            ?>

        </div>
    </div>
<?php require($_SERVER[DOCUMENT_ROOT] . "/core/footer.php"); ?>
