<?php
include "connect.php";
$zone = $_GET['zone']; //เก็บในตัวแปรก่อนแล้วค่อยเอาคัวแปรไปใช้ใน  values

$sql = "INSERT INTO tbl_smartfarm (zone, board, temp, humi, dmy) 
VALUES ('$zone', '$_GET[board]', '$_GET[temp]', '$_GET[humi]', now())";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
