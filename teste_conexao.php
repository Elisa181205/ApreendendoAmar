<?php
$Host="localhost";
$User="root";
$Senha="";
$Banco="inserir";

$connect= mysqli_connect($Host,$User,$Senha,$Banco);

	if(!$connect)
	{
		echo "Falhou a conexão";
	}

