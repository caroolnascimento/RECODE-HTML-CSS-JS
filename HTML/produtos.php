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
</Head>

<body>

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