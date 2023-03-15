<?php
   include("teste_conexao.php");

   session_start();
   
$email=$_SESSION['usuarioEmail'];
$novo_usuario=$_POST['novo_usuario'];
$usuario_at=$_SESSION['usuarioNome'];
$usu_at=$_POST['usuario_atual'];

if($usu_at == $usuario_at){
$guardar=mysqli_query($connect,"UPDATE inserir_cadastro set usuario='$novo_usuario' where email='$email'");

if($guardar){

	echo "<script language='javascript' type='text/javascript'>alert('Nome do usuario alterado com sucesso');window.location.href='logado.php'</script>";
}
}

else{
	
	echo "<script language='javascript' type='text/javascript'>alert('Não foi possivel alterar o nome do usuario tente novamente mais tarde');window.location.href='logado.php'</script>";	
}