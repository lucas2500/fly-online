$(document).ready(function() {
	$('#tableContratos').DataTable( {
		"searching": false,
		"ordering": false,
		"language": {
			"lengthMenu": "Exibindo _MENU_",
			"zeroRecords": "Nenhum registro encontrado",
			"info": "Exibindo página _PAGE_ de _PAGES_",
			"infoEmpty": "Nenhum registro disponível",
			"oPaginate": {
				"sNext": "Próximo",
				"sPrevious": "Anterior",
				"sFirst": "Primeiro",
				"sLast": "Último"
			}
		}

	} );
} );

$(document).ready(function(){
	$("#searchContratos").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#tableContratos2 tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
});



$(document).ready(function() {
	$('#tablePagamentos').DataTable( {
		"searching": false,
		"ordering": false,
		"language": {
			"lengthMenu": "Exibindo _MENU_",
			"zeroRecords": "Nenhum registro encontrado",
			"info": "Exibindo página _PAGE_ de _PAGES_",
			"infoEmpty": "Nenhum registro disponível",
			"oPaginate": {
				"sNext": "Próximo",
				"sPrevious": "Anterior",
				"sFirst": "Primeiro",
				"sLast": "Último"
			}
		}

	} );
} );


$(document).ready(function(){
	$("#searchRecebimento").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#tablePagamentos2 tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
});


$(document).ready(function() {
	$('#visitantes').DataTable( {
		"searching": false,
		"ordering": false,
		"language": {
			"lengthMenu": "Exibindo _MENU_",
			"zeroRecords": "Nenhum registro encontrado",
			"info": "Exibindo página _PAGE_ de _PAGES_",
			"infoEmpty": "Nenhum registro disponível",
			"oPaginate": {
				"sNext": "Próximo",
				"sPrevious": "Anterior",
				"sFirst": "Primeiro",
				"sLast": "Último"
			}
		}

	} );
} );

$(document).ready(function(){
	$("#searchVisitante").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#visitantes2 tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
});


$(document).ready(function() {
	$('#email').DataTable( {
		"searching": false,
		"ordering": false,
		"language": {
			"lengthMenu": "Exibindo _MENU_",
			"zeroRecords": "Nenhum registro encontrado",
			"info": "Exibindo página _PAGE_ de _PAGES_",
			"infoEmpty": "Nenhum registro disponível",
			"oPaginate": {
				"sNext": "Próximo",
				"sPrevious": "Anterior",
				"sFirst": "Primeiro",
				"sLast": "Último"
			}
		}

	} );
} );


$(document).ready(function(){
	$("#searchEmail").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#email tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
});


$(document).ready(function() {
	$('#tabelaCompras').DataTable( {
		"searching": false,
		"ordering": false,
		"language": {
			"lengthMenu": "Exibindo _MENU_",
			"zeroRecords": "Nenhum registro encontrado",
			"info": "Exibindo página _PAGE_ de _PAGES_",
			"infoEmpty": "Nenhum registro disponível",
			"oPaginate": {
				"sNext": "Próximo",
				"sPrevious": "Anterior",
				"sFirst": "Primeiro",
				"sLast": "Último"
			}
		}

	} );
} );


$(document).ready(function(){
	$("#searchCompra").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#tabelaCompras2 tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
});


$(document).ready(function() {
	$('#rendimentoMensal').DataTable( {
		"searching": false,
		"ordering": false,
		"language": {
			"lengthMenu": "Exibindo _MENU_",
			"zeroRecords": "Nenhum registro encontrado",
			"info": "Exibindo página _PAGE_ de _PAGES_",
			"infoEmpty": "Nenhum registro disponível",
			"oPaginate": {
				"sNext": "Próximo",
				"sPrevious": "Anterior",
				"sFirst": "Primeiro",
				"sLast": "Último"
			}
		}

	} );
} );


$(document).ready(function(){
	$("#searchRendimento").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#rendimentoMensal2 tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
});


function showEmails(){

	$('#listEmails').collapse('show');
	$('#listVisit').collapse('hide');

}

function hideEmails(){

	$('#listEmails').collapse('hide');
	$('#listVisit').collapse('show');
}



