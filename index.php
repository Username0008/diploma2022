<?php
    //Запускаем сессию
    session_start();
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>FunGame</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript">

            $(document).ready(function(){
                "use strict";
                //================ Проверка login ==================
         
                //регулярное выражение для проверки login
                var pattern = /^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i;
                var mail = $('input[name=login]');
                 
                mail.blur(function(){
                    if(mail.val() != ''){
         
                        // Проверяем, если введенный login соответствует регулярному выражению
                        if(mail.val().search(pattern) == 0){
                            // Убираем сообщение об ошибке
                            $('#valid_login_message').text('');
         
                            //Активируем кнопку отправки
                            $('input[type=submit]').attr('disabled', false);
                        }else{
                            //Выводим сообщение об ошибке
                            $('#valid_login_message').text('Не правильний Login');
         
                            // Дезактивируем кнопку отправки
                            $('input[type=submit]').attr('disabled', true);
                        }
                    }else{
                        $('#valid_login_message').text('Введіть Ваш login');
                    }
                });
         
                //================ Проверка длины пароля ==================
                var password = $('input[name=password]');
                 
                password.blur(function(){
                    if(password.val() != ''){
         
                        //Если длина введенного пароля меньше шести символов, то выводим сообщение об ошибке
                        if(password.val().length < 6){
                            //Выводим сообщение об ошибке
                            $('#valid_password_message').text('Минимальная длина пароля 6 символов');
         
                            // Дезактивируем кнопку отправки
                            $('input[type=submit]').attr('disabled', true);
                             
                        }else{
                            // Убираем сообщение об ошибке
                            $('#valid_password_message').text('');
         
                            //Активируем кнопку отправки
                            $('input[type=submit]').attr('disabled', false);
                        }
                    }else{
                        $('#valid_password_message').text('Введите пароль');
                    }
                });
            });
        </script>
    </head>
    <body>
 
        <style>
body 
 {
  background-color: #413F3C;
  font-size: 16px;

}
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
border-radius: 12px;
width: 250px;
}
.button:hover {
    background-color: #FFFFFF;
    color: black;
    border: 2px solid #4CAF50; /* Green */
}
.button1 {
    background-color: #008CBA;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
border-radius: 12px;
width: 250px;
}
.button1:hover {
    background-color: #FFFFFF;
    color: black;
    border: 2px solid #008CBA; /* Green */
}
</style>
 <center> <div id ="srft">
 <h2>FunGame | Онлайн гра</h2> 
</div></center>
            <div id="auth_block">
            <?php
                //перевірка, чи авторизований користувач
                if(!isset($_SESSION['login']) && !isset($_SESSION['password'])){
                    // якщо ні, то виводимо блок з посиланнями на реєстрацію і авторизацію
            ?>

<center><a href="/form_register.php"><button class="button">Реєстрація</button></a>
<p></p>
<a href="/form_auth.php"><button class="button1">Авторизація</button></a></center>



            <?php
                   }else{
                    //якщо користувач авторизований, то виводимо основну частину веб сайту
            ?> 
<center>
<?php
if($_SESSION['login'] == "admin"){
 echo '<a href="/security.php"><button class="button">Панель адміністратора</button></a><p></p>';
} else {
}
?>
<a href="/task1.php"><button class="button">Завдання 1</button></a>
<p></p>
<a href="/task2.php"><button class="button">Завдання 2</button></a>
<p></p>
<a href="/profile.php"><button class="button">Профіль</button></a>
<p></p>
<a href="/information.php"><button class="button">Інструкція</button></a>
<p></p>
<a href="/logout.php"><button class="button">Вихід</button></a>
</center>
                
           
             <div class="clear"></div>
        </div>
 </div>  <?php
                }
            ?>