<?php
include_once 'include/config.php';
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['name'];
	 $address = $_POST['address'];
	 $city_name = $_POST['city'];
	 $sql = "INSERT INTO users (name,address,city)
	 VALUES ('$first_name',' $address','$city_name')";
	 if (mysqli_query($conn, $sql)) {
		echo "<b>New record created successfully !</b>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
