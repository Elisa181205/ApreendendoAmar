<?php
session_start();

if(!isset($_SESSION["usuarioNome"]) || !isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])){
		header("Location: login.php");
		exit;
		}

?>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
<style>
.fund{
font-family: 'Prata', serif;
width:25%;
height:50%px;
margin-left:35%;
margin-top:150px;
box-shadow:5px 5px 8px grey;
padding-top:50px;
font-size:0.55em;
background-color:#c0fcf8;

}

input[type=password]{ 
margin-bottom:15%;
background-color:rgba(0,0,0,0);
border-bottom-style:solid;
border-left:none;
border-right:none;
border-top:none;
width:70%;
height:3%;
margin-left:15%;
}

.at{
	font-family: 'Prata', serif;

	font-size:0.9em;
	margin-top:20px;
	text-align:center;
	margin-bottom:25px;
}
.nv{font-family: 'Prata', serif;

	margin-top:-25px;
	font-size:0.9em;
	text-align:center;
	margin-bottom:25px;
}

input[type=submit]{
	font-family: 'Prata', serif;

margin-bottom:102px;
border-style:solid;
width:30%;
height:5%;
margin-left:78px;
margin-top:30px;
background-color:#84d3fa;

}
.vol{
	margin-top:10%;
	margin-left:35%;
}
.senhaa{
	text-align:center;
	font-size:1.5em;
}
.senhaa:hover{
	text-decoration: underline;
	transform:scale(1.15);
	transition:2s;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
</head>
<form action="valida_alter.php" method="POST">
<body><div class="fundo">
<div class="fund">
<div class="senhaa"><h1> Alterar senha </h1></div> <br><br><br>
<div class="at"><h1>Senha atual </h1> </div><input type="password" name="senha_atual" required >
<div class="nv"><h1>Nova senha </h1> </div><input type="password" name="senha_nova" required >
<div class="nv"><h1>Confirme sua Nova senha </h1> </div><input type="password" name="con_senha_nova" required>

<input type="submit" value="Trocar" class="voltar">
<?php echo "<a href='logado.php"."'><img src='voltar.png' class='vol' width='40px' heigth='60px'></a></a>"; ?></button>
</div>
</div>
</body>
</html>