<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Entrar <small>- Acesso</small></h4>
      </div>
      <div class="modal-body">
        <form id="formAccessCli" method='post' action="controls/ClienteControl.php">
          <div class="row">
            <div class="col-sm-12">
              <label>Email </label>
              <input class="form-control" name="email" placeholder="Email" type="email" required autofocus />
            </div>
          </div>
          <div class="row formCadNiver">
            <div class="col-sm-12">
              <label>Senha </label>
              <input class="form-control" name="senha" placeholder="Senha" type="password" required />
            </div>
          </div>
          <input type="hidden" name="type" value="acessoCliente"> 
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> -->
            <button  id="acessoCli" type="submit" class="btn btn-success">Entrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

