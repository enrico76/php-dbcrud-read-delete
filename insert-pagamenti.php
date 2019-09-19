<?php
header('Content-type: application/json');

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'design';

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn -> connect_error) {
  var_dump('error');
  var_dump($conn);
  die();
}
$price = $_GET['price'];
$status = $_GET['status'];

$query = "
  INSERT INTO pagamenti (status, price, prenotazione_id, pagante_id)
  VALUES
    ('". $status . "'," . $price . ", 1, 1)

";

$res = $conn -> query($query);
$conn -> close();

echo json_encode($res);




 ?>
