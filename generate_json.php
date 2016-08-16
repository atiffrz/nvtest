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
        $stack = array();
        if(isset($_POST['submit'])){
// As output of $_POST['test_list'] is an array we have to use foreach Loop to display individual value
            $test_plan_var = $_GET['test'];
            
            foreach ($_POST['test_list'] as $select)
            {
               array_push($stack, $select); //Selected Value
            }
            
            echo ' The test cases selected for '.$test_plan_var.' Test Plan:<br>';
               echo "<table>";
               echo "<tr>";
               echo "<th>Test Case Id</th>";
               echo "</tr>";
            foreach ($stack as $test_id)
            {
               
               echo "<tr>";
               echo "<td>'$test_id'</td>";
               echo '</tr>';
            }
            
            echo '</table>';
                
            include 'machines.php';
                
                
                
               
            
            
            
            
           
        }
        ?>
    </body>
</html>