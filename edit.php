<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'kwanlada.mysql.database.azure.com', 'kwanlada@kwanlada', 'CTQply15', 'itflab', 3306);

if (mysqli_connect_errno($conn))
{
die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];

$sql = "UPDATE guestbook SET comment='$comment' WHERE name='$name'";


if (mysqli_query($conn, $sql)) {
echo "Record deleted successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
