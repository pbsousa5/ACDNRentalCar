<table id="gridCli" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
        	<th>Id</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Habilitação</th>
            <th>Aniversário</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Endereço</th>
        </tr>
    </thead>
    <tbody id="dadosCli">

    </tbody>
</table>

<script type="text/javascript">

data = [];
data.push({name: 'type', value: 'getCliente'});

$.ajax({
	url: "controls/ClienteControl.php",
	type: "post",
	data: data,
	dateType: "json",
	success: function (response) {
	var clientes = JSON.parse(response);
	for(var i = 0; i < clientes.length ; i++){
		var id = '<td>'+clientes[i].cli_id+'</td>';
		var nome = '<td>'+clientes[i].nome+'</td>';
		var sobrenome = '<td>'+clientes[i].sobrenome+'</td>';
		var habilitacao = '<td>'+clientes[i].habilitacao+'</td>';
		var aniversario = '<td>'+clientes[i].aniversario+'</td>';
		var email = '<td>'+clientes[i].email+'</td>';
		var telefone = '<td>'+clientes[i].telefone+'</td>';
		var endereco = '<td>'+clientes[i].endereco+'</td>';
		

		$('#dadosCli').append('<tr>'+id+nome+sobrenome+habilitacao+aniversario+email+telefone+endereco+'</tr>');

	}
	$('#gridCli').DataTable();
	},
	error: function(jqXHR, textStatus, errorThrown) {
	 alert(textStatus, errorThrown);
	}
});

</script>