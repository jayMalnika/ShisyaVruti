<?php
	$con=mysqli_connect("localhost","root","","shishyavruti");
$did=$_REQUEST['did'];	
$sql = "SELECT * FROM student where grno='$did'";
$result = mysqli_query($con, $sql);

	$del = "DELETE FROM student where grno='$did'";
	$re1 = mysqli_query($con, $del) or die("Query failed: " . mysqli_error($con));

	if(!$re1)
	{
		echo mysqli_error($con);
	}
	else
	{
		echo "<script>alert('Data deleted Successfully');</script>";
		header("Location:student_cnr.php");
	}
	
	


?>