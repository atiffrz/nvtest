<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register Below</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="header">
            <a href="/">Nvtest</a>
        </div>
        <h1>Register</h1>
        <span> or <a href="login.php">Login here</a></span>
        
        <form action="register.php" method="POST">
            
            <input type="text" placeholder="Enter Your Email" name="email">
            <input type="password" placeholder="Password" name="password">
            <input type="password" placeholder="confirm Password" name="confirm_password">
            <input type="submit" value="Submit">
            
        </form>
        
        <?php
        include("db_connect.php");
        
        if(!empty($_POST['email'] && !empty($_POST['password'])))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $query = "insert into users values('$email','$password')";
            
            $result_id = mysql_query($query);
            
            if(!$result_id)
            {
                die('Could not query:' . mysql_error());
            }
            else {
                
                echo "User Created Click <a href='login.php'> here </a> to login.  ";
                
            }
            
        }
        
        ?>
    </body>
</html>
