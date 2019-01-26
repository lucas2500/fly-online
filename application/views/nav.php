<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sweetalert2.css');?>">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/sweetalert2.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.mask.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/mascaras.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/tabelas.js');?>"></script>

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
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;">Financeiro <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#" data-toggle="modal" data-target="#financaTable">Tabela de finanças</a></li>
								<li><a href="#" data-toggle="modal" data-target="#rendimentoM">Rendimento mensal</a></li>
								<li><a href="#" data-toggle="modal" data-target="#contratos">Visualizar contratos</a></li>
								<li><a href="#" data-toggle="modal" data-target="#insertRecebimento">Lançar recebimento</a></li>
								<li><a href="#" data-toggle="modal" data-target="#insertPagamento">Lançar despesas</a></li>
								<li><a href="#" data-toggle="modal" data-target="#insertContrato">Novo contrato</a></li>
							</ul>
						</li>
						<li><a href="#" style="color: white;" onclick="hideEmails()"><span class="glyphicon glyphicon-list-alt" id="S1"></span> Exibir visitantes</a></li>
						<li><a href="#" style="color: white;" onclick="showEmails()"><span class="glyphicon glyphicon-envelope" id="S2"></span> Exibir emails capturados</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li><a href="#" style="color: white;" data-toggle="modal" data-target="#cadUser"><span class="glyphicon glyphicon-plus"></span> Cadastrar usuário</a></li>
						<li><a href="#" style="color: white;" data-toggle="modal" data-target="#senhaModal"><span class="glyphicon glyphicon-cog"></span> Alterar senha</a></li>
						<li><a href="#" style="color: #FFD700;"><span class="glyphicon glyphicon-user"></span> <?php echo $nome->nome;?></a></li>
						<li><a href="<?php echo base_url();?>principal/Logout" style="color: white;"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<!-- MODAL DE CRIAÇÃO DE CONTRATOS -->
	<div id="insertContrato" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Novo contrato</h4>
				</div>
				<form action="<?php echo base_url();?>financeiro/lancarContrato" method="post" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<input type="text" name="empresa" id="Nempresa" class="form-control" placeholder="NOME DO CONTRATANTE" required="">
						</div>
						<br />
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							<input type="email" name="emailEmpresa" id="emailEmpresa" class="form-control" placeholder="EMAIL DO CONTRATANTE" required="">
						</div>
						<br />
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
							<input type="text" name="telEmpresa" id="telEmpresa" class="form-control" placeholder="TELEFONE DO CONTRATANTE (OPCIONAL)">
						</div>
						<br />
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
							<input type="text" name="celular1" id="celular1" class="form-control" placeholder="(DD) + 9 (OBRIGATÓRIO)" required="">
						</div>
						<br />
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
							<input type="text" name="celular2" id="celular2" class="form-control" placeholder="(DD) + 9 (OBRIGATÓRIO)" required="">
						</div>
						<br />
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							<input type="text" name="nomeContrato" id="nomeContrato" class="form-control" placeholder="NOME DO CONTRATO" required="">
						</div>
						<br />
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							<input type="text" name="dtContrato" id="dtContrato" class="form-control" placeholder="DATA DA ASSINATURA DO CONTRATO" required="">
						</div>
						<br />
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							<input type="text" name="dtVencimento" id="dtVencimento" class="form-control" placeholder="DATA DE VENCIMENTO DO PAGAMENTO MENSAL (ESCREVA POR EXTENSO)" required="">
						</div>
						<br />
						<small>Cópia do contrato assinado</small>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
							<input type="file" name="comprovante" id="comprovante" class="form-control" placeholder="Comprovante do contrato" required="" accept=".pdf, .png, ,jpg">
						</div>
						<small>Formatos suportados: pdf, png, jpg</small>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>Lançar contrato</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- FIM DO MODAL -->


	<!-- MODAL COM OS CONTRATOS -->
	<div id="contratos" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Banco de contratos</h4>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="input-group">
							<input type="text" name="" class="form-control" placeholder="BUSCAR CONTRATO" id="searchContratos">
							<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
						</div>
						<br />
						<table class="table table-bordered" id="tableContratos">
							<thead>
								<th><span class='glyphicon glyphicon-pencil'></span></th>
								<th><span class='glyphicon glyphicon-cloud'></span></th>
								<th><span class='glyphicon glyphicon-zoom-in'></span></th>
								<th><span class='glyphicon glyphicon-off'></span></th>
							</thead>
							<tbody id="tableContratos2">
								<?php 
								foreach($contrato as $CONTRATO){
									echo "<tr>";
									echo "<td>".$CONTRATO->empresa."</td>";
									echo "<td><a href='/financeiro/baixarContrato/".$CONTRATO->ID."'<button class='btn btn-primary'><span class='glyphicon glyphicon-download-alt'></span></button></a></td>";
									echo "<td><button class='btn btn-info' name='ID' id='ID' value='".$CONTRATO->ID."' onclick='contratoDetalhe(this)'><span class='glyphicon glyphicon-eye-open'></span></td></button>";
									echo "<td><a href='/financeiro/deleteContrato/".$CONTRATO->ID."' <button class='btn btn-danger' onclick='return encerrarContrato()'>X</button></a></td>";
									echo "</tr>";	
								}
								?>	
							</tbody>
						</table>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- FIM DO MODAL -->


	<!-- MODAL PARA LANÇAR PAGAMENTOS -->
	<div id="insertRecebimento" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Lançar recebimento</h4>
				</div>
				<form action="<?php echo base_url();?>financeiro/lancarPagamento" method="post" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<select class="form-control" required="" id="nEmpresa" name="nEmpresa">
								<option value="">SELECIONAR EMPRESA</option>
								<?php 
								foreach($contrato as $CONT){
									echo "<option value='".$CONT->empresa."''>".$CONT->empresa."</option>";	
								}	
								?>
							</select>
						</div>
						<br />
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
							<select class="form-control" required="" id="nContrato" name="nContrato">
								<option value="">SELECIONAR CONTRATO</option>
								<?php 
								foreach($contrato as $CONT2){
									echo "<option value='".$CONT2->nomeContrato."'>".$CONT2->nomeContrato."</option>";
								}
								?>
							</select>
						</div>
						<br />
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>	
							<input type="text" class="form-control" name="dtPGMT" id="dtPGMT" placeholder="DATA DO RECEBIMENTO" required="">
						</div>
						<br />
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>	
							<input type="text" class="form-control" name="valor" id="valor" placeholder="TOTAL R$" required="">
						</div>
						<br />
						<small>Recibo do recebimento</small>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>	
							<input type="file" class="form-control" name="recibo" id="recibo" required="" accept=".pdf, .png, .png">
						</div>
						<small>Formatos suportados: pdf, jpg, png</small>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- FIM DO MODAL -->

	<!-- MODAL PARA INSERIR COMPRAS REALIZADAS PELA EMPRESA -->
	<div id="insertPagamento" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Lançar despesas</h4>
				</div>
				<form action="<?php echo base_url();?>financeiro/lancarConta" method="post" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<input type="text" name="estabelecimento" id="estabelecimento" class="form-control"  placeholder="ESTABELECIMENTO/EMPRESA" required="" >
						</div>
						<br />
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							<input type="text" name="dtCompra" class="form-control" id="dtCompra" placeholder="DATA DA COMPRA/PAGAMENTO" required="">
						</div>
						<br />
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>	
							<input type="text" class="form-control" name="valorCompra" id="valorCompra" placeholder="TOTAL R$" required="">
						</div>
						<br />
						<small>Recibo da compra</small>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>	
							<input type="file" class="form-control" name="reciboCompra" id="reciboCompra" required="" accept=".pdf, .png, .png">
						</div>
						<small>Formatos suportados: pdf, jpg, png</small>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- FIM DO MODAL -->



	<!-- MODAL PARA LANÇAR O RENDIMENTO MENSAL -->
	<div id="rendimentoM" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Lançar rendimento mensal</h4>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url();?>financeiro/lancarRendimento" method="post">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							<input type="text" name="dtLancamento" id="dtLancamento" class="form-control" placeholder="DATA/MÊS DO LANÇAMENTO" required="">
						</div>
						<br/>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
							<input type="text" name="totalMensal" id="totalMensal" class="form-control" placeholder="TOTAL EM CAIXA R$" required="">
						</div>
						<br />
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
							<select class="form-control" name="statusMensal" required="">
								<option value="">SELECIONAR STATUS MENSAL</option>
								<option value="POSITIVO">POSITIVO</option>
								<option value="NEGATIVO">NEGATIVO</option>
							</select>
						</div>
						<br />
						<div class="text-right">
							<button type="submit" class="btn btn-success">Enviar</button>
						</div>
					</form>
					<hr />
					<h4 class="text-left">Tabela de rendimento mensal</h4>
					<div class="container-fluid">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
							<input type="text" name="" id="searchRendimento" placeholder="BUSCAR REGISTRO" class="form-control">
						</div>
						<br />
						<table class="table table-bordered" id="rendimentoMensal">
							<thead>
								<tr>
									<th>Data/mês</th>
									<th>Em caixa</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody id="rendimentoMensal2">
								<?php 
								foreach($rend as $RD){
									echo "<tr>";
									echo "<td>".$RD->dtLancamento."</td>";
									echo "<td>R$ ".$RD->totalMensal."</td>";
									echo "<td>".$RD->statusMensal."</td>";
									echo "</tr>";	
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- FIM DO MODAL -->


	<!-- MODAL COM A TABELA DE FINANÇAS -->
	<div class="modal fade" id="financaTable">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Recebimentos lançados</h4>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="input-group">
							<input type="text" name="" class="form-control" placeholder="BUSCAR RECEBIMENTO" id="searchRecebimento">
							<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
						</div>
						<br />
						<table class="table table-bordered" id="tablePagamentos">
							<thead>
								<tr>
									<th><span class='glyphicon glyphicon-pencil'></span></th>
									<th><span class='glyphicon glyphicon-calendar'></span></th>
									<th><span class='glyphicon glyphicon-zoom-in'></span></th>
									<th><span class='glyphicon glyphicon-cloud'></span></th>
								</tr>
							</thead>
							<tbody id="tablePagamentos2">
								<?php 
								foreach($pagamento as $PAGAMENTO){
									echo "<tr>";
									echo "<td>".$PAGAMENTO->nContrato."</td>";
									echo "<td>".$PAGAMENTO->dtPGMT."</td>";
									echo "<td><button class='btn btn-info' name='ID' id='IDpgmt' value='".$PAGAMENTO->ID."' onclick='pagamentoDetalhe(this)'><span class='glyphicon glyphicon-eye-open'></span></button></td>";
									echo "<td><a href = '/financeiro/baixarRecibo/".$PAGAMENTO->ID."' <button class='btn btn-primary'><span class='glyphicon glyphicon-download-alt'></span></button></a></td>";
									echo "</tr>";
								}
								?>		
							</tbody>	
						</table>
						<hr />
						<h4>Despesas lançadas</h4>
						<div class="input-group">
							<input type="text" name="" class="form-control" placeholder="BUSCAR DESPESA" id="searchCompra">
							<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
						</div>
						<br />
						<table class="table table-bordered" id="tabelaCompras">
							<thead>
								<tr>
									<th><span class='glyphicon glyphicon-home'></span></th>
									<th><span class='glyphicon glyphicon-calendar'></span></th>
									<th><span class='glyphicon glyphicon-usd'></span></th>
									<th><span class='glyphicon glyphicon-cloud'></span></th>
								</tr>
							</thead>
							<tbody id="tabelaCompras2">
								<?php 
								foreach($compras as $CT){
									echo "<tr>";
									echo "<td style='text-transform: uppercase;'>".$CT->estabelecimento."</td>";
									echo "<td>".$CT->dtCompra."</td>";
									echo "<td>R$ ".$CT->valorCompra."</td>";
									echo "<td><a href='/financeiro/reciboCompra/".$CT->ID."' <button class='btn btn-primary'><span class='glyphicon glyphicon-download-alt'></span></button></a></td>";	
									echo "</tr>";
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- FIM DO MODAL -->



	<script type="text/javascript">

		function contratoDetalhe(objButton){

			var ID = (objButton.value);

			$.ajax({
				type: 'post',
				url: '<?php echo base_url();?>financeiro/consultContrato',
				data: 'ID='+ID,
				cache: false,
				success: function(resultado){

					swal({
						title: 'Detalhes do contrato',
						width: '850px',
						html: resultado
					});
				}
			});
		}


		function pagamentoDetalhe(objButton){

			var ID = (objButton.value);

			$.ajax({
				type: 'post',
				url: '<?php echo base_url();?>financeiro/consultPagamento',
				data: 'ID='+ID,
				cache: false,
				success: function(resultado){

					swal({
						title: 'Detalhes do pagamento',
						width: '850px',
						html: resultado
					});
				}	
			});
		}

		function encerrarContrato(){

			var r = confirm("Deseja mesmo encerrar este contrato?");

			if(r){

				return r;

			} else{

				return false;
			}
		}
	</script>
</body>
</html>