<!-- Modal -->
<div class="modal fade" id="cadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastre-se conosco!<small> É rapido.</small></h4>
      </div>
      <div id="cadModal" class="modal-body">
        <form id="cadCli">
          <div class="row">
            <div class="col-sm-6 col-xs-6">
              <label>Nome </label>
              <input class="form-control" name="nome" placeholder="Nome" type="text" required autofocus />
            </div>
            <div class="col-sm-6 col-xs-6">
              <label>Sobrenome </label>
              <input class="form-control" name="sobrenome" placeholder="Sobrenome" type="text" required />
            </div>
          </div>
          <div class="row formCadNiver">
            <div class="col-sm-6">
              <label>Aniversário </label>
              <input class="form-control" name="aniversario" placeholder="Aniversario" type="date" required />
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10 formCadEmail">
               <label>Email </label>
               <input class="form-control" name="email" placeholder="Email" type="email" required />
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-xs-6 formCadSenha">
              <label>Senha </label>
              <input class="form-control" name="senha" placeholder="Senha" type="password" required autofocus />
            </div>
            <div class="col-sm-6 col-xs-6 formCadSenha">
              <label>Confirme sua senha </label>
              <input class="form-control" name="confsenha" placeholder="Confirme" type="password" required />
            </div>
          </div>
        </form>        
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> -->
        <button type="button" id="btnCadastrar" class="btn btn-primary">Cadastrar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('#btnCadastrar').click(function(e){
    var form = $('#cadCli');
    var formData = form.serializeArray();

    formData.push({name: 'type', value: 'post'});

    $.ajax({
          url: "controls/ClienteControl.php",
          type: "post",
          data: formData,
          dateType: "json",
          success: function (response) {
          if(response.indexOf('Duplicate') > -1){
            alert('Email já cadastrado.')
          }else{
            alert(response);
          }

          },
          error: function(jqXHR, textStatus, errorThrown) {
             alert(textStatus, errorThrown);
          }
      });
  });
</script>