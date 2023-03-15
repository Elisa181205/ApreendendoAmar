<?php
session_start();

if(!isset($_SESSION["usuarioNome"]) || !isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])){
		header("Location: login.php");
		exit;
		}

?>
<html>
<head>

<link rel="stylesheet" href="estiloap.css"/>
<link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
<meta charset="utf-8">


<style>

input[type=submit]{
font-family: 'Prata', serif;
	margin-left:320px;
	
}
table{
	margin-top:30px;
	margin-left:250px;
}
input[type=text]{
font-family: 'Prata', serif;
	margin-left:389px;
	border:solid;
	font-size:1.25em;
}
h1{

}
.nome{
font-family: 'Prata', serif;
	margin-top:15px;
	margin-left:900px;
	
}
.card {
font-family: 'Prata', serif;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 190px;
  margin-top:110px;;
  text-align: center;
  font-family: arial;
  margin-left:1280px;
}

.title {
font-family: 'Prata', serif;
  color: grey;
  font-size: 18px;
}

button {
font-family: 'Prata', serif;
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
font-family: 'Prata', serif;
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
font-family: 'Prata', serif;
  opacity: 0.7;
}



input[type=text]{
font-family: 'Prata', serif;
margin-left:970px;
margin-top:400px;
}   

.comentarios{
font-family: 'Prata', serif;
margin-left:970px;
margin-top:00px;
}

.leitee{
width:100px;
height:100px;
margin-left:260px;
margin-top:150px;
}

.roupaa{
width:100px;
height:100px;
margin-left:260px;
margin-top:80px;
}

.tempoo{
font-family: 'Prata', serif;
width:100px;
height:100px;
margin-left:260px;
margin-top:80px;
}

.leche p{
font-family: 'Prata', serif;
margin-left:380px;
margin-top:-10px;
}

.leche h1{
margin-left:380px;
margin-top:-100px;
}

.ropa p{
font-family: 'Prata', serif;
margin-left:380px;
margin-top:-10px;
}

.ropa h1{
margin-left:380px;
margin-top:-100px;
}

.tempu p{
font-family: 'Prata', serif;
margin-left:380px;
margin-top:-10px;
}

.tempu h1{
margin-left:380px;
margin-top:-100px;
}
.quanti{
height:30%;
width:3.25%;
margin-left:310px;
margin-top:10px;
}  
.qtd{
height:30%;
width:3.25%;
margin-left:310px;
margin-top:10px;
}
.dade{
height:30%;
width:3.25%;
margin-left:310px;
margin-top:10px;
}
input[type=submit]{
font-family: 'Prata', serif;  
	width:5.5%;
	height:36%;
	margin-left:2%;
	top:-65%;
	background-color:#99C1FF;

}

.ola{
	border-radius:50%;
	font-family: 'Prata', serif;  

}
</style>
</head>
<body>

<div class="menn"><div class="logo">
  <div class="menuToggle">
    <!--
    A fake / hidden checkbox is used as click reciever,
    so you can use the :checked selector on it.
    -->
    <input type="checkbox" />

    <span></span>
    <span></span>
    <span></span>
    
    <!--
    Too bad the menu has to be inside of the button
    but hey, it's pure CSS magic.
    -->
	<ul class="menuu">
	
    <a href="alterar.php"><li>Alterar senha</li></a>
    <a href="usuario.php"><li>Alterar usuario</li></a>
	<a href="atualizar.php"><li>Alterar foto</li></a>
	<a href="Consultar.php"><li>Minhas doações</li></a>
	<a href="sair.php"><li>Sair</li></a>
    </ul>
  </div>
  <!-- Usuario-->
<div class="dropdown">
<?php 
  echo "<img  src='fotos/".$_SESSION['nomeImagem']."' width='100px' heigth='200px' class='ola' >";
echo "<span class='ola'>"; echo "Olá, "; echo "</span>"; echo "<span'>"; echo $_SESSION["usuarioNome"]; echo "</span>";

?>

  <div class="dropdown-content">
  
  </div>
</div>
	</div>
	<div class="leche">
	<img class="leitee" src="imagens/leche.png">
	<h1>Leite</h1><br>
	<p>A amamentação é um processo muito importante para garantir a saúde do bebê.<br>
 O leite materno é rico em água, vitaminas, proteínas,<br>
 gorduras e outros nutrientes essenciais para
 o desenvolvimento e para proteção do<br>
 recém-nascido nos primeiros meses de vida.<br>
 Devido á muitos problemas de diversas origens,<br>
 o leite da mãe acaba secando ou não é suficiente <br>
 para amamentar o recém-nascido.<br>
 Por isso a doação do leite é essencial para a formação do bebê.<BR>
 Doe leite e ajude várias famílias!</p>
	</div>
	<form action="fazer_doacao.php" method="post">
	 <input type="number" class="quanti" name="leite" min="1" max="100" value="0" >
		<input type="submit" class="ok" name="botao_leite">
	</form>
	<div class="ropa">
	<img class="roupaa" src="imagens/roopa.png">
		<h1>Roupas</h1><br>
	<p>
 Bebês são os seres mais frágeis nesse estado da vida, precisam de roupas que para se agasalhar<br>
 no frio já que a pele deles é sensivel e precisa de todo o cuidado possível.<br>
 Doe roupas para um bebê, é essencial!
	</div>
	<form action="fazer_doacao.php" method="post">
	<input type="number" name="roupa" class="qtd" min="1" max="100" value="0">
			<input type="submit" class="ok" name="botao_roupa">
	</form>
	<div class="tempu">
	<img class="tempoo" src="imagens/tempu.png"><br>
		<h1>Tempo</h1><br>
	<p>
	Quando os bebês são diagnósticados como prematuros pode ser uma experiência muito difícil para os pais,<br>
	dar um pouco de atenção e conversar com os pais pode ajudar muito no deselvolvimento dos pais.<br>
	Doe tempo para os pais, é essencial!
</p>
	</div>
	<form action="fazer_doacao.php" method="post">
	<input type="number" class="dade" name="tempo" min="1" max="100" value="0">
		<input type="submit" class="ok" name="botao_tempo">
	</form>
	</div>
</body>
</html>