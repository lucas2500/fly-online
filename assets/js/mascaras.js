$(document).ready(function (){

	var telefone = $('#telEmpresa');
	telefone.mask('(00) 0000-0000', {reverse: false});

	var celular = $('#celular1');
	celular.mask('(00) 00000-0000', {reverse: false});

	var celular2 = $('#celular2');
	celular2.mask('(00) 00000-0000', {reverse: false});

	var dtContrato = $('#dtContrato');
	dtContrato.mask('00/00/0000', {reverse: false});

	var dtPGMT = $('#dtPGMT');
	dtPGMT.mask('00/00/0000', {reverse: false});

	var valor = $('#valor');
	valor.mask('000.000.000.000.000.000.000.000,00', {reverse: true});

	var dtCompra = $('#dtCompra');
	dtCompra.mask('00/00/0000', {reverse: false});

	var dtLancamento = $('#dtLancamento');
	dtLancamento.mask('00/00/0000', {reverse: false});

	var valorCompra = $('#valorCompra');
	valorCompra.mask('000.000.000.000.000.000.000.000,00', {reverse: true});

	var valorMensal = $('#totalMensal');
	valorMensal.mask('000.000.000.000.000.000.000.000,00', {reverse: true});
});
