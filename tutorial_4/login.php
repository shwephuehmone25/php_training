<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>Tutorial04</title>
      <link rel="stylesheet" href="new.css">
      
      <style>
         
      </style>
      
   </head>
	
   <body>
      
      <h2>Enter Username and Password</h2> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'shwe' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'shwe';
                  
                  echo 'You have entered valid username and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
      Enter your UserName: <input type = "text" class = "form-control" 
               name = "username"   required autofocus></br>
     Enter your password:<input type = "password" class = "form-control"
               name = "password"  required><br>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login" >Login</button>
         </form>
			
         
         Log out <a href = "logout.php" tite = "Logout">Session. 
      </div> 
      
   </body>
</html>