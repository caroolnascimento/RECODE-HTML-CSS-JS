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
	<link rel="stylesheet" href="../css/estilo.css">	
	<!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</Head>

<body>

<!-- MENU-->
<?php
 include_once('menu.html');
 ?>
 
<main>

	<h2>Fale Conosco</h2>
	<hr>


<section class="borda">
	<div class="b">
		<img class="logo" src="../imagens/email.png">
		<p>contato@eletrofullstack.com</p>
	</div>

	<div class="b">
		<img class="logo" src="../imagens/whatsapp.png">
		<p>(11) 99999-9999</p>
	</div>
</section>


<!--INICIO DO FORMULARIO-->
<form method="post" action="">
	<h4>Nome:</h4>
	<input name="nome" class="nome" type="text">
	<h4>Mensagem: </h4>
	<textarea name="msg" class="textoarea"></textarea> <br>
	<input type="submit" value="Enviar">
</form>


<!--FIM DO FORMULARIO-->


<br><br><br><br><br>

<hr>
</main>

<footer id="rodape">
	<h4 id="formas_pagamento"> Formas de Pagamento</h4>		
	<img src="../imagens/formasdepagamento.png"alt="Formas de Pagamento">
	<p>&copy; Recode Pro</p>
</footer>

</body>
</html>