<?php
	include_once 'connect.php';

	$AMP = $_POST['AMP'];
	$bName = $_POST['bName'];
	$Addr = $_POST['Addr'];
	$City = $_POST['City'];
	$State = $_POST['State'];
	$Zip = $_POST['Zip'];
	$Total = $_POST['Total'];

	$sql = "UPDATE clientes SET bName = '$bName', Addr = '$Addr', City = '$City', State = '$State', Zip = '$Zip', Total = '$Total' WHERE AMP = $AMP";
	mysqli_query($conn, $sql);

	header("Location: ../index.php?submit=success");
?>