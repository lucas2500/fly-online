<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>FLY Softwares</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Desenvolvemos soluções customizadas totalmente adequadas as necessidades do seu negócio">
	<link href="<?php echo base_url('assets/css/bootstrap-responsive.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/color/default.css');?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sweetalert2.css');?>">
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/flyIco.ico');?>">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111573705-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-111573705-1');
	</script>


	<style type="text/css">

	.modal{

		width: 70%;
		margin-left: -35%; 
	}

	#logEmail, #senha, #EMAIL, #cadEmail, 
	#cadSenha, #newSenha, #token{

		width: 92%;
		height: 30px;

	}

	@media(max-width: 768px){

		.modal{

			width: 80%;
			margin-left: 5.5%; 
		}
	}

</style>
</head>

<body>
	<!-- navbar -->
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</a>
					<h1 class="brand" style="font-family: times;"><a href="<?php echo base_url();?>principal/index">Grupo Fly</a></h1>
					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
							<li><a title="team" href="#about">A empresa</a></li>
							<li><a title="services" href="#services">Nossos serviços</a></li>
							<li><a href="#" data-toggle="modal" data-target="#GL">Galeria</a></li>
							<li><a title="contact" href="#contact">Contato</a></li>
							<li><a href="#" data-toggle="modal" data-target="#cliente">FLY Online</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Header area -->
	<div id="header-wrapper" class="header-slider">
		<header class="clearfix">
			<div class="logo">
				<img src="<?php echo base_url('assets/img/fly.png');?>" style="width: 430px;" alt="" />
			</div>
		</header>
	</div>
	<!-- spacer section -->
	<section class="spacer green">
		<div class="container">
			<div class="row">
				<div class="span6 alignright flyLeft">
					<blockquote class="large">
						A tecnologia move o mundo <cite>Steve Jobs</cite>
					</blockquote>
				</div>
				<div class="span6 aligncenter flyRight">
					<i class="icon-coffee icon-10x"></i>
				</div>
			</div>
		</div>
	</section>
	<!-- end spacer section -->
	<!-- section: team -->
	<section id="about" class="section">
		<div class="container">
			<h4>Quem somos nós?</h4>
			<div class="row">
				<div class="span4 offset1">
					<div>
						<h2>Respiramos <strong>tecnologia</strong></h2>
						<p>
							Acreditamos que a melhor forma de alcançar nossos objetivos é usando
							a tecnologia como aliada, com isso em mente, desenvolvemos soluções
							customizadas para empresas de diversos tamanhos. Para nós, atender
							as demandas do pequeno empreendedor rural é tão importante quanto atender
							as do grande empresário da capital.
						</p>
					</div>
				</div>
				<div class="span6">
					<div class="aligncenter">
						<img src="<?php echo base_url('assets/img/icons/creativity.png');?>" alt="" />
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</section>
	
	<section id="services" class="section orange">
		<div class="container">
			<h4>Serviços</h4>
			<!-- Four columns -->
			<div class="row">
				<div class="span3 animated-fast flyIn">
					<div class="service-box">
						<img src="<?php echo base_url('assets/img/icons/laptop.png');?>" alt="" />
						<h2>Desenvolvimento de sistemas</h2>
						<p>
							Utilizando as principais tecnologias do mercado, desenvolvemos soluções customizáveis
							para diversos tipos de negócios.
						</p>
					</div>
				</div>
				<div class="span3 animated flyIn">
					<div class="service-box">
						<img src="<?php echo base_url('assets/img/icons/html.png');?>" style="width: 200px; height: 160px;" alt="" />
						<h2>Desenvolvimento de sites</h2>
						<p>
							Utilizando as principais tecnologias do mercado, construímos belos sites voltados
							para todas as áreas e tipos de negócios.
						</p>
					</div>
				</div>
				<div class="span3 animated-fast flyIn">
					<div class="service-box">
						<img src="<?php echo base_url('assets/img/icons/student.png');?>" style="width: 160px; height: 160px;" alt="" />
						<h2>Escola Inteligente</h2>
						<p>
							Nosso sistema acadêmico Escola Inteligente oferece aos usuários mais conforto e facilidade
							na hora de excecutar as tarefas corriqueiras do ano letivo.
						</p>
						<br />
						<button class="btn btn-info" data-toggle="modal" data-target="#ES">Saiba mais</button>
					</div>
				</div>
				<div class="span3 animated-slow flyIn">
					<div class="service-box">
						<img src="<?php echo base_url('assets/img/icons/bakery.png');?>" style="width: 160px; height: 160px;" alt="" />
						<h2>Gestor de recursos</h2>
						<p>
							Com foco em padarias, nosso Gestor de Recursos permite aos usuários terem total controle da sua linha de produção, bem como do financeiro.
						</p>
						<br />
						<button class="btn btn-info" data-toggle="modal" data-target="#GR">Saiba mais</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end section: services -->
	
	<!-- spacer section -->
	<section class="spacer bg3">
		<div class="container">
			<div class="row">
				<div class="span12 aligncenter flyLeft">
					<blockquote class="large">
						Com uma equipe de funcionários qualificada, informatizar o seu negócio é o nosso principal objetivo
					</blockquote>
				</div>
				<div class="span12 aligncenter flyRight">
					<i class="icon-rocket icon-10x"></i>
				</div>
			</div>
		</div>
	</section>
	<!-- end spacer section -->
	
	<!-- section: contact -->
	<section id="contact" class="section green">
		<div class="container">
			<h4>Contate-nos</h4>
			<div class="blankdivider30">
			</div>
			<div class="row">
				<div class="span12">
					<div class="cform" id="contact-form">
						<form action="" id="contatoForm" method="" role="form" class="contactForm">
							<div class="row">
								<div class="span6">
									<div class="field your-name form-group">
										<input type="text" name="nome" class="form-control" id="nome" placeholder="Seu nome" required="" />
									</div>
									<div class="field your-email form-group">
										<input type="text" class="form-control" name="email" id="email" placeholder="Seu email" required="" />
									</div>
									<div class="field your-email form-group">
										<input type="text" class="form-control" name="telefone" id="telefone" placeholder="Seu telefone" required="" />
									</div>
									<div class="field subject form-group">
										<input type="text" class="form-control" name="assunto" id="assunto" placeholder="Assunto" required="" />
									</div>
								</div>
								<div class="span6">
									<div class="field message form-group">
										<textarea class="form-control" name="MSG" id="MSG" rows="5" placeholder="Mensagem" required=""></textarea>
										<input type="button" name="botao" id="botao" value="Enviar" class="btn btn-theme pull-left" onclick="return validateForm()">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ./span12 -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					<ul class="social-networks">
						<li><a target="_blank" href="https://www.instagram.com/flysoftwares/"><i class="icon-circled icon-bgdark icon-instagram icon-2x"></i></a></li>
						<li><a target="_blank" href="https://www.facebook.com/fly.softwares"><i class="icon-circled icon-bgdark icon-facebook icon-2x"></i></a></li>
					</ul>
					<p class="copyright">
						&copy; FLY SOFTWARES - 2018. TODOS OS DIREITOS RESERVADOS.
						<div class="credits">
						</div>
					</p>
				</div>
			</div>
		</div>
		<!-- ./container -->
	</footer>

	<!-- MODAL ÁREA DO CLIENTE -->

	<div id="cliente" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header" style="background-color: #008B8B;">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
			<h3 id="myModalLabel" style="color: white;">Efetuar login</h3>
		</div>
		<div class="modal-body" align="left">
			<div align="center"> 	
				<p>Através do FLY Online você poderá acessar nossos cursos e muito mais, solicite já seu acesso.</p>
				<img style="width: 120px;" src="<?php echo base_url('assets/img/Login.png');?>">
			</div>
			<br />

			<!-- FORM para logar -->
			<div id="Login" class="collapse in">
				<form action="<?php echo base_url();?>principal/Login" method="post">
					<div align="center">
						<input type="email" class="form-control" id="logEmail" name="email" aria-describedby="emailHelp" placeholder="Email" required="">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="">
					</div>

					<a href="#" onclick="hideLogin()"><small style="color: #1E90FF;" id="esqueci">Esqueci minha senha</small></a>

					<div align="right" class="container-fluid">
						<button type="submit" class="btn btn-success" aria-hidden="true" id="logar">Entrar</button>
					</div>
				</form>
			</div>
			<!-- Fim -->

			<!-- FORM PARA SOLICITAÇÃO DE TOKEN -->
			<div id="minhaSenha" class="collapse" align="right">
				<form action="<?php echo base_url();?>principal/recSenha" method="post">
					<h5 align="left">Solicitar token</h5>
					<div align="center">
						<input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Seu email" id="EMAIL" name="EMAIL">
						<input type="hidden" name="token" id="myToken">
					</div>
					<div align="left">
						<a href="#" onclick="returnLogin()"><small style="color: #1E90FF;">Retornar ao login</small></a>
					</div>
					<div class="container-fluid">
						<button type="submit" onclick="return Logar()" class="btn btn-success">Enviar token</button>
					</div>
				</form>
				<!-- FIM -->

				<!-- FORM PARA REDEFINIÇÃO DE SENHA -->
				<h5 align="left">Redefinir senha</h5>
				<form action="<?php echo base_url();?>principal/mudarSenha" method="post" id="lostSenha">
					<div align="center">
						<input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Seu email" id="cadEmail" name="cadEmail">
						<input type="password" class="form-control" id="cadSenha" name="cadSenha" placeholder="Nova senha">
						<input type="password" class="form-control" id="newSenha" name="senha" placeholder="Confirmar senha">
						<input type="password" class="form-control" id="token" name="token" placeholder="Insira seu token">
					</div>
					<br />
					<!-- <br /> -->
					<div class="container-fluid">
						<button type="submit" class="btn btn-success" onclick="return redefinirSenha()" value="redefine">Redefinir senha</button>
					</div>
				</form>
			</div>
			<!-- FIM -->
		</div>
	</div>

	<!-- FIM DO MODAL -->

	<script type="text/javascript">

		function hideLogin(){

			$('#Login').collapse('hide');
			$('#minhaSenha').collapse('show');
		}

		function returnLogin(){

			$('#Login').collapse('show');
			$('#minhaSenha').collapse('hide');
		}


		function Logar(){

			var email = $('#EMAIL').val();

			if(email == ""){

				swal(
					'Ops...',
					'Por favor insira um email válido!!',
					'error'
					)
				return false;

			}

			var codigo = Math.floor((Math.random() * 1000000) + 1);

			$('#myToken').val(codigo);
			
		}

		function validateForm(){

			var contato = document.forms['contatoForm'];

			for(var i=0; i<contato.length; i++){

				if(contato.elements[i].value == ""){

					swal(
						'Ops...',
						'Nenhum campo pode ficar vázio!!',
						'error'
						)

					return false;

				}

			}

			var nome = $('#nome').val();
			var email = $('#email').val();
			var tel = $('#telefone').val();
			var ass = $('#assunto').val();
			var msg = $('#MSG').val();

			var dados = "nome="+nome + "&email="+email + "&telefone="+tel + "&assunto="+ass + "&MSG="+msg;

			$.ajax({

				type:'post',
				url: '<?php echo base_url();?>principal/sendEmail',
				data: dados,
				cache: false,
			});

			swal({
				title:'Enviado com sucesso!!',
				type: 'success',
				confirmButtonText: 'Fechar',
			});

			$('#nome').val("");
			$('#email').val("");
			$('#telefone').val("");
			$('#assunto').val("");
			$('#MSG').val("");
		}


		function redefinirSenha(){

			var senha1 = $('#cadSenha').val();
			var senha2 = $('#newSenha').val();

			var form = document.forms.lostSenha;

			for(var i = 0; i<form.length; i++){

				if(form.elements[i].value == ""){

					swal(
						'Ops...',
						'Nenhum campo pode ficar vázio!!',
						'error'
						)
					return false;
					
				}
			}

			if(senha2 != senha1){

				swal(
					'Ops...',
					'As senhas não coincidem!!',
					'error'
					)
				return false;
			}

			if(senha1.length <6){

				swal(
					'Ops...',
					'Sua senha deve conter pelo menos 6 carácteres!!',
					'error'
					)
				return false;

			}
		}
	</script>
	<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
	<script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.scrollTo.js');?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.nav.js');?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.localScroll.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js');?>"></script>
	<script src="<?php echo base_url('assets/js/isotope.js');?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.flexslider.js');?>"></script>
	<script src="<?php echo base_url('assets/js/inview.js');?>"></script>
	<script src="<?php echo base_url('assets/js/animate.js');?>"></script>
	<script src="<?php echo base_url('assets/js/custom.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/sweetalert2.js');?>"></script>
</body>
</html>
