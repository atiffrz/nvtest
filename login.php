<!doctype html>

<head>

	<!-- Basics -->
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Login</title>

	<!-- CSS -->
	
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/styles.css">
	
</head>

	<!-- Main HTML -->
	
<body>
	
	<!-- Begin Page Content -->
	
	<div id="container">
		
            <form action="login.php" method="post">
		
		<label for="name">Username:</label>
		
                <input type="name" name="email">
		
		<label for="username">Password:</label>
		
		<p><a href="#">Forgot your password?</a>
		
                    <input type="password" name="password">
		
		<div id="lower">
		
		<input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>
		
		<input type="submit" value="Login">
		
		</div>
		
		</form>
		
	</div>
	
	
        <?php
        
        session_start();
        #connecting to databse and login user
        include("db_connect.php");
        
        if(!empty($_POST['email'] && !empty($_POST['password'])))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            echo $email.' , '.$password;
            $query = "select email from users where email='$email' and password='$password'";
            
            
            $count = 0;
            $result_id = mysql_query($query);
            $count = mysql_num_rows($result_id);
            
            echo 'Count = '.$count;
            if($count == 1)
            {
             
                $_SESSION['user_id'] = $result_id['email'];
                
                echo 'Success';
                
                header('Location:machines.php');
                
               
            }
            else {
     
                echo 'Sorry, Those credentials do not match';
                
            }
        }
        ?>
    <!-- End Page Content -->
	
</body>

</html>
	

