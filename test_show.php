
<html>
<head>
  <title>ITF Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'kwanlada.mysql.database.azure.com', 'kwanlada@kwanlada', 'CTQply15', 'test', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM test');
?>
<table class="table table-dark table-striped" width="600" border="1">
  <tr class="table-info text-dark">
    <th width="120"> <div align="center">ชื่อ </div></th>
    <th width="120"> <div align="center">น้ำหนัก </div></th>
    <th width="120"> <div align="center">ส่วนสูง </div></th>
    <th width="120"> <div align="center">bmi </div></th>
    <th width="120"> <div align="center">การจัดการ </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['name'];?></div></td>
    <td><?php echo $Result['weight'];?></td>
    <td><?php echo $Result['height'];?></td>
    <td><?php echo $Result['bmi'];?></td>
    <td><a href="test_edit_form.html"><input type="submit" value="Update" class="btn btn-danger"></a></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
  <form action="test_form.html">
    <div align="center"><input type="submit" id="commentBtn" value="Add" class="btn btn-warning"> </div>
  </form>
</body>
</html>
