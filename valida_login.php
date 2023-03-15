<?php
    session_start(); 
  
    include_once("teste_conexao.php");    

    if((isset($_POST['email'])) && (isset($_POST['senha']))){
        $email = mysqli_real_escape_string($connect, $_POST['email']); 
        $senha = mysqli_real_escape_string($connect, $_POST['senha']);
        $senha = md5($_POST['senha']);

        $result_usuario = "SELECT * FROM inserir_cadastro WHERE email = '$email' && senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($connect, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        

        if(isset($resultado)){
            
            $_SESSION['usuarioNome'] = $resultado['usuario'];
            $_SESSION['usuarioEmail'] = $resultado['email'];
			$_SESSION['usuarioSenha'] = $resultado['senha'];
			$_SESSION['nomeImagem']= $resultado['foto'];
           
            header("location: logado.php");


        }else{
echo "<script language='javascript' type='text/javascript'>alert('Email ou senha incorretos');window.location.href='login.php'</script>";
         /* $_SESSION['loginErro'] = "Usuário ou senha Inválidos";
            header("location: login.php");*/
        }
    }
?>
