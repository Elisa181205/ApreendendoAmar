<?php
session_start();
include 'teste_conexao.php';
if(isset($_POST['botao_leite'])){
$leite=$_POST["leite"];
$roupas=0;
$tempo=0;
}
if(isset($_POST['botao_roupa'])){
$roupas=$_POST["roupa"];
$leite=0;
$tempo=0;
}
if(isset($_POST['botao_tempo'])){
$tempo=$_POST["tempo"];
$leite=0;
$roupas=0;
}
$email= $_SESSION['usuarioEmail'];

$doacao= "INSERT INTO doacoes (leite,roupas,tempo,email) values ('$leite','$roupas','$tempo','$email')";

$result= mysqli_query($connect,$doacao);

if(mysqli_affected_rows($connect) != 0){
  
  echo "<script language='javascript' type='text/javascript'>alert('Doação feita com sucesso !!!');window.location.href='logado.php'</script>";
    
}

else{
    
echo "<script language='javascript' type='text/javascript'>alert('Nao foi possivel fazer esta doação');window.location.href='frm_cadastro.php'</script>";   
    
}


 