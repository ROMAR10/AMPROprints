<?php
	include_once 'connect.php';

	$AMP = $_POST['AMP'];
	$bName = $_POST['bName'];
	$Addr = $_POST['Addr'];
	$City = $_POST['City'];
	$State = $_POST['State'];
	$Zip = $_POST['Zip'];
	$Total = $_POST['Total'];

	$sql = "INSERT INTO clientes (AMP, bName, Addr, City, State, Zip, Total) VALUES ('$AMP', '$bName', '$Addr', '$City', '$State', '$Zip', '$Total');";
	mysqli_query($conn, $sql);

	header("Location: ../index.php?submit=success");
?>