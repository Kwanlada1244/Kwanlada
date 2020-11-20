<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'kwanlada.mysql.database.azure.com', 'kwanlada@kwanlada', 'CTQply15', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$ID = $_GET['id'];
$sql = "DELETE FROM guestbook WHERE id = $ID";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
