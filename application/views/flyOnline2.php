<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>FLY Online</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sweetalert2.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/aulas.css');?>">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/sweetalert2.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/aulas.js');?>"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #2F4F4F;">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#" style="color: white; font-family: oblique; font-size: 200%;">FLY Online</a>
			</div>
			<div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="#" style="color: white;" onclick="showCoord()"><span class="glyphicon glyphicon-list-alt" id="S1"></span> Curso - módulo da coordenação</a></li>
						<li><a href="#" style="color: white;" onclick="showProf()"><span class="glyphicon glyphicon-book" id="S2"></span> Curso - módulo dos professores</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#" style="color: white;" data-toggle="modal" data-target="#senhaModal"><span class="glyphicon glyphicon-cog"></span> Alterar senha</a></li>
						<li><a href="#" style="color: #FFD700;"><span class="glyphicon glyphicon-user"></span> <?php echo $nome->nome;?></a></li>
						<li><a href="<?php echo base_url();?>principal/Logout" style="color: white;"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<!-- CURSO DA COORDENAÇÃO -->

	<div class="collapse in" id="coordenacao">
		<div class="container" align="center">
			<h3 align="center" id="title">Aula 1 - Apresentação do sistema</h3>
			<div class="pagination">
				<a href="#"><button class="button" value="1" id="1" onclick="Aula(this)"><span class="glyphicon glyphicon-chevron-left"></span></button></a>
				<a href="#"><button class="button" value="1" id="1" onclick="Aula(this)">1</button></a>
				<a href="#"><button class="button" value="2" id="2" onclick="Aula(this)">2</button></a>
				<a href="#"><button class="button" value="3" id="3" onclick="Aula(this)">3</button></a>
				<a href="#"><button class="button" value="4" id="4" onclick="Aula(this)">4</button></a>
				<a href="#"><button class="button" value="5" id="5" onclick="Aula(this)">5</button></a>
				<a href="#"><button class="button" value="6" id="6" onclick="Aula(this)">6</button></a>
				<a href="#"><button class="button" value="7" id="7" onclick="Aula(this)">7</button></a>
				<a href="#"><button class="button" value="7" id="7" onclick="Aula(this)"><span class="glyphicon glyphicon-chevron-right"></span></button></a>
			</div>

			<div class="aula">
				<div class="video" align="center">
					<video width="900" height="480" id="AULAS" controls="" preload="none" poster="<?php echo base_url('assets/aulas/coordenacao/coord.jpg');?>">
						<source src="<?php echo base_url('assets/aulas/coordenacao/1.mp4');?>" type="video/mp4" />
						</video>
						<br />
						<button class="btn btn-primary" id="play" onclick="playVideo(this)"><span id="icon" class="glyphicon glyphicon-play"></span></button>
						<button class="btn btn-success" onclick="reload()"><span class="glyphicon glyphicon-repeat"></span></button>
						<br />
						<br />
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- CURSO DOS PROFESSORES -->

	<div class="collapse" id="professor">
		<div class="container" align="center">
			<h3 align="center" id="title2">Aula 1 - Apresentação do sistema</h3>
			<div class="pagination">
				<a href="#"><button class="button" value="pf1" id="pf1" onclick="Aula2(this)"><span class="glyphicon glyphicon-chevron-left"></span></button></a>
				<a href="#"><button class="button" value="pf1" id="pf1" onclick="Aula2(this)">1</button></a>
				<a href="#"><button class="button" value="pf2" id="pf2" onclick="Aula2(this)">2</button></a>
				<a href="#"><button class="button" value="pf3" id="pf3" onclick="Aula2(this)">3</button></a>
				<a href="#"><button class="button" value="pf4" id="pf4" onclick="Aula2(this)">4</button></a>
				<a href="#"><button class="button" value="pf4" id="pf4" onclick="Aula2(this)"><span class="glyphicon glyphicon-chevron-right"></span></button></a>
			</div>

			<div class="aula2">
				<div class="video" align="center">
					<video width="900" height="480" id="AULAS2" controls="" preload="none" poster="<?php echo base_url('assets/aulas/professor/prof.jpg');?>">
						<source src="<?php echo base_url('assets/aulas/professor/pf1.mp4');?>" type="video/mp4" />
						</video>
						<br />
						<button class="btn btn-primary" id="play2" onclick="playVideo2(this)"><span id="icon2" class="glyphicon glyphicon-play"></span></button>
						<button class="btn btn-success" onclick="reload2()"><span class="glyphicon glyphicon-repeat"></span></button>
						<br />
						<br />
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<!-- MODAL PARA REDEFINRI SENHA -->

	<div class="modal fade" id="senhaModal" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Redefinir minha senha</h4>
				</div>
				<div class="modal-body">
					<h4>Insira seu endereço email</h4>
					<!-- <br /> -->
					<div class="form-group" align="right">
						<form action="" method="">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="text" name="email" id="changeEmail" placeholder="Email" class="form-control input-lg">
								<input type="hidden" name="token" id="token">
							</div>
							<br />
							<button type="button" class="btn btn-primary" onclick="sendToken()">Enviar token</button>
						</form>
					</div>
					<hr />
					<h4>Insira seu token</h4>
					<div class="form-group" align="right">
						<form action="" method="" id="senhaForm">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="text" name="cadEmail" id="sEmail" placeholder="Email" class="form-control input-lg" required="">
							</div>

							<br />

							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="password" name="cadSenha" id="senha" placeholder="Senha" class="form-control input-lg" required="">
							</div>

							<br />

							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
								<input type="password" name="senha" id="senha2" placeholder="Confirme a senha" class="form-control input-lg" required="">
							</div>

							<br />

							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-text-width"></i></span>
								<input type="password" name="token" id="sToken" placeholder="Insira seu token" class="form-control input-lg" required="">
							</div>
							<br />
						</form>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" onclick="redefineSenha()">Redefinir</button>
				</div>
			</div>
		</div>
	</div>

	<!-- FIM DO MODAL -->


	<script type="text/javascript">

		function sendToken(){

			var email = $('#changeEmail').val();

			if(email != ""){

				var codigo = Math.floor((Math.random() * 1000000) + 1);
				$('#token').val(codigo);

				var token = $('#token').val();

				$.ajax({

					type: 'post',
					url: '<?php echo base_url();?>principal/recSenhaOnline',
					data: 'email='+email + '&token='+token,
					cache: false,
					success: function(resultado){

						swal({
							title: "Atenção",
							text: resultado
						});
					}
				});

			} else{

				swal(
					'Ops...',
					'Preencha o campo com seu endereço de email',
					'error'
					)

				return false;
			}
		}


		function redefineSenha(){

			var senha1 = $('#senha').val();
			var senha2 = $('#senha2').val();

			var form = document.forms.senhaForm;

			try{

				for(var i = 0; i<form.length; i++){

					if(form.elements[i].value == "") throw "Nenhum campo pode ficar vázio!!";

				}

				if(senha2 != senha1) throw "As senhas não coincidem!!";
				else if(senha1.length <6) throw "Sua senha deve ter pelo menos 6 carácteres!!";
				else{

					var email = $('#sEmail').val();
					var token = $('#sToken').val();

					$.ajax({

						type: 'post',
						url: '<?php echo base_url();?>principal/mudarSenhaOnline',
						data: 'token='+token + '&cadSenha='+senha1 + '&cadEmail='+email,
						cache: false,
						success: function(resultado){

							swal({
								title: "Atenção",
								text: resultado
							});
						}
					});
				}

			} catch(erro){

				swal(
					'Ops...',
					erro,
					'error'
					)

				return false;

			}
		}

		var video = document.getElementById('AULAS');

		if(video.paused == true){

			swal({
				title: "Clique no botão play e aguarde... seu vídeo começará em breve",
				text: "Tenha uma boa aula :)"
			});
		}


		function Aula(objButton){

			var video = document.getElementById('AULAS');

			aula = (objButton.value);

			myVideo = video.canPlayType("video/mp4");
			if (myVideo == "") {
				video.src = aula+".ogg";

			} else {

				var path = "<?php echo base_url();?>assets/aulas/coordenacao/";

				video.src = path + aula+".mp4";
				if(aula == 1){

					$( "#title" ).html("Aula 1 - Apresentação do sistema");
					document.getElementById('play').className="btn btn-primary";
					document.getElementById('icon').className="glyphicon glyphicon-play";
					swal({
						title: "Clique no botão play e aguarde... seu vídeo começará em breve",
						text: "Tenha uma boa aula :)"
					});
				} 
				else if(aula == 2){

					$('#title').html("Aula 2 - Cadastrando professores e alunos");
					document.getElementById('play').className="btn btn-primary";
					document.getElementById('icon').className="glyphicon glyphicon-play";
					swal({
						title: "Clique no botão play e aguarde... seu vídeo começará em breve",
						text: "Tenha uma boa aula :)"
					});	
				}
				else if(aula == 3){

					$('#title').html("Aula 3 - Gerenciando turmas");
					document.getElementById('play').className="btn btn-primary";
					document.getElementById('icon').className="glyphicon glyphicon-play";
					swal({
						title: "Clique no botão play e aguarde... seu vídeo começará em breve",
						text: "Tenha uma boa aula :)"
					});
				} 
				else if(aula == 4){

					$('#title').html("Aula 4 - Avisos e mensagens");
					document.getElementById('play').className="btn btn-primary";
					document.getElementById('icon').className="glyphicon glyphicon-play";
					swal({
						title: "Clique no botão play e aguarde... seu vídeo começará em breve",
						text: "Tenha uma boa aula :)"
					});
				} 
				else if(aula == 5){

					$('#title').html("Aula 5 - Criando horários");
					document.getElementById('play').className="btn btn-primary";
					document.getElementById('icon').className="glyphicon glyphicon-play";
					swal({
						title: "Clique no botão play e aguarde... seu vídeo começará em breve",
						text: "Tenha uma boa aula :)"
					});
				} 
				else if(aula == 6){

					$('#title').html("Aula 6 - Cadastrando novos usuários");
					document.getElementById('play').className="btn btn-primary";
					document.getElementById('icon').className="glyphicon glyphicon-play";
					swal({
						title: "Clique no botão play e aguarde... seu vídeo começará em breve",
						text: "Tenha uma boa aula :)"
					});
				} 
				else if(aula == 7){

					$('#title').html("Aula 7 - Criando histórico e transferindo alunos");
					document.getElementById('play').className="btn btn-primary";
					document.getElementById('icon').className="glyphicon glyphicon-play";
					swal({
						title: "Clique no botão play e aguarde... seu vídeo começará em breve",
						text: "Tenha uma boa aula :)"
					});
				} 

			}
			video.load();
		}


		function Aula2(objButton){

			var video = document.getElementById('AULAS2');

			aula = (objButton.value);

			myVideo = video.canPlayType("video/mp4");
			if (myVideo == "") {
				video.src = aula+".ogg";

			} else {

				var path = "<?php echo base_url();?>assets/aulas/professor/";

				video.src = path + aula+".mp4";
				if(aula == "pf1"){

					$( "#title2" ).html("Aula 1 - Apresentação do sistema");
					document.getElementById('play2').className="btn btn-primary";
					document.getElementById('icon2').className="glyphicon glyphicon-play";
					swal({
						title: "Clique no botão play e aguarde... seu vídeo começará em breve",
						text: "Tenha uma boa aula :)"
					});
				} 
				else if(aula == "pf2"){

					$('#title2').html("Aula 2 - Lançando notas e controlando a frequência");
					document.getElementById('play2').className="btn btn-primary";
					document.getElementById('icon2').className="glyphicon glyphicon-play";
					swal({
						title: "Clique no botão play e aguarde... seu vídeo começará em breve",
						text: "Tenha uma boa aula :)"
					});	
				}
				else if(aula == "pf3"){

					$('#title2').html("Aula 3 - Mensagens, avisos e horários");
					document.getElementById('play2').className="btn btn-primary";
					document.getElementById('icon2').className="glyphicon glyphicon-play";
					swal({
						title: "Clique no botão play e aguarde... seu vídeo começará em breve",
						text: "Tenha uma boa aula :)"
					});
				} 
				else if(aula == "pf4"){

					$('#title2').html("Aula 4 - Enviando arquivos e alterando a senha");
					document.getElementById('play2').className="btn btn-primary";
					document.getElementById('icon2').className="glyphicon glyphicon-play";
					swal({
						title: "Clique no botão play e aguarde... seu vídeo começará em breve",
						text: "Tenha uma boa aula :)"
					});
				} 
			}
			video.load();
		}
	</script>
</body>
</html>