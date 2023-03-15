<?php

include 'teste_conexao.php';

$nome=$_POST["nome"];
$cep=$_POST["cep"];
$logradouro=$_POST["logradouro"];
$numero=$_POST["numero"];
$bairro=$_POST["bairro"];
$estado=$_POST["uf"];
$telefone=$_POST["telefone"];
$celular=$_POST["celular"];
$email=$_POST["email"];
$usuario=$_POST["usuario"];
$senha=md5($_POST["senha"]);
$con_senha=md5($_POST["con_senha"]);
$foto='Original.png';

$pegaEmail = mysqli_query($connect, "SELECT * FROM inserir_cadastro WHERE email ='$email' OR usuario = '$usuario'");

if(mysqli_num_rows($pegaEmail) == 1) {
    
 echo "<script language='javascript' type='text/javascript'>alert('Este email ou usuário ja esta cadastrado');window.location.href='login.php'</script>";
}

		elseif($senha==$con_senha){
	
	
	
$inserir_registro= "INSERT INTO inserir_cadastro (nome,cep,logradouro,numero,bairro,estado,telefone,celular,email,usuario,senha,foto) 
values ('$nome','$cep','$logradouro','$numero','$bairro','$estado','$telefone','$celular','$email','$usuario','$senha','$foto')";

$result= mysqli_query($connect,$inserir_registro);

if(mysqli_affected_rows($connect) != 0){
    
   echo "<script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso!');window.location.href='login.php'</script>";
    
}

else{
    
echo "<script language='javascript' type='text/javascript'>alert('Nao foi possivel cadastrar este usuario');window.location.href='frm_cadastro.php'</script>";   
    
}
		}
		else{
echo "<script language='javascript' type='text/javascript'>alert('Nao foi possivel cadastrar este usuario, pois as senhas são diferentes');window.location.href='frm_cadastro.php'</script>";   
			
		}

