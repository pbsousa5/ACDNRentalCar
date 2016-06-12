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

	},
	error: function(jqXHR, textStatus, errorThrown) {
	 alert(textStatus, errorThrown);
	}
});
</script>