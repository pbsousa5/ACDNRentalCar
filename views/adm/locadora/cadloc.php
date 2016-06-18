<form id="cadLoc">
  <fieldset class="form-group">
    <label for="NomeLocadora">Unidade(Nome):</label>
    <input type="text" class="form-control" id="locNome" placeholder="Nome Fantasia da Locadora" name="nome" required>
  </fieldset>
  <fieldset class="form-group">
    <label for="Endereco">Endereço</label>
    <input type="text" class="form-control" id="locEnd" placeholder="Endereço" name="endereco" required>
    <small class="text-muted">Ex: Rua/Av Paulista, Numero 36, Bairro: Pinheiros.</small>
  </fieldset>
  <fieldset class="form-group">
    <label for="Telefone">Telefone</label>
    <input type="number" class="form-control" id="locTel" placeholder="Telefone" name="telefone" required>
    <small class="text-muted">Ex: (11) 12345 6789</small>
  </fieldset>
  <fieldset class="form-group">
    <label for="Telefone">Email</label>
    <input type="email" class="form-control" id="locEmail" placeholder="Email" name="email" required>
    <small class="text-muted">Ex: meunome@mail.com</small>
  </fieldset>
  <div id="areaBtns">
    <button type="submit" id="btnCadastrar" class="btn btn-primary">Cadastrar</button>    
  </div>
</form>

<script type="text/javascript">
    $('#btnCadastrar').click(function(e){
        e.preventDefault();
        var form = $('#cadLoc');
        var formData = form.serializeArray();

        formData.push({name: 'type', value: 'post'});

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
    /*Necessario "matar o evento de click, para que no proximo load, multiplos eventos nao sejam disparados"*/
    $(this).die('click'); 
  });

</script>