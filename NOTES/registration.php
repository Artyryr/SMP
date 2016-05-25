<?php
header ("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Registration
        </title>
        <link rel="stylesheet" href="style.css"/>
        <script src="jquery-2.2.2.min.js"></script>
        <script>
             function AjaxFormRequest(result_id,form_id,url) {
                jQuery.ajax({
                    url:     url, //Адрес подгружаемой страницы
                    type:     "POST", //Тип запроса
                    dataType: "html", //Тип данных
                    data: jQuery("#"+form_id).serialize(), 
                    success: function(response) { 
                    document.getElementById(result_id).innerHTML = response;
                },
                error: function(response) { //Если ошибка
                document.getElementById(result_id).innerHTML = "Ошибка при отправке формы";
                }
             });
        }
         </script>
      
    </head>
    <body>
        <div align='right'><a href="index.php" >Authorization</a></div>
        <h1>Registration</h1>
        <div align = "center">
            <div class = "form" >
                <form action="" method="post" id="regForm">
                    <label>Your name</label>&nbsp;&nbsp;<input type="text" name="name" class="data" autofocus placeholder="Your name"/><br><br>
                    <label>Your e-mail</label>&nbsp;&nbsp;<input type ="tel" name="email" class="data" placeholder="Your e-mail"/><br><br>
                    <label>Login</label>&nbsp;&nbsp;<input type ="text" name="login" class="data" placeholder="Your Login" autocomplete="off"/><br><br>
                    <label>Password</label>&nbsp;&nbsp;<input type="password" name="password" class="data" placeholder="******"/><br><br>
                    <label>Repit password</label>&nbsp;&nbsp;<input type="password" name="password2" class="data" placeholder="******"/><br><br>
                    <input type="button" value="Save" class = "btn3" onclick="AjaxFormRequest('result','regForm','check2.php')"/>
                    <div id="result"></div>
                </form>
            </div>
        </div>
    </body>
</html>