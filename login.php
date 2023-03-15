<html>
<head>
<link rel="stylesheet" href="estiloap.css"/>
<link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
<style>
.cadastrar{
background-image: url("imagens/cadastro.png");
width: 5.2%;
height: 2.5%;
margin-left:16s%;
margin-top: -0.5%;
position: absolute;
background-size: cover;
}
.li ul  li{
color: black;
display: inline-block;
color: white;
font-family: 'Prata', serif;
padding: 8px;
}
</style>
</head>
<body>
       
<div class="menu"><div class="logo"></div>
	<ul class="nav">
	<a href="index.html"><li><div class="home"></div></li></a>
	<a href="bebes.html"><li><div class="bebes"></div></li></a>
	<a href="doacoes.html"><li><div class="doacoes"></div></li></a>
	<a href="login.php"><li><div class="login"></div></li></a>
	<a href="SOBRENOS.HTML"><li><div class="sobre"></div></li></a>

	</ul>
	</div>
<form action="valida_login.php" method="POST"> <BR>	
<div class="img_bebe"></div>
<div class="logar"> <h1> Login </h1><br>
<div class="usu"><h1>Email: </h1><input type="email" name="email" required><br></div><br>
<div class="sen"><h1>Senha:</h1><input type="password" name="senha" required><br></div>
<button class="envear"><?php echo "<a href='logado.php"."'><img src='imagens/logar.png' width='20px' heigth='30px'></a>"; ?></button>
	<div class="li"><ul><a href="frm_cadastro.php"><li><div class="cadastrar"></div></li></a></ul></div>
</div>
</body>