<?php 
  $this->extend('layouts/usuario_layout.php');
  $this->section('conteudo');
   //echo $msg;
   
   ?>
<!--  INICIO  -->


  <div id="myCarousel" class="carousel slide col-lg-11" data-bs-ride="carousel" >
    <div class="carousel-indicators ">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src='<?php echo base_url('assets/filmes/'.$destaques[0]['imagem']); ?>' width='1000' height='220' >
        <div class="container">
          <div class="carousel-caption text-start">
            <h1><?php echo $destaques[0]['titulo']; ?> </h1>
            <p><?php echo $destaques[0]['titulo']; ?> </p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src='<?php echo base_url('assets/filmes/'.$destaques[1]['imagem']); ?>' width='1000' height='220' >
        <div class="container">
          <div class="carousel-caption">
            <h1><?php echo $destaques[1]['titulo']; ?> </h1>
            <p><?php echo $destaques[1]['titulo']; ?> </p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src='<?php echo base_url('assets/filmes/'.$destaques[2]['imagem']); ?>' width='1000' height='220' >
        <div class="container">
          <div class="carousel-caption text-end">
            <h1><?php echo $destaques[2]['titulo']; ?> </h1>
            <p><?php echo $destaques[2]['titulo']; ?> </p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row pt-3">
    <h4 class="fw-normal">Últimos lançamentos</h4>

    <?php foreach ($filmes as $filme): ?>
   

      <div class="col-lg-3 pt-3 ">
       <!-- <svg class="bd-placeholder-img rounded-square" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>-->
       <a class="nav-link" href="<?php echo site_url('login/visualizar_filme/'.$filme['id_filme']) ?>" >
       <img src='<?php echo base_url('assets/filmes/'.$filme['imagem']); ?>'  alt='Capa' width='170' height='220'>
      </a>
       <!-- <h6 class="fw-normal"><?php //echo $filme['titulo'] ?></h6>-->
        <!--<p><a class="btn btn-secondary" href="#">Saber mais &raquo;</a></p>-->
      </div><!-- /.col-lg-4 -->

    <?php endforeach ?>
      
    </div><!-- /.row -->


    

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

<?php 
  $this->endSection();
?>