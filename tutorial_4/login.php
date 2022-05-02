        <?php
        session_start();
        const login = 'admin';
        const password = 'admin1234';
          //when form submitted
          if (isset($_POST['login']) && isset($_POST['password']))
            {
         if ($_POST['login'] === login && $_POST['password'] === password)
            {
          //write login to server storage
            $_SESSION['login'] = $_POST['login'];
            //redirect to main
          header('Location: /'); 
          }
          else
          {
          echo "<script>alert('Wrong login or password');</script>";
          echo "<noscript>Wrong login or password</noscript>";
          }
       }
         ?>
      <form method="post">
      Login:<br><input name="login"><br>
      Password:<br><input name="password"><br><br>
      <input type="submit">
      </form>