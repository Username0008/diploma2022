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
                            $('#valid_login_message').text('Не правильный Login');
         
                            // Дезактивируем кнопку отправки
                            $('input[type=submit]').attr('disabled', true);
                        }
                    }else{
                        $('#valid_login_message').text('Введите Ваш login');
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
<p style="color: white;font-size: 18px;white-space:   break-spaces; word-spacing : 1px;">ІНСТРУКЦІЯ
Для того, щоб відкрити основне меню сайту потрібно зареєструватися або авторизуватися.
Реєстрація відбувається в такій послідовності:
1. Напишіть свій вік.
2. Вкажіть свою стать : Ч або Ж
3. Придумайте унікальний логін
4. Придумайте унікальний пароль
5. Введіть цифри з картинки
6. Натисніть зареєструватися
Якщо Ви зареєстровані, тоді потрібно авторизуватися:
 1. Напишіть свій логін
 2. Напишіть свій пароль
 3. Введіть цифри з картинки
 4. Натисніть вхід
Якщо Ви вже потрапили на сторінку інструкції, значить зробили все правильно. В основному меню
Ви можете перейти на сторінки завдань, переглянути профіль, та ознайомитись з інструкцією. Також
є можливість вийти з власного профілю.
Для користувачів представлено два завдання на основі гри. Перейшовши на сторінку «Завдання 1»
,Вам потрібно відшукати зайві елементи на зображенні справа. Якщо елемент знайдено, потрібно
натиснути на нього і тоді він підсвітиться блакитним кругом. Після цього можна шукати інші
елементи. Протягом 5 хвилин потрібно знайти всі відмінні елементи. Також можна відслідковувати
кількість хибних кліків.
Якщо всі елементи буде знайдено, система дасть Вам про це знати і Ви зможете вийти в основне
меню, натиснувши на кнопку «Вихід».
Якщо Ви не зможете знайти всі відмінні елементи за 5 хвилин, то система повідомить Вам про те, що
час вичерпався і поверне Вас в основне меню.
Для «Завдання 2» умови аналогічні. Але в цій грі потрібно знайти відмінні кольори на зображенні
справа. Для того, щоб знайти відмінний колір, потрібно на нього натиснути.
Відмінних елементів на зображеннях 10. Час на проходження гри 5 хвилин.
Також Ви можете ознайомитись з персональною інформацією, відкривши сторінку «Профіль».
Щоб повернутися в основне меню, потрібно натиснути на кнопку «Назад». Щоб вийти з особистого
профілю, потрібно натиснути на кнопку «Вихід».</p>

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
<a href="/"><button class="button">Назад</button></a>
<p></p>
<a href="/logout.php"><button class="button">Вихід</button></a>
</center>

                
           
             <div class="clear"></div>
        </div>
 </div>  <?php
                }
            ?>