<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// we connect to example.com and port 3307
$link = mysql_connect('localhost', 'root', 'nvidia123');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
$select_db = mysql_select_db('nvidia');

if (!$select_db){
    die("Database Selection Failed" . mysql_error());
    
}
// else {
//    echo 'databse connected.';
//}

//$result = mysql_query('SELECT username FROM users');
//if (!$result) {
//    die('Could not query:' . mysql_error());
//}
//echo mysql_result($result, 0); // outputs third employee's name
//
//mysql_close($link);