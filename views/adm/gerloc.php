<table id="gridLoc" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
        	<th>Id</th>
            <th>Unidade</th>
            <th>Opcões</th>
        </tr>
    </thead>
    <tbody id="dadosLoc">

    </tbody>
</table>

<script type="text/javascript">

data = [];
data.push({name: 'type', value: 'get'});

$.ajax({
	url: "controls/Locadora.php",
	type: "post",
	data: data,
	dateType: "json",
	success: function (response) {  
	var locadoras = JSON.parse(response);
	for(var i = 0; i < locadoras.length ; i++){
		var id = '<td>'+locadoras[i].loc_id+'</td>';
		var nome = '<td>'+locadoras[i].nome+'</td>';
		var btnAlterar = '<td id="opcoes"><button value="'+locadoras[i].loc_id+'" data-toggle="tooltip" title="Alterar Locadora" class="btn btn-warning btnAlterar"><i class="glyphicon glyphicon-pencil"></i></button>';
		var btnDeletar = '<button value="'+locadoras[i].loc_id+'" data-toggle="tooltip" title="Deletar Locadora" class="btn btn-danger btnDeletar"><i class="glyphicon glyphicon-remove"></i></button></td>';

		$('#dadosLoc').append('<tr>'+id+nome+btnAlterar+btnDeletar+'</tr>');

	}
	$('#gridLoc').DataTable();
	},
	error: function(jqXHR, textStatus, errorThrown) {
	 alert(textStatus, errorThrown);
	}
});

 /*Por conter HTML gerado dinamicamente, evento eh declarado desta forma*/
$(document.body).on("click", ".btnDeletar", function(e){
	if (confirm("Voce deseja apagar este registro?") == true) {
		var id = $(this).val();
		data = [];
		data.push({name: 'loc_id',value: id});
		data.push({name: 'type', value: 'delete'});
		$.ajax({
			url: "controls/Locadora.php",
			type: "post",
			data: data,
			dateType: "json",
			success: function (response) {  
			alert(response);
	        $('#painelLoc').click();  
			},
			error: function(jqXHR, textStatus, errorThrown) {
			 alert(textStatus, errorThrown);
			}
		 });
	}
	//Necessario "matar o evento de click, para que no proximo load, multiplos eventos nao sejam disparados"
	$(this).die('click'); 
});

$(document.body).on("click", ".btnAlterar", function(e){
	var id = $(this).val();
	data = [];
	data.push({name: 'loc_id',value: id});
	data.push({name: 'type', value: 'getLocadora'});
	$.ajax({
		url: "controls/Locadora.php",
		type: "post",
		data: data,
		dateType: "json",
		success: function (response) {  
		var locadora = JSON.parse(response);
		$('#locNome').val(locadora[0].nome);
		$('#locEnd').val(locadora[0].endereco);
		$('#locTel').val(locadora[0].telefone);
		$('#locEmail').val(locadora[0].email)

		$('#btnCadastrar').remove();
		$('#areaBtns').html('');
		$('#areaBtns').append('<button type="submit" id="btnUpdate" value="'+locadora[0].loc_id+'"class="btn btn-warning">Alterar</button>');
		},
		error: function(jqXHR, textStatus, errorThrown) {
		 alert(textStatus, errorThrown);
		}
	 });
	//Necessario "matar o evento de click, para que no proximo load, multiplos eventos nao sejam disparados"
	$(this).die('click'); 
});

$(document.body).on("click", "#btnUpdate", function(e){
	e.preventDefault();
    var form = $('#cadLoc');
    var formData = form.serializeArray();

    var id = $(this).val();
    formData.push({name: 'loc_id',value: id});
    formData.push({name: 'type', value: 'put'});

	$.ajax({
		url: "controls/Locadora.php",
		type: "post",
		data: formData,
		dateType: "json",
		success: function (response) {  
		 alert(response);
        $('#painelLoc').click(); 
		},
		error: function(jqXHR, textStatus, errorThrown) {
		 alert(textStatus, errorThrown);
		}
	 });
	//Necessario "matar o evento de click, para que no proximo load, multiplos eventos nao sejam disparados"
	$(this).die('click'); 
});


</script>