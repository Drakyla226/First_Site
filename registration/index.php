<?php $title_name = "Регистрация"?>
<?php require ($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>
<?php
    if (isset($_POST['Login']) and isset($_POST['Password']) and isset($_POST['Email'])){
        $login = $_POST['Login'];
        $password = $_POST['Password'];
        $password2 = $_POST['Password2'];
        $email = $_POST['Email'];

        $table_name = "user";
        $arr_sel_log = array("login");
        $arr_sel_email = array("email");
        $arr_filter = array();
        $arr_order = array();
        $num = 0;
        $res_log = $obTable -> getList($table_name, $arr_sel_log, $arr_filter, $arr_order, $num);
        $res_email = $obTable -> getList($table_name, $arr_sel_email, $arr_filter, $arr_order, $num);
        $res_log = $DB -> query("SELECT `login` FROM `user` WHERE `login` LIKE '{$login}'");
        $res_email = $DB -> query("SELECT `email` FROM `user` WHERE `email` LIKE '{$email}'");
        $count_log = mysqli_num_rows($res_log);
        $count_email = mysqli_num_rows($res_email);
        if($password != $password2){
            $res_reg = "pass";
        }
        elseif ($count_log != 0 and $count_email != 0){
            $res_reg = "login+email";
        }
        elseif ($count_log != 0) {
            $res_reg = "login";
        }
        elseif ($count_email != 0) {
            $res_reg = "email";
        }
        else{$arr_filds = array("login" => "$login",
                                 "password" => "$password",
                                 "email" => "$email");
        $obTable->add("user", $arr_filds);
        $res_reg = "ok";
        }
    }
?>

<div class="block_auth">
    <div class="main_auth">
        <h1>АВТОРИЗАЦИЯ</h1>
        <form class="form_auth" method="POST">
            <input value="<?php
            if ($res_reg == "pass") {
                echo $login;
            }
            elseif ($res_reg == "email") {
                echo $login;
            } ?>" class="br_auth" type="text" placeholder="Логин" name="Login" required> <br>
            <input class="br_auth" type="password" placeholder="Пароль" name="Password" required> <br>
            <input class="br_auth" type="password" placeholder="Подтверждение пароля" name="Password2" required> <br>
            <input value="<?php
            if ($res_reg == "pass") {
                echo $email;
            }
           elseif ($res_reg == "login") {
               echo $email;
           } ?>" class="br_auth" type="email" placeholder="Email" name="Email" required>  <br>
        <button class="but_" type="submit" id="reg__" name="Register">Зарегистрироваться</button>
        </form>
        <?php
        if ($res_reg == "pass"){echo "Пароли не совпадают";}
        elseif ($res_reg == "login+email"){echo "Login и Email уже заняты";}
        elseif ($res_reg == "login"){echo "Данный Login занят";}
        elseif ($res_reg == "email"){echo "Данный Email уже используется";}
        elseif($res_reg == "ok") {echo "Регистрация прошла успешно";}?>
    </div>
</div>

<?php
require ($_SERVER[DOCUMENT_ROOT]."/core/footer.php");
?>
