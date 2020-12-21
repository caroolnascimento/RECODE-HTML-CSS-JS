<?php

    $server="localhost";
    $username="root";
    $password="";
    $database="fullstackeletro";


    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn){
        die ("Falha na conexão com o BD " . mysqli_connect_errno());
    }

    if(isset($_POST['nome'])&& isset($_POST['msg'])){

        $nome=$_POST['nome'];
		$mensagem=$_POST['msg'];
		
		echo $nome.$mensagem;

        $sql="insert into cometarios (nome,msg) values('$nome','$mensagem')";
        $result=$conn->query($sql);
    }
    

    ?>
	



<!DOCTYPE html>
<html lang="pt-br">

<Head>
	<meta charset="utf-8"/>
	<title> Full Stack Eletro - Fale Conosco</title>
	<link rel="stylesheet" href="estilo.css">	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>

    <div class="container-fluid">


<body>

<!-- MENU-->
<?php
 include_once('menu.html');
 ?>
 
<main>

<h2 class="display-5">Contatos</h2>
<hr>


<div class="container">
			<div class="email row">
				<div class="zap col text-center">
					<img class="logo" src="../imagens/email.png" alt="Email">
					<p>contato@fullstackeletro.com</p>
				</div>
				<div class="whatsapp col text-center">
					<img class="logo" src="../imagens/whatsapp.png" alt="Whatsapp">
					<p>(11) 99999-9999</p>
				</div>
			</div>
		</div>

<!--INICIO DO FORMULARIO-->
<div class="container">
<form method="post" action="">
<div class="form-group mx-5 texte-center">
	<h4>Nome:</h4>
	<input name="nome" class="nome" type="text">
	<h4>Mensagem: </h4>
	<textarea name="msg" class="textoarea"></textarea> <br>
	<input class="enviar bg-success mt-3 btn-lg" type="submit" value="Enviar">
</div>
</form>
</div>
   
		<div class="container">



<!--FIM DO FORMULARIO-->


<br><br><br><br><br>

<hr>
</main>

<!-- RODAPÉ-->
</footer>
    <div class="container">  
        <footer id="rodape">
            <h4 class="text-danger">
            Formas de Pagamento
            </h4>
            <img src="../imagens/formasdepagamento.png" alt="Formas de pagamento">
            <p>&copy; Recode Pro</p>
        </footer>
    </div>
</body>
</html>