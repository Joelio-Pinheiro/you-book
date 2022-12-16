<?php
include('conexao.php');
?>
<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>You book</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="right-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">

					<!-- Logo -->
					<h1><a href="index.php">You book</a></h1>

					<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="livros.php">Livros</a></li>
							<li><a href="apostilas.php">Apostilas</a></li>
							<li><a href="#footer">Sobre</a></li>
							<li>
							<form action="pesquisa.php" method="get">
								<div class="busca">
									<div class="icone"></div>
									<div class="entrar">
										<input type="text" name="pesq" id="mbusca" placeholder="Buscar">
									</div>
									<sapn class="" id="lmpa"></sapn>
								</div>
							</form>
								<script>
									const icone = document.querySelector('.icone');
									const barra = document.querySelector('.busca');
									const lmp = document.querySelector('.lmpa');
									icone.onclick = function(){
										barra.classList.toggle('active');
									}
									lmp.onclick = function(){
										barra.classList.toggle('busca');
									}
								</script>
							</li>
						</ul>
					</nav>
				</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<?php
							$id = $_GET['id'];
						$livro = "SELECT * FROM livro WHERE id ='{$id}'";
                	$result = mysqli_query($conexao, $livro);
                	$linha = mysqli_fetch_assoc($result);
                	$total = mysqli_num_rows($result);
                	if($total > 0){
                	    do{
               	 	?>
							<div class="col-8 col-12-medium">
								<!-- Content -->
									<article class="box post">
										<div class="imgp">
												<div class="image featured">
													<img src="<?=$linha['capa']?>" id="img1"/>
												</div>
												<div id="carac">
													<h2 id="titulo"><?=$linha['nome']?></h2>
													<p><?=$linha['autor']?></p>
													<div id="des">
														<b>Páginas:</b> <?=$linha['pag']?><br>
														<!--<b>Editora:</b> Editora Pearson<br>-->
														<b>Idioma:</b> Português<br>
														<!--<b>ISBN:</b> 9788534615112<br>-->
														<a href="<?=$linha['arquivo']?>" download><input type="button" value="Baixe Agora" id="compra"></a>
													</div>
												</div>
										</div>
										<header>
											<h2 style="font-size: 35px;">Descrição</h2>
										</header>
										<p><?=$linha['descricao']?></p>
									</article>

							</div>
							<?php
                    }while($linha = mysqli_fetch_assoc($result));
                }
                ?>
							<div class="col-3 col-10-medium">

								<!-- Sidebar -->
								
								<?php
							$livro = "SELECT * FROM livro";
                		$result = mysqli_query($conexao, $livro);
                		$linha = mysqli_fetch_assoc($result);
                		$total = mysqli_num_rows($result);
						$cont = 0;
                		if($total > 0){
                	    	do{
               	 		?>
								<div class="col-4 col-6-medium col-12-small">
									<section class="box">
										<a href="#" class="image featured"><img
												src="<?=$linha['capa']?>" alt="" /></a>
										<header>
											<h3><?=$linha['nome']?></h3>
										</header>
										<footer>
											<ul class="actions">
												<li><a href="descrição.php?id=<?=$linha['id']?>" class="button alt">Ver mais</a></li>
											</ul>
										</footer>
									</section>
								</div>
								<?php
                    $cont++;
                    if($cont >= 2){
                        break;
                    }
                    }while($linha = mysqli_fetch_assoc($result));
                }
                ?>
							</div>
						</div>
					</div>
				</section>

		<!-- Footer -->
		<section id="footer">
			<div class="container">
				<div class="row">
					<div class="col-4 col-6-medium col-12-small">
						<section>
							<header>
							</header>
							<ul class="divided">
								<li><img src="images/360x600.png" alt="" style="width: 25%;"></li>
								O conhecimento é em si mesmo um poder. Não existe transformação sem aprendizado e conhecimento. O maior inimigo do conhecimento não é 
								ignorância, mas a ilusão do conhecimento. Só temos certezas enquanto sabemos pouco; com o conhecimento as dúvidas aumentam.
							</ul>
						</section>
					</div>
					<div class="col-4 col-6-medium col-12-small">
						<section>
							<header>
								<h2>Programadores</h2>
							</header>
							<ul class="divided">
								<li>Joélio</li>
								<li>Paulo Hugo</li>
								<li>Valter</li>
								<li>Miguel Arthur</li>
								<li>Joélio</li>
								<li>Paulo Hugo</li>
								<li>Valter</li>
							</ul>
						</section>
					</div>
					<div class="col-4 col-12-medium">
						<section>
							<header>
								<h2>Contatos</h2>
							</header>
							<ul class="social">
								<li><a class="icon brands fa-facebook-f" href="#"><span
											class="label">Facebook</span></a></li>
								<li><a class="icon brands fa-twitter" href="#"><span class="label">Twitter</span></a>
								</li>
								<li><a class="icon brands fa-dribbble" href="#"><span class="label">Dribbble</span></a>
								</li>
								<li><a class="icon brands fa-tumblr" href="#"><span class="label">Tumblr</span></a></li>
								<li><a class="icon brands fa-linkedin-in" href="#"><span
											class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="contact">
								<li>
									<h3>Endereço</h3>
									<p>
										E.E.E.P. Professor Francisco Aristóteles de Sousa<br />
										R. Boa Esperança - Ponto da Serra<br />
										Itaitinga - CE, 61880-000
									</p>
								</li>
								<li>
									<h3>Email</h3>
									<p><a href="#">youbook@gmail.com</a></p>
								</li>
								<li>
									<h3>Telefone</h3>
									<p>(800) 000-0000</p>
								</li>
							</ul>
						</section>
					</div>
					<!--<div class="col-12">

						
						<div id="copyright">
							<ul class="links">
								<li>&copy; Untitled. All rights reserved.</li>
								<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>

					</div>-->
				</div>
			</div>
		</section>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>