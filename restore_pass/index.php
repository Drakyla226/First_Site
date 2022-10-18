<?php $title_name = "Восстановление пароля"?>
<?php require($_SERVER[DOCUMENT_ROOT] . "/core/header.php"); ?>
<?php $res_ = ""?>

    <div class="block_auth">
        <div class="main_auth">
            <h1>ВОССТАНОВЛЕНИЕ ПАРОЛЯ</h1>


            <?php
            if (isset($_POST['Login']) and isset($_POST['Email']) and isset($_POST['Password']) and isset($_POST['Password_'])) {
                $login = $_POST['Login'];
                $email = $_POST['Email'];
                $password = $_POST['Password'];
                $password_ = $_POST['Password_'];
                if ($login != "" and $email != "" and $password != "" and $password_ != "") {
                    if ($password == $password_) {
                        $new_pass = "UPDATE `user` SET `password` = {$password} WHERE `login` = '$login'";
                        $add_user = "SELECT * FROM `user` WHERE `login` = '{$login}' and `email` = '{$email}'";
                        $result = $DB->query($add_user);
                        $count = mysqli_num_rows($result);

                        if ($count == 1) {
                          $DB->query($new_pass);
                        } else {
                            $res_ = "log_pass";
                        }
                    } else {
                        $res_ = "pass";
                    }
                }else {
                  $res_ = "nil";
                }
            }
            ?>

            <form class="form_auth" method="POST">
                <input value="<?php
                if ($res_ == "pass") {
                    echo $login;
                }?>" class="br_auth" type="text" placeholder="Логин" name="Login"> <br>
                <input value="<?php
                if ($res_ == "pass") {
                    echo $email;
                }?>" class="br_auth" type="text" placeholder="Email" name="Email"> <br>
                <input class="br_auth" type="password" placeholder="Новый пароль" name="Password"> <br>
                <input class="br_auth" type="password" placeholder="Подтверждение пароля" name="Password_"> <br>
                <?php if ($res_ == "log_pass"){echo "<pre>Неверный логин или Email</pre>";}?>
                <?php if ($res_ == "pass"){echo "<pre>Пароли не совпадают</pre>";}?>
                <?php if ($res_ == "nil"){echo "<pre>Заполните все поля</pre>";}?>
                <button class="but_" type="submit" id="reg__" name="Register">Восстановить</button>
            </form>

        </div>
    </div>
<?php require($_SERVER[DOCUMENT_ROOT] . "/core/footer.php"); ?>
