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
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    </head>
    <body>
        
        <?php
        
        include("db_connect.php");
        
//        session_start();
//        
//        if(!isset($_SESSION['user_id']))
//        { 
//            header('Location:login.php');
//        }
//       else
//       {   
//        
       ?>
        
        <h1>Welcome to Nvtest</h1>
        
        <?php
        
            $ip = $_GET['ip'];
            $username = 'root';
            $password = 'nvidia123';
        
            
        
            echo "<form action='select_test_plan.php?test=$test_plan_var&ip=$ip' method='post'>";
            ?>
            <select name="test_plan">
                <option value ="">Select an option</option>
                <option value ="1">Graphics</option>
                <option value ="2">Blue</option>
                <option value ="3">Green</option>
            </select><br><br>
            <input type="submit" value="Show test Cases" >

       <?php            echo '</form>'; ?> 
        
        <?php
        $option = isset($_POST['test_plan']) ? $_POST['test_plan'] : false;
        
        
        
        
        $test_plan_var = '';
        if ($option == 1) {
            $test_plan_var = 'graphics';
            $result_id = mysql_query('SELECT temp_id FROM graphics');
            $result_test_name = mysql_query('SELECT temp_name FROM graphics');
            if (!$result_id and !$result_test_name) {
                die('Could not query:' . mysql_error());
            }
            
            $count = mysql_num_rows($result_id);
            echo '<br>The automated test cases available are as follows:<br>';
            #Generating the list of test cases of selected test plan in list
            $ip = $_GET['ip'];
            $username = 'root';
            $password = 'nvidia123';
            
            
                
            echo "<form action='ssh_class.php?test=$test_plan_var&ip=$ip' method='post'>";
            
            
            
            echo "<select name='test_list[]' multiple>";
            for ($i=0; $i < $count; $i++)
            {
                $temp_id = mysql_result($result_id, $i);  
                $temp_name = mysql_result($result_test_name, $i);  
                echo "<option value='$temp_id'>'$temp_id' : '$temp_name' </option>";    
        
            }
            echo '</select><br><br>';
            echo "<input type='submit' name='submit' value='Select test cases'/>";
            echo '</form>';
         // outputs third employee's name
//            echo "<label><input type='checkbox' name='testcase' value='value'>Text</label>";
   } else {
            echo "task option is required<br><br>";
            //exit; 
   }
   
   #Collecting data from above code and now below is the class to execute test cases
   
    
        
       
        ?>
    </body>
</html>
