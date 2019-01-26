<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">

	#logEmail2, #senha2, #EMAIL2, #cadEmail2,
	#cadSenha2, #newSenha2, #token2{

		width: 92%;
		height: 30px;

	}
</style>
</head>
<body>
	<div id="cliente2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header" style="background-color: #008B8B;">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
			<h3 id="myModalLabel" style="color: white;">Efetuar login</h3>
		</div>
		<div class="modal-body" align="left">
			<div align="center"> 	
				<p>Através da área do FLY Online você poderá acessar nossos cursos e muito mais.</p>
				<img style="width: 120px;" src="<?php echo base_url('assets/img/Login.png');?>">
			</div>
			<br />

			<!-- FORM para logar -->
			<div id="Login2" class="collapse in">
				<form action="<?php echo base_url();?>principal/Login" method="post">
					<div class="container-fluid" align="left">
						<small style="color: red; margin-left: 1%;"><?php echo $msg; ?></small>
					</div>
					<div align="center">
						<input type="email" class="form-control" id="logEmail2" name="email" aria-describedby="emailHelp" placeholder="Email" required="">
						<input type="password" class="form-control" id="senha2" name="senha" placeholder="Senha" required="">
					</div>

					<a href="#" onclick="hideLogin2()"><small style="color: #1E90FF;" id="esqueci">Esqueci minha senha</small></a>

					<div align="right" class="container-fluid">
						<button type="submit" class="btn btn-success" aria-hidden="true" id="logar2">Entrar</button>
					</div>
				</form>
			</div>
			<!-- Fim -->

			<!-- FORM PARA SOLICITAÇÃO DE TOKEN -->
			<div align="right" id="minhaSenha2" class="collapse">
				<form action="<?php echo base_url();?>principal/recSenha" method="post">
					<h5 align="left">Solicitar token</h5>
					<div align="center">
						<input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Seu email" id="EMAIL2" name="EMAIL">
						<input type="hidden" name="token" id="myToken2">
					</div>
					<div align="left">
						<a href="#" onclick="returnLogin2()"><small style="color: #1E90FF;">Retornar ao login</small></a>
					</div>
					<div class="container-fluid">
						<button type="submit" class="btn btn-success" onclick="return Logar2()">Enviar token</button>
					</div>
				</form>
				<!-- FIM -->

				<!-- FORM PARA REDEFINIÇÃO DE SENHA -->
				<h5 align="left">Redefinir senha</h5>
				<form action="<?php echo base_url();?>principal/mudarSenha" method="post" id="lostSenha2">
					<div align="center">
						<input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Seu email" id="cadEmail2" name="cadEmail">
						<input type="password" class="form-control" id="cadSenha2" name="cadSenha" placeholder="Nova senha">
						<input type="password" class="form-control" id="newSenha2" name="senha" placeholder="Confirmar senha">
						<input type="password" class="form-control" id="token2" name="token" placeholder="Insira seu token">
					</div>
					<br />
					<div class="container-fluid">
						<button type="submit" class="btn btn-success" onclick="return redefinirSenha2()" value="redefine">Redefinir senha</button>
					</div>
				</form>
			</div>
			<!-- FIM -->
		</div>
	</div>

	<script type="text/javascript">
		
		function callModal(){

			$("#cliente2").modal();

		}

		setTimeout('callModal()', 200);


		function hideLogin2(){

			$('#Login2').collapse('hide');
			$('#minhaSenha2').collapse('show');
		}


		function returnLogin2(){

			$('#Login2').collapse('show');
			$('#minhaSenha2').collapse('hide');
		}


		function Logar2(){

			var email = $('#EMAIL2').val();

			if(email == ""){

				swal(
					'Ops...',
					'Por favor insira um email válido',
					'error'
					)
				return false;

			}

			var codigo = Math.floor((Math.random() * 1000000) + 1);

			$('#myToken2').val(codigo);
			
		}


		function redefinirSenha2(){

			var senha1 = $('#cadSenha2').val();
			var senha2 = $('#newSenha2').val();

			var form = document.forms.lostSenha2;

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
</body>
</html>