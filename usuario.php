<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">

<style>

.fund{
font-family: 'Prata', serif;
width:25%;
height:65%;
margin-left:35%;
margin-top:5%;
box-shadow:5px 5px 8px grey;
padding-top:50px;
font-size:0.55em;
background-color:#c0fcf8;
}

input[type=text]{ 
margin-bottom:15%;
background-color:rgba(0,0,0,0);
border-bottom-style:solid;
border-left:none;
border-right:none;
border-top:none;
width:70%;
margin-left:15%;
}
.at{
	font-size:0.9em;
	margin-top:20px;
	text-align:center;
	margin-bottom:25px;
}
.nv{
	margin-top:-25px;
	font-size:0.9em;
	text-align:center;
	margin-bottom:25px;
}

input[type=submit]{
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
	margin-bottom:15%;
	text-align:center;
	font-size:1.5em;
}
.senhaa:hover{
	text-decoration: underline;
	transform:scale(1.15);
	transition:2s;
}
</style>
</head>
<form action="valida_usu.php" method="POST">

<body>

<div class="fund">
<div class="senhaa"><h1> Alterar senha </h1></div> 
<div class="at"><h1>Usuario atual </h1> </div><input type="text" name="usuario_atual" required>
<div class="nv"><h1>Novo Usuario </h1> </div><input type="text" name="novo_usuario" required>
<input type="submit" value="Trocar">
<?php echo "<a href='logado.php"."'><img src='voltar.png' class='vol' width='40px' heigth='60px'></a></a>"; ?></button>
</div>
</body>
</html>