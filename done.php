<?php 
//echo "{$_GET["x"]}"; 
?>

<?php
    //$conn= mysqli_connect('localhost', 'root', '', 'test');
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Login Page
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <body>
            
            <div class="login">
                <h2><br>Login successfull, Hai <?php echo "{$_GET["x"]}"; ?> </h2>


                
            </div>
        </body>
    </head>
</html>