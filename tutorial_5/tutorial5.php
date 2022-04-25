        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8 encoding">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Tutorial05</title>
        </head>
        <body>
          <?php
          $csvFile = fopen("sample1.doc", "r");
          while (($singleLine = fgetcsv($csvFile)) !== false) {
	        echo "<tr>";
	        foreach ($singleLine as $singleTxtLine) {
		      echo "<td>" . $singleTxtLine . "</td>";
	      }
      	echo "</tr>";
      }
    fclose($csvFile);
    ?>
    </body>
        </html>