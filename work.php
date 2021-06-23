<?php 

$server = "localhost";
$password = "";
$user = "root";
$dbName = "robot_base";
$connect = new mysqli($server,$user,$password,$dbName);
if($connect->connect_error) {
    die('connection failed'.$connect->connect_error);
}  else {
    echo "The database is successfully connected. ". "<br>";
}
if(isset($_POST['forward'])){
    $sql = "insert into directions (direction) VALUES ('forward')";
    if ($connect->query($sql) === TRUE) {
        echo "New record created successfully"."<br>";
      } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
      }
} 

if(isset($_POST['backward'])){
    $sql = "insert into directions (direction) VALUES ('backward')";
    if ($connect->query($sql) === TRUE) {
        echo "New record created successfully"."<br>";
      } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
      }
} 

if(isset($_POST['stop'])){
    $sql = "insert into directions (direction) VALUES ('stop')";
    if ($connect->query($sql) === TRUE) {
        echo "New record created successfully"."<br>";
      } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
      }
} 

if(isset($_POST['right'])){
    $sql = "insert into directions (direction) VALUES ('right')";
    if ($connect->query($sql) === TRUE) {
        echo "New record created successfully"."<br>";
      } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
      }
} 

if(isset($_POST['left'])){
    $sql = "insert into directions (direction) VALUES ('left')";
    if ($connect->query($sql) === TRUE) {
        echo "New record created successfully"."<br>";
      } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
      }
} 

$stmt = "SELECT * FROM directions WHERE ID = (SELECT MAX(ID) FROM directions) LIMIT 1";
$result = $connect->query($stmt);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "The Direction: " . $row["Direction"];
    }
  } else {
    echo "0 results";
  }

?>