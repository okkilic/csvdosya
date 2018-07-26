<?php
         

/*
$dosya = 'yuklenenler/data.csv';
$dosyaoku = fopen($dosya, 'r');
$icerik = fread($dosyaoku, filesize($dosya));

print_r($data);
	
*/

$dosya = 'yuklenenler/data.csv';

if (($handle = fopen($dosya, "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $num = count($data);
  
    for ($c=0; $c < $num; $c++) {
        echo $data[$c] . "<br/>\n";
    }
  }
  fclose($handle);
}






/*<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>readContactCSV.php</title>
</head>
<body>
 <h1>Contacts</h1>
 <div>
 <?php
  print <<< HERE
  <table border = "1">
  <tr>
   <th>First</th>
   <th>Last</th>
   <th>email</th>
   <th>phone</th>
  </tr>
HERE;
  $data = file("contacts.csv");
  foreach ($data as $line){
  $lineArray = explode("t", $line);
  list($fName, $lName, $email, $phone) = $lineArray;
  print <<< HERE
   <tr>
   <td>$fName</td>
   <td>$lName</td>
   <td>$email</td>
   <td>$phone</td>
   </tr>
HERE;
  } // end foreach
  //print the bottom of the table
  print "</table> n";
 ?>
 </div>
</body>
</html>



*/
?>