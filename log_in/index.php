<?php $title_name = "Авторизация"?>
<?php require($_SERVER[DOCUMENT_ROOT] . "/core/header.php"); ?>

<div class="block_auth">
  <div class="main_auth">
    <h1>АВТОРИЗАЦИЯ</h1>
    <form class="form_auth" method="POST">
      <input class="br_auth" type="text" placeholder="Логин" name="Login"> <br>
      <input class="br_auth" type="password" placeholder="Пароль" name="Password"> <br>
      <button class="but_" id="auth_" type="submit" name="Auth">Войти</button>
      <button class="but_" id="reg_" name="Register"><a class="a_reg" href="/registration">Регистрация</a></button>
    </form>
    <a class="res_pass" href="/restore_pass">Забыли пароль?</a>

<?php
    if (isset($_POST['Login']) and isset($_POST['Password'])){
        $login = $_POST['Login'];
        $password = $_POST['Password'];

        $add_user = "SELECT * FROM `user` WHERE `login` LIKE '{$login}' AND `password` LIKE '{$password}'";
        $result = $DB -> query($add_user);
        $count = mysqli_num_rows($result);

        if ($count == 1){
          $_SESSION['username'] = $login;}
        else{echo "<pre>Неверный логин или пароль</pre>";}
        if (isset($_SESSION['username'])){
          $login = $_SESSION['username'];
          echo "<h3><i>Авторизация прошла успешно!</i></h3>";
          echo "<a href=/log_out>Выйти</a>";}
  }
?>

  </div>
</div>
<?php require($_SERVER[DOCUMENT_ROOT] . "/core/footer.php"); ?>
