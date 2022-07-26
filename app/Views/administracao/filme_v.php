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
    <h1 class="h2">FILMES</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
          
      <!-- Botão para acionar modal -->     
      <!--<button type="button" class="btn btn-bg btn-outline-secondary" data-toggle="modal" data-target="#modalSalvar0">-->
      <a class="nav-link" title="Excluir" href="<?php echo site_url('filme/novo_filme/') ?>" >
        <button type="button" class="btn btn-bg btn-outline-secondary">
        Novo Filme
        <span data-feather="plus-square" class="align-text-bottom"></span>
        </button>
      </a>
              
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead class="thead-dark text-center">
        <tr class="table-dark">
          <th scope="col" width="5%">ID</th>
          <th scope="col" width="40%">Capa</th>
          <th scope="col" width="45%">Título</th>
          <th scope="col" colspan="3" width="10%">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $filme = $filmes; 
          for($i=0; $i <= sizeof($filme); $i++){
            if (!isset ($filme[$i]['id_filme'])){
            }else{
        ?>
              <tr class="align-middle text-center">
               <td><?php echo $filme[$i]['id_filme'] ?></td>
                <td><img src='<?php echo base_url('assets/filmes/'.$filme[$i]['imagem']); ?>' class='img-thumbnail' alt='Capa' width='65' height='76'></td>
							  <td><?php echo $filme[$i]['titulo'] ?></td>
                <td>
                  <button type="button" title="Visualizar" class="btn btn-link nav-link" data-toggle="modal" data-target="#modalVisualizar<?php echo $filme[$i]['id_filme'] ?>">
                    <span data-feather="search" class="align-text-bottom"></span>
                  </button>
                </td>
                <td>
                <a class="nav-link" href="<?php echo site_url('filme/editar_filme/'.$filme[$i]['id_filme']) ?>" >
                  <button type="button" title="Editar" class="btn btn-link nav-link">
                    <span data-feather="edit" class="align-text-bottom"></span>
                  </button>
                  </a>
                 
                </td>
                <td>
                 
                  <a class="nav-link" title="Excluir" href="<?php echo site_url('filme/excluir/'.$filme[$i]['id_filme']) ?>" >
                  <button type="button" title="Excluir" onclick="return confirma()" class="btn btn-link nav-link">
                    <span data-feather="trash-2" class="align-text-bottom"></span>
                  </button>
                  </a>
                </td>   
              </tr>

              
            <?php } ?>
            <div class="modal fade bd-example-modal-xl" id="modalVisualizar<?php echo isset($filme[$i]['id_filme']) ? $filme[$i]['id_filme'] : '0'; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Filme</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                        
                          <div class="row">
                          <div class="col-8 col-sm-3">
                          <?php echo isset($filme[$i]['id_filme']) ? "<img class='mb-3' id='ajaxImgUpload' width='200' alt='Preview Image' src='".base_url('assets/filmes/'.$filme[$i]['imagem'])."' />" : '' ?>
           
                        </div>
                        
          <div class="col-4 col-sm-9">
            
                          
                              <div class="form-group">
                                <label for="titulo" class="col-form-label">Título:</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo isset($filme[$i]['titulo']) ? $filme[$i]['titulo'] : '' ?>" readonly>
                              </div>
                              <div class="form-group">
                                <label for="sinopse" class="col-form-label">Sinopse:</label>
                                <textarea rows="4" class="form-control" id="sinopse" name="sinopse" readonly> <?php echo isset($filme[$i]['sinopse']) ? $filme[$i]['sinopse'] : '' ?> </textarea>
                              </div>
                             
            </div>
            </div>
                              
                              
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <!-- Fim Modal -->
          
                <?php }
                ?>
          </tbody>
        </table>
      </div>

            

    </main>
  </div>
</div>

    <script>
        function onFileUpload(input, id) {
            id = id || '#ajaxImgUpload';
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(id).attr('src', e.target.result).width(300)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function () {
            $('#upload_image_form').on('submit', function (e) {
                $('.uploadBtn').html('Uploading ...');
                $('.uploadBtn').prop('Disabled');
                e.preventDefault();
                if ($('#file').val() == '') {
                    alert("Choose File");
                    $('.uploadBtn').html('Upload');
                    $('.uploadBtn').prop('enabled');
                    document.getElementById("upload_image_form").reset();
                } else {
                    $.ajax({
                        url: "<?php echo base_url(); ?>/AjaxFileUpload/upload",
                        method: "POST",
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: "json",
                        success: function (res) {
                            console.log(res.success);
                            if (res.success == true) {
                                $('#ajaxImgUpload').attr('src', 'https://via.placeholder.com/150');
                                $('#alertMsg').html(res.msg);
                                $('#alertMessage').show();
                            } else if (res.success == false) {
                                $('#alertMsg').html(res.msg);
                                $('#alertMessage').show();
                            }
                            setTimeout(function () {
                                $('#alertMsg').html('');
                                $('#alertMessage').hide();
                            }, 4000);
                            $('.uploadBtn').html('Upload');
                            $('.uploadBtn').prop('Enabled');
                            document.getElementById("upload_image_form").reset();
                        }
                    });
                }
            });
        });
    </script>


<?php 
  $this->endSection();
?>