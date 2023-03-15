<?php
include 'teste_conexao.php';

$id = $_GET['id'];

	
	$sqlstring = "delete from doacoes where id=$id";
	mysqli_query($connect, $sqlstring);
	header('Location: Consultar.php'); 

?>