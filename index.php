<?php
    $conn= mysqli_connect('localhost', 'root', '', 'test');
    session_start();
?>


<?php



    if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['submit'])){
        if($_POST['ID'] == "" OR  $_POST['password']==""){
            echo "some inputs are empty";

        }
        else{
            $ID = $_POST['ID'];
            $password = $_POST['password'];
            $query="SELECT * FROM `user` WHERE `Staff ID` ='$ID' AND `Password` = '$password'";
            $conn->query($query);

            $result=mysqli_query($conn, $query) or die(mysqli_error($conn));
            $flag = FALSE;
            while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                if($_SESSION['ID'] = $row['Staff ID'] AND $_SESSION['password'] = $row['Password']){
                    
                    $name= $row['Name'];

                    

                    

                    
                    $url= 'http://localhost/TEST/done.php';

                    header("location: $url?x=$name");
                    

                }
    
            }

        }
    
        
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <title>
            Login Page
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <body>
            
            <div class="loginbox">
                
                <img src="th.jpg" class="avatar">
                <h2>Login</h2>
                <p>Please provide STAFF ID and Password to continue.</p><br>
                <form action="index.php" method="post">
                    <input type="Password" name="ID" placeholder="Enter STAFF ID">
                    <input type="Password" name="password" placeholder="PASSWORD">
                    <input type="submit" name="submit" value="Login" class="btn-login">
                </form>

        

            </div>
        </body>
    </head>
</html>