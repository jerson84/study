<?php
include_once 'include/config.php';
$result1 = mysqli_query($conn,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result1) > 0) {
?>
  <table>
  
  <tr>
    <td>Name</td>
    <td>address</td>
    <td>City</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result1)) {
?>
<tr>
    <td><?php echo $row["Name"]; ?></td>
    <td><?php echo $row["Address"]; ?></td>
    <td><?php echo $row["City"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>