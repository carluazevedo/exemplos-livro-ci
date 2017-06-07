<!DOCTYPE html>

<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Exercício de exemplo do capítulo 5 do livro CodeIgniter">
		<meta name="author" content="Jonathan Lamim Antunes">
		<title>Site Institucional</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/home.css') ?>" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="site-wrapper">
			<div class="site-wrapper-inner">
				<div class="cover-container">
					<div class="masthead clearfix">
						<div class="inner">
							<h1 class="masthead-brand">LCI</h1>
							<nav>
								<ul class="nav masthead-nav">
									<li class="active"><a href="#">Home</a></li>
									<li><a href="#">A Empresa</a></li>
									<li><a href="#">Serviços</a></li>
									<li><a href="#">Trabalhe Conosco</a></li>
									<li><a href="#">Fale Conosco</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="inner cover">
						<h1 class="cover-heading">Ensinando através da prática</h1>
						<p class="lead">Até aqui você aprendeu como criar um <i>controller</i>, uma <i>view</i>
						e a usar a função <i>base_url</i> do helper <i>url</i> utilizando o livo
						"CodeIgniter: Produtividade na criação de aplicações web e PHP".</p>
					</div>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>