<!DOCTYPE html>
<html lang="pt-br">

<Head>
	<meta charset="utf-8"/>
	<title> Full Stack Eletro -  Nossas Lojas </title>	
	<link rel="stylesheet" href="../css/estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>

    <div class="container-fluid">

<!-- MENU-->
<?php
 include_once('menu.html');
 ?>

 <main>

<hgroup>
	<h2>Nossas Lojas</h2>
	<hr>
</hgroup>

<!--INICIO DOS ENDEREÇOS-->
 <nav>
	 <section>
	 <div class="enderecos">
			 <h3>São Paulo</h3>
			 <p>Avenida Queixadas, 7</p>
			 <p>10 &ordm;andar</p>
			 <p>Itaim Paulista</p>
			 <p>(11) 5555-5555</p>
	 </div>
	 <div class="enderecos">
			<h3>São Paulo</h3>
			<p>Rua São Dário, 257</p>
			<p>11 &ordm;andar</p>
			<p>Butantã</p>
			<p>(11) 0000-0000</p>
	 </div>
	 <div class="enderecos">		
			<h3>Rio de Janeiro</h3>
			<p>Avenida Nossa Senhora de Copacabana, 897</p>
			<p>9 &ordm;andar</p>
			<p>Copacabana</p>
			<p>(21) 3333-3333</p>
	</section>
	</div>
	 
</nav>
 <!--FIM DOS ENDEREÇOS-->
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