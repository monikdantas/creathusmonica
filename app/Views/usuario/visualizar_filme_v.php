<?php 
  $this->extend('layouts/usuario_layout.php');
  $this->section('conteudo');
   //echo $msg;
   
   ?>
<!--  INICIO  -->

<hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1"><?php echo $filme['titulo'] ?> <span class="text-muted">See for yourself.</span></h2>
        <p class="lead"><?php echo $filme['sinopse'] ?></p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src='<?php echo base_url('assets/filmes/'.$filme['imagem']); ?>'  alt='Capa' width='200' height='250'>
      </div>
    </div>

    

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

<?php 
  $this->endSection();
?>