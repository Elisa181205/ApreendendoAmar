<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.mask.min.js"></script>
<link rel="stylesheet" href="estiloap.css"/>
</head>
<body>
<script type="text/javascript">
    $("#telefone").mask("(00) 0000-0000");
	$("#celular").mask("(00) 00000-0000");
	$("#cep") .mask("00000-000");
	
    </script>
<form action="inserir_cadastro.php" method="POST">

<div class="menu"><div class="logo"></div>
	<ul class="nav">
	<a href="index.html"><li><div class="home"></div></li></a>
	<a href="bebes.html"><li><div class="bebes"></div></li></a>
	<a href="doacoes.html"><li><div class="doacoes"></div></li></a>
	<a href="login.php"><li><div class="login"></div></li></a>
	<a href="SOBRENOS.HTML"><li><div class="sobre"></div></li></a>

	</ul>
	</div>


<div class="bebezinho">
<div class="cadastro"><div class="clas">Bem-Vindo a área de cadastro</div>
<div class="nm"><h1>Nome: <br><input type="text" name="nome"  placeholder="		Marcela" required> </div></h1> 
<form action="inserir_cadastro.php" method="POST">
		<div class="nm1"><h1><label for="cep">CEP :</label>
		<h1><input id="cep" type="text" name="cep" id="cep" placeholder="		00000-000" required/></h1></div>
		
		<div class="nm2"><h1><label for="Logradouro">Logradouro:</label></h1>
		<h1><input name="logradouro"  type="text" id="logradouro" placeholder="		Espacial" required/></h1></div>
		
		<div class="nm3"><h1><label for="Numero" >Número :</label></h1>
		<h1><input  type="text" name="numero" id="numero" placeholder="		25" required/></h1></div>
		
		<div class="nm4"><h1><label for="bairro">Bairro :</label></h1>
		<h1><input  type="text" name="bairro" id="bairro" placeholder="		Portal dos Ipês" required/></h1></div>
		
		<div class="nm5"><h1><label for="uf">Estado :</label></h1>
		<h1><select id="estado" type="text" name="estado"></h1></div>
			<h1><option value="AC">Acre</option></h1>
			<h1><option value="AL">Alagoas</option></h1>
			<h1><option value="AP">Amapá</option></h1>
			<h1><option value="AM">Amazonas</option></h1>
			<h1><option value="BA">Bahia</option></h1>
			<h1><option value="CE">Ceará</option></h1>
			<h1><option value="DF">Distrito Federal</option></h1>
			<h1><option value="ES">Espírito Santo</option></h1>
			<h1><option value="GO">Goiás</option></h1>
			<h1><option value="MA">Maranhão</option></h1>
			<h1><option value="MT">Mato Grosso</option></h1>
			<h1><option value="MS">Mato Grosso do Sul</option></h1>
			<h1><option value="MG">Minas Gerais</option></h1>
			<h1><option value="PA">Pará</option></h1>
			<h1><option value="PB">Paraíba</option></h1>
			<h1><option value="PR">Paraná</option></h1>
			<h1><option value="PE">Pernambuco</option></h1>
			<h1><option value="PI">Piauí</option></h1>
			<h1><option value="RJ">Rio de Janeiro</option></h1>
			<h1><option value="RN">Rio Grande do Norte</option></h1>
			<h1><option value="RS">Rio Grande do Sul</option></h1>
			<h1><option value="RO">Rondônia</option></h1>
			<h1><option value="RR">Roraima</option></h1>
			<h1><option value="SC">Santa Catarina</option></h1>
			<h1><option value="SP">São Paulo</option></h1>
			<h1><option value="SE">Sergipe</option></h1>
			<h1><option value="TO">Tocantins</option></h1>
		</select>
	
	<input type="hidden" name="uf" id="uf"/>
	<script type="text/javascript">
		$("#cep").focusout(function(){
			//Início do Comando AJAX
			$.ajax({
				//O campo URL diz o caminho de onde virá os dados
				//É importante concatenar o valor digitado no CEP
				url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
				//Aqui você deve preencher o tipo de dados que será lido,
				//no caso, estamos lendo JSON.
				dataType: 'json',
				//SUCESS é referente a função que será executada caso
				//ele consiga ler a fonte de dados com sucesso.
				//O parâmetro dentro da função se refere ao nome da variável
				//que você vai dar para ler esse objeto.
				success: function(resposta){
					//Agora basta definir os valores que você deseja preencher
					//automaticamente nos campos acima.
					$("#logradouro").val(resposta.logradouro);
					$("#logradouro").attr('readonly','readonly');
					$("#complemento").val(resposta.complemento);
					$("#complemento").attr('readonly','readonly');
					$("#bairro").val(resposta.bairro);
					$("#bairro").attr('readonly','readonly');
					$("#estado").val(resposta.uf);
					$("#uf").val(resposta.uf);
					$("#estado").attr('disabled',true);
					//Vamos incluir para que o Número seja focado automaticamente
					//melhorando a experiência do usuário
					$("#Numero").focus();
				}
			});
		});
	</script>
<div class="nm6 "><h1>Telefone: <br><input type="text" name="telefone" id="telefone" placeholder="		(22) 2222-2222"   /> <br></h1></div>
<div class="nm7"><h1>Celular: <br><input type="text" name="celular" id="celular" placeholder="		(99) 99999-9999" required> <br> </h1></div>
<div class="nm8"><h1>Email: <br><input type="email" name="email" placeholder="		Exemplo@gmail.com"required> <br> </h1></div>
<div class="nm9"><h1>Usuario: <br><input type="text" name="usuario" placeholder="		Xuxuzinho123" required> <br> </h1></div>
<div class="nm10"><h1>Senha: <br><input type="password" name="senha" placeholder="		********" required> <br> </h1></div>
<div class="nm11"><h1>Confirmar senha: <br><input type="password" name="con_senha" placeholder="		********" required> <br> </h1></div>

<div class="nm12"><h1><button class="enviar"> Enviar</button></div>
<input type="reset" > </input>
</form>
</div>
</div>
</body>
</html>
