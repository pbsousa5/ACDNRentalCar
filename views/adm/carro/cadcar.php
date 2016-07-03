<form id="cadCar">
  <fieldset class="form-group">
    <label for="placa">Placa:</label>
    <input type="text" class="form-control" id="carPlaca" placeholder="Placa do carro" name="placa" required>
  </fieldset>
  <fieldset class="form-group">
    <label for="chassi">Chassi:</label>
    <input type="text" class="form-control" id="carChassi" placeholder="Número do Chassi" name="chassi" required>
    <small class="text-muted">Ex: JT2JA82J1SXXXXXXX</small>
  </fieldset>
  <fieldset class="form-group">
    <label for="modelo">Modelo:</label>
    <input type="text" class="form-control" id="carModelo" placeholder="Modelo do carro" name="modelo" required>
  </fieldset>
  <fieldset class="form-group">
    <label for="marca">Marca:</label>
    <input type="text" class="form-control" id="carMarca" placeholder="Marca do carro" name="marca" required>
  </fieldset>
  <fieldset class="form-group">
    <label for="ano">Ano:</label>
    <input type="number" class="form-control" id="carAno" placeholder="Ano do carro" name="ano" required>
  </fieldset>
  <fieldset class="form-group">
    <label for="cor">Cor:</label>
    <input type="text" class="form-control" id="carCor" placeholder="Cor do carro" name="cor" required>
  </fieldset>
  <div id="areaBtns">
    <button type="submit" id="btnCadastrarCarro" class="btn btn-primary">Cadastrar</button>    
  </div>
</form>

<script type="text/javascript">
    $('#btnCadastrarCarro').click(function(e){
        e.preventDefault();
        var form = $('#cadCar');
        var formData = form.serializeArray();

        formData.push({name: 'type', value: 'postCarro'});

        $.ajax({
              url: "controls/CarroControl.php",
              type: "post",
              data: formData,
              dateType: "json",
              success: function (response) {
                alert(response); 
                $('#painelCar').click();       
              },
              error: function(jqXHR, textStatus, errorThrown) {
                 alert(textStatus, errorThrown);
              }
          });
    /*Necessario "matar o evento de click, para que no proximo load, multiplos eventos nao sejam disparados"*/
    $(this).die('click'); 
  });

</script>