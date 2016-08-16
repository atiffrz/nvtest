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
        
    </head>
    <body>
        <?php
//        include 'db_connect.php';
//        
//        $result = mysql_query('select * from machines');
//        
//        while($row = mysql_fetch_object($result))
//        {
//            echo $row->machine_ip;
//        }
        
        
        if (!function_exists("ssh2_connect")) die("function ssh2_connect doesn't exist");
// log in at server1.example.com on port 22
                    $ip = '10.24.141.177';
                    if(!($con = ssh2_connect($ip, 22))){
                        echo "fail: unable to establish connection\n";
                    } else {
                      // try to authenticate with username root, password secretpassword
                        if(!ssh2_auth_password($con, 'root','nvidia123')) {
                            echo "fail: unable to authenticate\n";
                        } else {
                            // allright, we're in!
                        echo "Logged into System <br>";
                        echo $ip;
                        }
                    }
        ?>
    </body>
</html>
