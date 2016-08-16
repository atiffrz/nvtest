<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Machine</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body>
        
        <form action="add_machine.php" method="post">
            
            <input type="text" name="machine_ip" placeholder="Enter IP of machine"><br>
            <input type="text" name="machine_username" placeholder="Enter Username"><br>
            <input type="password" name="machine_password" placeholder="and Password of machine" ><br>
            <input type="submit" value="Add Machine"><br>
            
            
        </form>
        <?php
        
        include('db_connect.php');
        if(!isset($_POST['machine_ip']) && !isset($_POST['machine_username']) && !isset($_POST['machine_password']))
        {
            echo 'Oops, Something went wrong !! ';  
        }
        else {
     
            $machine_ip = $_POST['machine_ip'];
            $machine_username = $_POST['machine_username'];
            $machine_password = $_POST['machine_password'];
            
            $query = "insert into machines values('$machine_ip','$machine_username','$machine_password')";
            
            $result_id = mysql_query($query);
            
            if(!$result_id)
            {
                die('Could not query:' . mysql_error());
            }
            else {
                
                echo "Machine Added Successfully. Click <a href='machines.php'>here</a> for Machines Status";
                
            }
            
            
 }
        ?>
    </body>
</html>
