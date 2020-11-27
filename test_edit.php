<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'kwanlada.mysql.database.azure.com', 'kwanlada@kwanlada', 'CTQply15', 'test', 3306);

if (mysqli_connect_errno($conn))
{
die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$bmi = $weight / ($height / 100) ** 2;
$cal = round($bmi, 2);

$sql = "UPDATE test SET weight='$weight' height='$height' bmi='$cal' WHERE name='$name'";


if (mysqli_query($conn, $sql)) {
echo "Record edit successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>