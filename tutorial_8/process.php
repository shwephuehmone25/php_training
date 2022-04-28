    <?php
    session_start();
    $mysqli = new mysqli('localhost','root','1234','crud') or die(mysqli_error($mysqli));
    //create employees info
    if (isset($_POST['save']))
    {
      $name = $_POST['name'];
      $address = $_POST['address'];
      $mysqli->query("INSERT INTO employees (name,address) 
      VALUES ('$name','$address')" or die($mysqli->error));
       $_SESSION['message'] = "Record has been saved successfully";
       $_SESSION['msg_type'] = "success";
       header("location:index.php");
    }
    //delete employees info
    if (isset($_GET['delete']))
    {
      $id=$_GET['id'];
      $mysqli->query("DELETE FROM employees where id=$id" or die($mysqli->error));
      $_SESSION['message'] = "Record has been deleted successfully";
      $_SESSION['msg_type'] = "danger";
      header("location:index.php");
    }
    //edit
    if (isset($_GET['delete']))
    {
      $id=$_GET['id'];
      $mysqli->query("SELECT * FROM employees where id=$id" 
      or die($mysqli->error));
      if (count($result)==1)
      {
        $row=$result->fetch_array();
        $name=$row['name'];
        $address=$row['address'];
      }
      header("location:index.php");
    }
    ?>