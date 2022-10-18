<div class="div_chat">

    <?php
        if (isset($_POST['Text']) and $_POST['Text'] != ""){
            $text = $_POST['Text'];
            $log = $_SESSION['username'];
            $arr_chat = array("login" => "$log", "text" => "$text");
            $obTable->add("chat", $arr_chat);
        }
    $_POST['Text'] = null;
    ?>

    <div class="main_chat">
        <?php
        $sel = "SELECT * FROM `chat` ORDER BY `id` DESC";
        $result = $DB -> query($sel);
        if ($result){
            while ($us = mysqli_fetch_array(($result))){
                if ($us['login'] == $_SESSION['username']){
                    ?>
                    <div class="chat_my_text">
                        <?php
                        echo "{$us['text']}<br>";
                        ?>
                    </div>

                    <div class="chat_my_date">
                        <?php
                        echo "{$us['date']}<br>";
                        ?>
                        <hr>
                    </div>

                    <?php
                }else{?>
                    <div class="chat_name">
                        <?php
                        echo "{$us['login']}<br>";
                        ?>
                    </div>

                    <div class="chat_text">
                        <?php
                        echo "{$us['text']}<br>";
                        ?>
                    </div>

                    <div class="chat_date">
                        <?php
                        echo "{$us['date']}<br>";
                        ?>
                    </div>

                    <?php
                }
            }
        }
        ?>
    </div>

    <div class="add_chat">
        <?php
        if (!$_SESSION['username']){
            echo "<a class='res_pass' href=\"/log_in/\">Авторизуйтесь для отправки сообщения.</a>";
        }else{
        ?>
        <form class="form_add_chat" method="POST" id="myclearform">
            <script type="text/javascript" src="ClearForm.js"></script>
            <input placeholder="Введите сообщение" autocomplete="off" id="new_mess" name="Text">
            <button class="but_" id="but_mess" type="submit" onclick="document.getElementById('new_mess').value='')">Оправить</button>
        </form>
        <?php
        }
        ?>
    </div>
</div>
