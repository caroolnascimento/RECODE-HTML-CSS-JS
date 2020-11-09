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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>

    <div class="container-fluid">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- MENU-->
<?php
 include_once('menu.html');
 ?>

<main>
     <header>
        <h2 class="display-5">Produtos</h2>
        <hr>
    </header>
	</div>
	
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
			
<section class="produtos bg-white">
<?php
	$sql= "select * from produto";
	$result = $conexao->query($sql);
	if ($result->num_rows > 0 ){
		while($rows = $result->fetch_assoc()){
		
?>
	<div class="box_produtos bg-white" style="display: block;" id="<?php echo $rows ["categoria"]; ?>">
		<img class="imgs img-fluid" src="<?php echo $rows ["imagem"]; ?>" alt="Refrigerador Electrolux" width="120px" onclick="destaque(this)"> 
		<br>
		<div class="descricao"><?php echo $rows ["descricao"]; ?></div>
		<hr>
		<strike class="text-danger"><?php echo $rows ["precoantigo"]; ?></strike>
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