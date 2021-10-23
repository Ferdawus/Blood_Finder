<?php
include('../db.php');
if (isset($_REQUEST['Action'])) {
	if ($_REQUEST['Action'] == 'Delete') {
		$Id = $_REQUEST['Id'];
		$Query = "DELETE FROM donors WHERE  Id ='$Id'";
		$Result = mysqli_query($Connection,$Query);

		if (!$Result) {
			echo "Delete Error !";
		}
		else{
			header('location:list.php');
		}
	}
}
?>