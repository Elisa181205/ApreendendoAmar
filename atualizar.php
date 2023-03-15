<?php
session_start();
include_once 'teste_conexao.php';

$email=$_SESSION["usuarioEmail"];
			
if (isset($_POST['atualizar'])) {	
	
	$foto = $_FILES["foto"];     
	
	// Se a foto estiver sido selecionada
	if (!empty($foto["name"])) {
		
		// Largura máxima em pixels
		$largura = 600;
		// Altura máxima em pixels
		$altura = 2000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 100000;
 
		$error = array();
 
    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp|jfif)$/", $foto["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
	
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($foto["tmp_name"]);
	
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}
 
		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}
		
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($foto["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
 
		// Se não houver nenhum erro
		if (count($error) == 0) {
		
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg|jfif){1}$/i", $foto["name"], $ext);
 
        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
 
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "fotos/" . $nome_imagem;
 
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);
		
			// Insere os dados no banco

			 $result_usuario = "UPDATE inserir_cadastro SET foto='$nome_imagem' WHERE email ='$email'";
			 
                         $result = mysqli_query($connect,$result_usuario);
						 
						 $_SESSION['nomeImagem']=$nome_imagem;
		
			// Se os dados forem inseridos com sucesso
			if ($result){
				echo "Você foi atualizado com sucesso.";
                                
                                header("location:logado.php");
			}
		}
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>

.exib{
font-family: 'Prata', serif;
width:25%;
height:35%;
margin-left:35%;
margin-top:150px;
box-shadow:5px 5px 8px grey;
padding-top:50px;
font-size:0.55em;
background-color:#c0fcf8;

}
.alter{
	margin-top:-11%;
	text-align:center;
	font-size:2em;
	
}
.exibi{
	text-align:center;
	font-size:2em;
	margin-top:3%;
	margin-bottom:3%;
}
input[type=file]{
margin-top:5px;
margin-left:-6%;
}
input[type=submit]{
margin-top:180px;
margin-left:-8%;
margin-bottom:90px;
position: absolute;

}
.vol{
	margin-top:29%;
	margin-left:75%;
}
.alter:hover{
	text-decoration: underline;
	transform:scale(1.15);
	transition:2s;
}
</style>
</head>
<body>
<div class="fundo">

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" name="atualizar" >
<div class="exib">
<div class="alter"><h1>Alterar</h1></div>
<div class="exibi">
<p>Foto de exibição:</p><br /><div>
<input type="file" name="foto"  value="escolher"/>
<input type="submit" name="atualizar" value="Atualizar" />
<?php echo "<a href='logado.php"."'><img src='voltar.png' class='vol' width='40px' heigth='60px'></a></a>"; ?></button>

</div>
</form>
</div>
</body>
</html>
