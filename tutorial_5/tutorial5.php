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
          //for doc file
         $docFile = fopen("sample1.doc", "r");
          while (($singleLine = fgetcsv($docFile)) !== false) {
	         echo "<tr>";
	         foreach ($singleLine as $singleTxtLine) {
		       echo "<td>" . $singleTxtLine . "</td>";
	         }
      	 echo "</tr>";
         echo "<br/>";
       }
     fclose($docFile);
          ?>
         <?php
          //for excel
          $excelFile = fopen("book2.xlsx", "r");
           while (($singleLine = fgetcsv($excelFile)) !== false) {
	         echo "<tr>";
	         foreach ($singleLine as $singleTxtLine) {
		       echo "<td>" . $singleTxtLine . "</td>";
	       }
       	echo "</tr>";
        echo "<br/>";
       }
     fclose($excelFile);
          ?>
           <?php
          //for csv
           $csvFile = fopen("sample.csv", "r");
            while (($singleLine = fgetcsv($csvFile)) !== false) {
	           echo "<tr>";
	          foreach ($singleLine as $singleTxtLine) {
		         echo "<td>" . $singleTxtLine . "</td>";
	       }
      	 echo "</tr>";
         echo "<br/>";
       }
     fclose($csvFile);
          ?>
         <?php
         //for text file
         $textFile = fopen("sample3.txt", "r");
         while (($singleLine = fgetcsv($textFile)) !== false) {
	          echo "<tr>";
	       foreach ($singleLine as $singleTxtLine) {
		       echo "<td>" . $singleTxtLine . "</td>";
	       }
      	 echo "</tr>";
         echo "<br/>";
       }
     fclose($textFile);
          ?>
       </body>
       </html>