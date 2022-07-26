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
    
  </div>

      

        <div class="row g-5">
          <div class="col-md-5 col-lg-4 order-md-last">
          <?php
          if (isset($error))
          foreach ($erros as $erro): ?>
    <li><?php echo esc($erro) ?></li>
<?php 
endforeach ?>
            <!--<img class="d-block mx-auto mb-4" src="<?php // echo base_url('assets/img/filmes.jpeg') ?>" alt="" width="304" height="430">-->
            <div class="d-grid text-center" id="imagem">
            <?php echo isset($filme['id_filme']) ? "<img class='mb-3' id='ajaxImgUpload' width='200' alt='Preview Image' src='".base_url('assets/filmes/'.$filme['imagem'])."' />" : '' ?>
            </div>
          </div>
          <div class="col-md-7 col-lg-8">
            <?php echo form_open_multipart('filme/salvar') ?>
              <div class="row g-3">
                <div class="col-12">
                <label for="titulo" class="col-form-label">Título:</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo isset($filme['titulo']) ? $filme['titulo'] : '' ?>" required>
                </div>

                <div class="col-12">
                <label for="sinopse" class="col-form-label">Sinopse:</label>
                                <textarea rows="4" class="form-control" id="sinopse" name="sinopse" required><?php echo isset($filme['sinopse']) ? $filme['sinopse'] : '' ?></textarea>
                              </div>
                <div class="col-md-8">
                <label for="imagem" class="col-form-label">Capa:</label>
                                  <div id="alertMessage" class="alert alert-warning mb-3" style="display: none">
                                    <span id="alertMsg"></span>
                                  </div>
                                  
                                  <div class="mb-3">
                                  
                                      <input type="file" name="capa" id="capa" id="capa" onchange="onFileUpload(this);"
                                          class="form-control"  accept="image/*" required>
                                  </div></div>

                            
                
                
              </div>
              <input type="hidden" name="id_filme" value="<?php echo isset($filme['id_filme']) ? $filme['id_filme'] : '' ?>" />
              <a href="<?php echo site_url('filme/index/') ?>" >
              <button type="button" class="btn btn-secondary" >CANCELAR</button>
              </button>
              </a>
                 <button type="submit" class="btn btn-primary">SALVAR</button>
              <?php echo form_close(); ?>
          </div>
        </div>
      

  


      </div>

            

    </main>
  </div>
</div>

    <script>
        function onFileUpload(input, id) {
            id = id || '#imagem';
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                   // $(id).attr('src', e.target.result).width(300)
                    $(imagem).html("<img class='mb-3' id='ajaxImgUpload' width='200' alt='Preview Image' src='"+e.target.result+"' />"); // envia o retorno para a div oculta
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        
    </script>


<?php 
  $this->endSection();
?>