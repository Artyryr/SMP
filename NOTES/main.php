<?php header ("Content-Type: text/html; charset=utf-8")?>
<?php
     include 'autorize.php';
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Notes
        </title>
        <link rel="stylesheet" href="style.css"/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/jquery-ui.min.js"></script>

        <script type="text/javascript">
            
$(function() {
	
	$('.form2').draggable({
        containment: "window"
    });
});
    </script>
    </head>
    <body>
        <div align="right"><a href="logout.php">Log out</a></div>
        <h1>Welcome,<?php  echo $person["name"];?></h1>
        <h2>Create your notes!</h2>
        <div align="center">
            <p>Enter in this area your notes: </p>
        <div class="form">
            <form method="post" action="sendNote.php">
                <textarea class="note" name="notes" cols="48" rows="5" wrap="hard" required placeholder="Note..."></textarea>
                <input type="submit" value="Send" class="btn3"/>
                <span id="result"></span>
            </form>
        </div>  
        </div>
        
        <hr width="60%">
        <h2 style="text-align:center">Your Notes</h2><?php
    $notes = $person["notes"];
    if (count($notes)== 0)
    {
        echo "<div align='center'><div class='form' style='text-align:center;'><span style='color:crimson;font-size:24px;font-family:cursive;'>You haven't notes &#9785;</span></div></div>";
    }
    for ($i = count($notes)-1;$i >= 0;$i--)
    {
        ?>
        <div  align="center" >
            <div class ="form2 ui-widget ui-corner-all ui-state-error">
            <h5 style='width:20%'><?php echo $notes[$i]["date"]?></h5>
            <form method="post" action="deleteNote.php" id="delete">
                <input type="submit" value="&#10008;" class="btn1" title="Delete"/>
                <textarea class="id" name="id" ><?php echo $notes[$i]["id"]?></textarea>         
            </form>
            <form method="post" action="changenote.php">
                <textarea class="id" name="id"><?php echo $notes[$i]["id"]?></textarea>
                <textarea class="note2" name="note" cols="48" rows="7" wrap="hard" onkeypress="if(event.keyCode==10||(event.ctrlKey && event.keyCode==13))koment.click();"><?php echo $notes[$i]["text"];?>
                </textarea>
                <input type="submit" value="" class="btn" id="koment"/>
            </form>
            
        </div>
        </div><?php
    }?>
        <hr width="60%">
        <footer>
        &copy;2016 All rights reserved</footer>
    </body>
</html>