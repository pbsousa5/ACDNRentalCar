<table id="gridViewCar" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
        	<th>Id</th>
            <th>Chassi</th>
            <th>Placa</th>
            <th>Modelo</th>
            <th>Cor</th>
            <th>Marca</th>
            <th>Ano</th>
        </tr>
    </thead>
    <tbody id="dadosCar">

    </tbody>
</table>

<script type="text/javascript">

data = [];
data.push({name: 'type', value: 'getCarro'});

$.ajax({
	url: "controls/CarroControl.php",
	type: "post",
	data: data,
	dateType: "json",
	success: function (response) {  
	var carros = JSON.parse(response);
	for(var i = 0; i < carros.length ; i++){
		var id = '<td>'+carros[i].car_id+'</td>';
		var chassi = '<td>'+carros[i].chassi+'</td>';
		var placa = '<td>'+carros[i].placa+'</td>';
		var modelo = '<td>'+carros[i].modelo+'</td>';
		var cor = '<td>'+carros[i].cor+'</td>';
		var marca = '<td>'+carros[i].marca+'</td>';
		var ano = '<td>'+carros[i].ano+'</td>';

		$('#dadosCar').append('<tr>'+id+chassi+placa+modelo+cor+marca+ano+'</tr>');

	}
	$('#gridViewCar').DataTable();
	},
	error: function(jqXHR, textStatus, errorThrown) {
	 alert(textStatus, errorThrown);
	}
});

</script>