<?php
	include_once 'connect.php';

	$AMP = $_POST['AMP'];

	$sql = "DELETE FROM clientes WHERE AMP = $AMP";
	mysqli_query($conn, $sql);

	header("Location: ../index.php?submit=success");
?>