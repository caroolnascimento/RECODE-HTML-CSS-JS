<?php
    $servidor = "localhost";
    $usuario = "root";  
    $senha = "";
    $bancodados= "fullstackeletro";

	$conexao = mysqli_connect ($servidor, $usuario, $senha, $bancodados);
	
	
?>


<!DOCTYPE html>
<html lang="pt-br">

<Head>
	<meta charset="utf-8"/>
	<title> Full Stack Eletro - Produtos </title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<script src="../JavaScript/funcoes.js"></script>
	<!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</Head>

<body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- MENU-->
<?php
 include_once('menu.html');
 ?>

<main>
	<header>
		<h1>Produtos</h1>
	</header>

	<div class="categorias">
		<h3>Categorias</h3>
		<ul>
				<li onclick="exibir_todos()">Todos (12)</li>
				<li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
				<li onclick="exibir_categoria('fogao')">Fogões (2)</li>
				<li onclick="exibir_categoria('microondas')">Microondas (3)</li>
				<li onclick="exibir_categoria('lavadoraderoupas')">Lavadora de roupas(2)</li>
				<li onclick="exibir_categoria('lavaloucas')">Lava Louças (2)</li>
		</ul>
	</div>
<!-- INICIO PRODUTOS-->

<main>
			
<section class="produtos">
<?php
	$sql= "select * from produto";
	$result = $conexao->query($sql);
	if ($result->num_rows > 0 ){
		while($rows = $result->fetch_assoc()){
		
?>
	<div class="box_produtos" style="display: block;" id="<?php echo $rows ["categoria"]; ?>">
		<img class="imgs" src="<?php echo $rows ["imagem"]; ?>" alt="Refrigerador Electrolux" width="120px" onclick="destaque(this)"> 
		<br>
		<div class="descricao"><?php echo $rows ["descricao"]; ?></div>
		<hr>
		<div class="strike"><?php echo $rows ["precoantigo"]; ?></div>
		<div class="preco"><?php echo $rows ["precofinal"]; ?></div>
	</div>
<?php
		}
	}else{
		echo"NENHUM PRODUTO CADASTRADO!"; 
	}
?>
	
</section>
</main>

	<!--FIM DOS PRODUTOS-->
	
	<footer id="rodape">
		<h4 id="formas_pagamento"> Formas de Pagamento</h4>		
		<img src="../imagens/formasdepagamento.png"alt="Formas de Pagamento">
		<div>&copy; Recode Pro</p>
	</footer>

</body>
</html>