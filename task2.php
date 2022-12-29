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
 <h2>FunGame | Онлайн гра #2</h2> 
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
<a href="/"><button class="button">Назад</button></a>
<p></p>
<a href="/game2/<?php echo rand(6,10); ?>/"><button class="button">Почати гру</button></a>
<p></p>
<a href="/logout.php"><button class="button">Вихід</button></a>
</center>
                
           
             <div class="clear"></div>
        </div>
 </div>  <?php
                }
            ?>