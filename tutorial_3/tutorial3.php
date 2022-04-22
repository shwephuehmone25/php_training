<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial03</title>
</head>
<body>
<?php
if(isset($_POST['age'])){
    $dob = $_POST['age'];
calculate_age($dob);
$year = calculate_Year($dob);
}

function calculate_age($birthday)
{
    $today = new DateTime();
    $diff = $today->diff(new DateTime($birthday));
    return printf('%d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
}
function calculate_Year($birthday)
{
    $today = new DateTime();
    $diff = $today->diff(new DateTime($birthday));
    return  $diff->y;
}
 ?>

<form  method="post" action="age.php" >
ENTER DATE OF BIRTH : <input type="date" name="age" />
<input type="submit" value="Calculate Age" />
</form>

</body>
</html>

