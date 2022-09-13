<?php 

include 'db.php';
if (isset($_GET['deleteid'])) {
	// code...
	$id = $_GET['deleteid'];
	$sql = "DELETE FROM `student` WHERE ID=$id";
	$query = mysqli_query($con,$sql);
	if ($query) {
		// code...
		//echo "Deleted";
		header('location:view.php');
	} else {
		// code...
		echo "Not deleted";
	}
	
}

?>