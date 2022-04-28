<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP CRUD</title>
</head>
<body>
      <?php require_once 'process.php'; ?>
      <?php 
      if (isset($_SESSION['meassage'])):  ?>
      <div class="alert alert-<?=$_SESSION['msg_type']?>">
      <?php 
      echo $_SESSION['message'];
      unset ($_SESSION['message']);
      ?>
      </div>
      <?php endif; ?>
      <div class="container">
      <?php 
       $mysqli = new mysqli('localhost','root','1234','crud') or die(mysqli_error($mysqli));
       $result = $mysqli->query("SELECT * FROM employees") or die(mysqli_error($mysqli));
       //pre_r($result);
       //pre_r($result->fetch_assoc());
       ?>
       <div class="row justify-content-center">
         <table class="table">
           <thead>
             <tr>
               <th>Name</th>
               <th>Address</th>
               <th>Salary</th>
               <th colspan="2">Action</th>
              </tr>
          </thead>
          <?php
          while ($row = $result->fetch_assoc()):?>
          <tr>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['address'];?></td>
            <td><?php echo $row['salary'];?></td>
            <td>
              <a href="index.php?edit=<?php echo $row['id'];?>"
              class="btn btn-info">Edit</a>
              <a href="process.php?delete=<?php echo $row['id'];?>"
              class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <?php endwhile;?>
        </table>
      </div>
       <?php
       function pre_r($array)
       {
         echo '<pre>';
         print_r($result);
         echo '</pre>';
       }
       ?>
      
  <div class="row justify-content-center">
  <form action="process.php" method="POST">
    <div class="form-group">
    <label>Name:</label>
    <input type="text" name="name" class="form-control" placeholder="Enter your Name">
   </div><br>
   <div class="form-group">
   <label>Address:</label>
    <input type="text" name="address" class="form-control" placeholder="Enter your Address">
    </div><br>
  
  <div class="form-group">
    <button type="submit" class="btn btn-primary" name="save">Save</button>
  </div>
</form>
        </div>
      </div>
</body>
</html>
