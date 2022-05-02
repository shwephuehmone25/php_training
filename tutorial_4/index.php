                <?php
                 //gets session id from cookies, or prepa
                session_start(); 
                //if sid exists and login for sid exists
             if (session_id() == '' || !isset($_SESSION['login'])) { 
                ?>
            <a href="/login.php">Login</a>
            <?php
            }
        else 
         {
         echo "Hi, " . $_SESSION['login'];
          ?>
         <a href="/logout.php">Logout</a>
        <?php 
        }
        ?>