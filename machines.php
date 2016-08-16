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
        <link rel="stylesheet" type="text/css" href="assets/css/table.css">    
    </head>
    <body>



        <?php
        include('db_connect.php');
        ?>
        
        <div class="table-title">
            <h3>Data Table</h3>
        </div>
        <table id="hor-minimalist-a">
           
            <tr>
                <th>Status</th>
                <th>Machine Name</th>
                <th>Owner name</th>
                <th>Machine IP</th>
                <th>Mac Address</th>
                <th>Number of GPUs</th>
                <th>GPUs Connected</th>
                <th>Driver</th>
                <th>Number of Displays</th>
                <th>Displays Connected</th>
                <th>OS Name</th>
                <th>OS Version</th>
                <th>OS Platform</th>
                <th>System Manufacturer</th>
                <th>System Model Name</th>
                <th>Email</th>
            </tr>
            <?php
            $result = mysql_query('select * from machine');



            while ($row = mysql_fetch_object($result)) {
                echo '<tr>';
                echo "<td><a href='select_test_plan.php?ip=$row->machine_ip'>" . $row->status . "</a></td>";
                echo '<td>' . $row->machine_name . '</td>';
                echo '<td>' . $row->owner_name . '</td>';
                echo '<td>' . $row->machine_ip . '</td>';
                echo '<td>' . $row->mac_address . '</td>';
                echo '<td>' . $row->no_of_gpus . '</td>';
                echo '<td>' . $row->gpus_connected . '</td>';
                echo '<td>' . $row->driver . '</td>';
                echo '<td>' . $row->no_of_displays . '</td>';
                echo '<td>' . $row->displays_conected . '</td>';
                echo '<td>' . $row->os_name . '</td>';
                echo '<td>' . $row->os_version . '</td>';
                echo '<td>' . $row->os_platform . '</td>';
                echo '<td>' . $row->system_manufacturer . '</td>';
                echo '<td>' . $row->system_model_name . '</td>';
                echo '<td>' . $row->email . '</td>';
                echo '</tr>';
            }
            ?>
         

            

        </table>
        
        <a href="machines.php"><button value="Refresh">Refresh</button></a>
        
        <br>Click <a href="add_machine.php">here</a> to Add Machine
    </body>
</html>
