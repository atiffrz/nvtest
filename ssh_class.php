<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
        

    </head>
    <body>
        
        <b>Executing Tests</b> <br>
        
        
        
        <?php
        class ssh
        {
            function assign_task($ip,$username,$password,$test_plan,$taskid)
            {
                
                if (!function_exists("ssh2_connect")) die("function ssh2_connect doesn't exist");
// log in at server1.example.com on port 22
                    if(!($con = ssh2_connect($ip, 22))){
                        echo "fail: unable to establish connection\n";
                    } else {
                     // try to authenticate with username root, password secretpassword
                        if(!ssh2_auth_password($con, $username, $password)) {
                            echo "fail: unable to authenticate\n";
                        } else {
                            // allright, we're in!
                        echo "Logged into System <br>";

        // execute a command
                $command = "sh /mnt/atp/people-local/atifs/project/".$test_plan.".sh ".$taskid." &";
        
        if (!($stream = ssh2_exec($con, $command ))) {
            echo "fail: unable to execute command\n";
        } else {
            // collect returning data from command
            stream_set_blocking($stream, true);
            $data = "";
            while ($buf = fread($stream,4096)) {
                $data .= $buf;
                echo '<br>'.$buf;
               
            }
            fclose($stream);
        }
    }
}
            }
        }
        
        
        $stack = array();
       
        
        
        if(isset($_POST['submit'])){
// As output of $_POST['test_list'] is an array we have to use foreach Loop to display individual value
            $test_plan_var = $_GET['test'];
            $ip = $_GET['ip'];
            
            echo $ip;
            
            foreach ($_POST['test_list'] as $select)
            {
               array_push($stack, $select); //Selected Value
            }
            
            foreach ($stack as $test)
            {
                echo "<br><b>Executing Template '$test' of '$test_plan_var'.... </b>";
                
                sleep(10);
                
                $ssh_object = new ssh();
                
                $ssh_object->assign_task($ip, 'root', 'nvidia123', $test_plan_var, $test);
                
                echo "Template '$test' Completed of '$test_plan_var'"; 
       
        
            }
        
            
       }
        
        
        
        ?>
        
     
    </body>
</html>
