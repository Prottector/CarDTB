<?php
session_start();
if(!isset($_SESSION['login']))
{
header('Location: login.php');
exit();
}

require('config.php');
$conn = connect();

$sql = "SELECT * FROM samochody";
$result = $conn->query($sql);

if (isset($_GET['export']))
    {
        return exportCSV();	
    }

$conn->close();
   
function exportCSV() {

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');


$output = fopen('php://output', 'w');


fputcsv($output, array('id', 'Marka', 'Model', 'Typ_Paliwa', 'Rocznik', 'Kolor'), ';');


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "samochody";


$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM samochody";
$result = $conn->query($sql);


while($row = $result->fetch_assoc()){ 
	fputcsv($output, $row, ';');
};
return $output;
}

?>

<!doctype html>
<html lang="pl-PL">
<head>
  <meta charset="UTF-8">
  <title>Projekt Programowanie Aplikacji Internetowych</title>
  <link rel="stylesheet" href="styless.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>
  <div id ='stars'>
        </div>
        <div id ='stars2'>
        </div>
        <div id ='stars3'>
        </div>

<h1 class='title'>Baza danych samochodów</h1>
	<div class='wrap'>
    <div class='tbl-header'>

    <table cellpadding='0' cellspacing='0' border='0'>
      <thead>
        <tr>
        
          <th>Marka</th>
          <th>Model</th>
          <th>Typ Paliwa</th>
          <th>Rocznik</th>
          <th>Kolor</th>
        </tr>
      </thead>
    </table>
  </div>

<div class='tbl-content'>
    <table cellpadding='0' cellspacing='0' border='0'>
      <tbody>

		<?php 
		if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
      echo "<tr><td class='update'><a href='aktualizuj.php?id=$row[id]'><img style='width: 15px; height: 15px;' src='http://simpleicon.com/wp-content/uploads/refresh.png'></a></td><td class='update'><a href='usun.php?id=$row[id]'><img style='width: 15px; height: 15px;' src='https://visualpharm.com/assets/652/Delete-595b40b65ba036ed117d2bab.svg'></a></td><td>".$row["Marka"]."</td><td><strong>".$row["Model"]."</td><td>".$row["Typ_Paliwa"]."</td><td>".$row["Rocznik"]."</td><td><strong>".$row["Kolor"]."</td></tr>";
}} else {
    echo "0 results";
}
		?>
	  </tbody>
    </table>
  </div>

  <a href='dodaj.php' class='przycisk2'>Dodaj Samochód</a>
  <a href='index.php?export=1' class='przycisk2'>Wyekportuj do CSV</a>
  </div>"
</body>
</html>