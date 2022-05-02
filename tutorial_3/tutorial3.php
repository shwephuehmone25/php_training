		<!DOCTYPE html>
		<html>
		<head>
		<meta charset="utf-8">
		<title>Tutorial03</title>
		<link rel="stylesheet" href="css/style.css">
		</head>
	<body>
		<div class="container">
   	 <h1 class="header">Tutorial03</h1>
   	 <div class="row">
			<div class="blk">
			<form method="POST">
    	<div class="form-blk">
    	<label>Birthday:</label>
    	<input type="date" name="birthday" class="date" required>
    	</div><br>
    	<button type="submit" name="calculate" class="btn-cal">Calculate</button>
    	</form>
				<?php
		    	//calculate age from today date
					if (isset($_POST['calculate'])){
						$bday = $_POST['birthday'];
						$today = date('Y-m-d');
						$diff = date_diff(date_create($bday), date_create($today));
				?>
		<div class="alert-box">
				<?php 
				//alert current age
					echo 'Age is <b>'.$diff->format('%y').'</b>'; 
				?>
    </div>
		<?php
			}
			?>
    	</div>
   	 </div>
    	</div>
    </body>
		</html>