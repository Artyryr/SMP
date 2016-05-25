<?PHP  header("Content-Type: text/html; charset=utf-8");?>
<?php 
    session_start();
    $login = $_POST["login"];
    $password = $_POST["password"];
    
    $_SESSION["login"] = $login;
    $_SESSION["password"] = $password;
    include "autorize.php";
    if ($person["login"] != NULL && $person["password"] != NULL)
    {
        echo "<a href='main.php' style='font-size:20px;'>Click here to enter</a>";
    }
    else 
    {
        echo "<span style='color:crimson;font-size:18px;'>Invalid login or password</span>"; 
    }