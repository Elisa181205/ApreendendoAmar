<?php
session_start();

$email=$_SESSION['usuarioEmail'];

if(!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])){
		header("Location: logado.php");
		exit;
		}

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link rel="stylesheet" href="estiloap.css"/>

</head>
<body>
<div class="doc">
<h1> Minhas Doações</h1></div>
		<div class="exibir">
		
		<table>
		<tr>
		<td>EMAIL</td>
		<td>LEITE</td>
		<td>ROUPAS</td>
		<td>TEMPO</td>
		<td><?php echo "<a href='logado.php"."'><img src='voltar.png' width='35px' heigth='30px'></a></a>"; ?></td>
		</tr>
		<?php
		include 'teste_conexao.php';?>
<?php
		$sql = mysqli_query($connect, "SELECT * FROM doacoes where email='$email'");
		
		while($row = mysqli_fetch_assoc($sql)) { ?>
				<tr>
				<td><?php echo $row['email']; ?></td><br>
				<td><?php echo $row['leite']; ?> </td>
				<td><?php echo $row['roupas']; ?></td>
				<td><?php echo $row['tempo']; ?></td>
				<td><button class="mandar"><?php echo "<a href='DELETAR.php?id=".$row['id']."'><img src='delete.png' width='20px' heigth='30px'></a></a>"; ?></button></td>

		<?php } ?>

		</table>
		
		</div>
</body>
</html>