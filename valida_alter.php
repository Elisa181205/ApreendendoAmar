<?php
   include("teste_conexao.php");

   session_start();
   
$email=$_SESSION['usuarioEmail'];
$senha=$_SESSION['usuarioSenha'];
$ss=md5($_POST['senha_atual']);
$nova_senha=md5($_POST['senha_nova']);
$con_nova_senha=md5($_POST['con_senha_nova']);

if($nova_senha == $con_nova_senha and $senha == $ss  ){
	
$guardar=mysqli_query($connect,"UPDATE inserir_cadastro set senha='$nova_senha' where email='$email'");
if($guardar){
	
	echo "<script language='javascript' type='text/javascript'>alert('Senha do usuario alterada com sucesso');window.location.href='logado.php'</script>";
}
}
else{
	
	echo "<script language='javascript' type='text/javascript'>alert('Não foi possivel alterar a senha do usuario tente novamente mais tarde');window.location.href='logado.php'</script>"
;	
}
