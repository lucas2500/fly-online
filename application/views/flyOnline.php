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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/sweetalert2.js');?>"></script>

	<style type="text/css">

	td{

		background-color: #E6E6FA;
		font-family: arial black;
		font-size: 100%;
	}

	body{

		margin-top: 80px;
	}
</style>
</head>
<body>
	<div class="container-fluid">
		<div class="container">
			<div class="container-fluid">
				<h3 style="color: #3CB371"><?php echo $msg;?></h3>
			</div>
			<div class="collapse in" id="listVisit">
				<h3 class="text-center">Visitantes cadastrados</h3>
				<div class="input-group">
					<input type="text" name="" class="form-control" placeholder="BUSCAR VISITANTE" id="searchVisitante">
					<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
				</div>
				<br />
				<table class="table table-bordered" id="visitantes">
					<thead>
						<th>Nome</th>
						<th>Empresa</th>
						<th>Excluir</th>
					</thead>	
					<tbody id="visitantes2">
						<?php 
						foreach($cliente as $CLIENTE){
							if($CLIENTE->permissao == "visit"){
								echo "<tr>";
								echo "<td style='text-transform: uppercase;'>".$CLIENTE->nome."</td>";
								echo "<td style='text-transform: uppercase;'>".$CLIENTE->empresa."</td>";
								echo "<td><button class='btn btn-danger' id='codigo' name='codigo' onclick='return deleteCliente(this)' value='".$CLIENTE->ID."'><span class='glyphicon glyphicon-remove'></span></button>";
								echo "</tr>";	
							}
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="container">
			<div class="collapse" id="listEmails">
				<h3 class="text-center">Emails capturados</h3>
				<div class="input-group">
					<input type="text" name="" class="form-control" placeholder="BUSCAR EMAIL" id="searchEmail">
					<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
				</div>
				<br />
				<table class="table table-bordered" id="email">
					<thead>
						<th>Email</th>
						<th>Detalhes</th>
					</thead>
					<tbody id="email2">
						<?php 
						foreach($email as $EMAIL){
							echo "<tr>";
							echo "<td>".$EMAIL->email."</td>";
							echo "<td><button class ='btn btn-primary' id='clienteID' name='clienteID' onclick='return getDetails(this)' value='".$EMAIL->ID."'><span class='glyphicon glyphicon-eye-open'></span></button></td>";
							echo "</tr>";
						}
						?>
					</tbody>
				</table>
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
					<h4>Insira seu endereço de email</h4>
					<div class="form-group text-right">
						<form action="" method="">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="text" name="email" id="changeEmail" placeholder="EMAIL" class="form-control">
								<input type="hidden" name="token" id="token">
							</div>
							<br />
							<button type="button" class="btn btn-primary" onclick="sendToken()">Enviar token</button>
						</form>
					</div>
					<hr />
					<h4>Insira seu token</h4>
					<form action="" method="" id="senhaForm">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							<input type="text" name="cadEmail" id="sEmail" placeholder="EMAIL" class="form-control" required="">
						</div>

						<br />

						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" name="cadSenha" id="senha" placeholder="SENHA" class="form-control" required="">
						</div>

						<br />

						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
							<input type="password" name="senha" id="senha2" placeholder="CONFIRME A SENHA" class="form-control" required="">
						</div>

						<br />

						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-text-width"></i></span>
							<input type="password" name="token" id="sToken" placeholder="INSIRA SEU TOKEN" class="form-control" required="">
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" onclick="redefineSenha()">Redefinir</button>
				</div>
			</div>
		</div>
	</div>

	<!-- FIM DO MODAL -->

	<!-- MODAL PARA CADASTRAR USUÁRIOS -->

	<div class="modal fade" id="cadUser" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Cadastrar novo usuário</h4>
				</div>
				<div class="modal-body">
					<form action="" method="" id="cadUsuario">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="nome" type="text" class="form-control" name="nome" placeholder="NOME">
						</div>
						<br />
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							<input name="cadEmail" id="cadEmail" type="text" class="form-control" placeholder="EMAIL">
						</div>
						<br />
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<input name="empresa" id="empresa" type="text" class="form-control" placeholder="EMPRESA">
						</div>
						<br />
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
							<select class="form-control" name="permissao" id="permissao">
								<option value="">SELECIONAR PERMISSÃO</option>
								<option value="visit">VISITANTE</option>
								<option value="adm">ADMINISTRADOR</option>
							</select>
						</div>
						<input type="hidden" name="cadSenha" id="cadSenha" value="123456" readonly="">
						<br />
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" name="botao" id="botao" class="btn btn-success" onclick="cadUser()">Cadastrar</button>
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


		function cadUser(){

			var nome = $('#nome').val();
			var email = $('#cadEmail').val();
			var empresa = $('#empresa').val();
			var permissao = $('#permissao').val();
			var senha = $('#cadSenha').val();

			var usuario = document.forms.cadUsuario;

			for(var i = 0; i<usuario.length; i++){

				if(usuario.elements[i].value == ""){

					swal(
						'Ops...',
						'Nenhum campo pode ficar vázio!!',
						'error'
						)
					return false;
				}
			}

			$.ajax({

				type: 'post',
				url: '<?php echo base_url();?>principal/cadUser',
				data: 'nome='+nome + '&cadEmail='+email + '&empresa='+empresa + '&permissao='+permissao + '&cadSenha='+senha,
				cache: false,
				success: function(resultado){

					swal({
						title: "Aviso",
						text: resultado
					});
				}
			});

			$('#nome').val("");
			$('#cadEmail').val("");
			$('#empresa').val("");
			$('#permissao').val("");
		}


		function deleteCliente(objButton){

			swal({
				title: 'Gostaria mesmo de excluir este usuário?',
				text: "Você perderá todos os dados sobre ele",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Sim, desejo excluí-lo',
				cancelButtonText: 'Cancelar'
			}).then((result) => {
				if (result.value) {
					swal(
						'Usuário excluido!',
						'O usuário foi excluido com sucesso!!.',
						'success'
						)

					var id = (objButton.value);

					$.ajax({
						type:'post',
						url: '<?php echo base_url();?>principal/deleteCliente',
						data: 'codigo='+id,
						cache: false
					});

					setTimeout('location.reload();', 1200);
				}
			})
		}

		function getDetails(objButton){

			var id = (objButton.value);

			$.ajax({
				type: 'post',
				url: '<?php echo base_url();?>principal/getClienteDetail',
				data: 'clienteID='+id,
				cache: false,
				success: function(resultado){

					swal({
						title: "Detalhes da captura",
						html: resultado,
						width: '700px'
					});
				}
			});
		}
	</script>
</body>
</html>