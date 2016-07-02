<table id="gridViewLoc" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
        	<th>Id</th>
            <th>Unidade(Nome)</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Endereço</th>
        </tr>
    </thead>
    <tbody id="dadosLoc">

    </tbody>
</table>

<script type="text/javascript">

data = [];
data.push({name: 'type', value: 'get'});

$.ajax({
	url: "controls/LocadoraControl.php",
	type: "post",
	data: data,
	dateType: "json",
	success: function (response) {  
	var locadoras = JSON.parse(response);
	for(var i = 0; i < locadoras.length ; i++){
		var id = '<td>'+locadoras[i].loc_id+'</td>';
		var nome = '<td>'+locadoras[i].nome+'</td>';
		var email = '<td>'+locadoras[i].email+'</td>';
		var telefone = '<td>'+locadoras[i].telefone+'</td>';
		var endereco = '<td>'+locadoras[i].endereco+'</td>';
		

		$('#dadosLoc').append('<tr>'+id+nome+email+telefone+endereco+'</tr>');

	}
	$('#gridViewLoc').DataTable();
	},
	error: function(jqXHR, textStatus, errorThrown) {
	 alert(textStatus, errorThrown);
	}
});

</script>