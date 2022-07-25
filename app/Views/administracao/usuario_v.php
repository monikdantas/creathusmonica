<?php 
  $this->extend('layouts/adm_layout.php');
  $this->section('conteudo');
   //echo $msg;
   
   ?>
	<script>
		$( "#msg" ).click(function() {
  		$( "#msg" ).hide( "fast");
		});
	</script>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">USUÁRIOS</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <!-- Botão para acionar modal -->     
      <button type="button" class="btn btn-bg btn-outline-secondary" data-toggle="modal" data-target="#modalSalvar0">
        Novo Usuário
        <span data-feather="plus-square" class="align-text-bottom"></span>
      </button>      
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead class="thead-dark text-center">
        <tr class="table-dark">
          <th scope="col" width="5%">ID</th>
          <th scope="col" width="30%">Nome</th>
          <th scope="col" width="30%">CPF</th>
          <th scope="col" width="30%">E-mail</th>
          <th scope="col" colspan="3" width="10%">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $usuario = $usuarios; 
          for($i=0; $i <= sizeof($usuario); $i++){
            if (!isset ($usuario[$i]['id_usuario'])){
            }else{
        ?>
              <tr class="align-middle text-center">
                <td><?php echo $usuario[$i]['id_usuario'] ?></td>
                <td><?php echo $usuario[$i]['nome'] ?></td>
                <td><?php echo $usuario[$i]['cpf'] ?></td>
                <td><?php echo $usuario[$i]['email'] ?></td>
                <td>
                  <button type="button" title="Visualizar" data-toggle="modal" data-target="#modalVisualizar<?php echo $usuario[$i]['id_usuario'] ?>">
                    <span data-feather="search" class="align-text-bottom"></span>
                  </button>
                </td>
                <td>
                  <button type="button" title="Editar" data-toggle="modal" data-target="#modalSalvar<?php echo $usuario[$i]['id_usuario'] ?>">
                    <span data-feather="edit" class="align-text-bottom"></span>
                  </button>
                </td>
                <td>
                 
                  <a class="nav-link" title="Excluir" href="<?php echo site_url('usuario/excluir/'.$usuario[$i]['id_usuario']) ?>" >
                  <button type="button" title="Excluir" onclick="return confirma()">
                    <span data-feather="trash-2"></span>
                  </button>
                  </a>
                </td>   
              </tr>

              
            <?php } ?>
            <div class="modal fade" id="modalVisualizar<?php echo isset($usuario[$i]['id_usuario']) ? $usuario[$i]['id_usuario'] : '0'; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Usuário</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                              <div class="form-group">
                                <label for="titulo" class="col-form-label">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo isset($usuario[$i]['nome']) ? $usuario[$i]['nome'] : '' ?>" readonly>
                              </div>
                              <div class="form-group">
                                <label for="titulo" class="col-form-label">CPF:</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo isset($usuario[$i]['cpf']) ? $usuario[$i]['cpf'] : '' ?>" readonly>
                              </div>
                              <div class="form-group">
                                <label for="titulo" class="col-form-label">E-mail:</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?php echo isset($usuario[$i]['email']) ? $usuario[$i]['email'] : '' ?>" readonly>
                              </div>
                            </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <!-- Fim Modal -->


            <!-- Modal -->

                      <div class="modal fade" id="modalSalvar<?php echo isset($usuario[$i]['id_usuario']) ? $usuario[$i]['id_usuario'] : '0'; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Usuário</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            	<?php echo form_open('usuario/salvar') ?>
                              <div class="form-group">
                                <label for="titulo" class="col-form-label">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo isset($usuario[$i]['nome']) ? $usuario[$i]['nome'] : '' ?>" required>
                              </div>
                              <div class="form-group">
                                <label for="sinopse" class="col-form-label">CPF:</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo isset($usuario[$i]['cpf']) ? $usuario[$i]['cpf'] : '' ?>" required>
                              </div>
                              <div class="form-group">
                                <label for="sinopse" class="col-form-label">E-mail:</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?php echo isset($usuario[$i]['email']) ? $usuario[$i]['email'] : '' ?>" required>
                              </div>  
                          </div>
                          <div class="modal-footer">
                            <input type="hidden" name="id_usuario" value="<?php echo isset($usuario[$i]['id_usuario']) ? $usuario[$i]['id_usuario'] : '' ?>" />
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <?php echo form_close(); ?>
                    <!-- Fim Modal -->
                
          
                <?php }
                ?>
          </tbody>
        </table>
      </div>

            

    </main>
  </div>
</div>

  

<?php 
  $this->endSection();
?>