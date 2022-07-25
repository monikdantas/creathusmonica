<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Checkout example · Bootstrap v5.2</title>

  
    <link href="<?php echo base_url('assets/css/lixo/bootstrap.min.css') ?>" rel="stylesheet">

  </head>
  <body class="bg-light">
    
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="<?php echo base_url('assets/img/FaviconCreathus.png') ?>" alt="" width="80" height="85">
          <h2>Criar conta</h2>
          <p class="lead">Preencha os campos abaixo para desfrutar dos melhores filmes!</p>
        </div>

        <div class="row g-5">
          <div class="col-md-5 col-lg-4 order-md-last">
            <img class="d-block mx-auto mb-4" src="<?php echo base_url('assets/img/filmes.jpeg') ?>" alt="" width="304" height="430">
          </div>
          <div class="col-md-7 col-lg-8">
            <?php echo form_open('usuario/salvar') ?>
              <div class="row g-3">
                <div class="col-12">
                  <label for="username" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="nome" required>
                </div>

                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                  <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                </div>
                <div class="col-md-5">
                  <label for="username" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" placeholder="Senha" required>        
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="same-address">
                  <label class="form-check-label" for="same-address">Deseja receber e-mails com as novidades?</label>
                </div>
                <button class="btn btn-secondary" type="submit">SALVAR</button>
              </div>
              <?php echo form_close(); ?>
          </div>
        </div>
      </main>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">Candidata: Mônica Lima</p>
      </footer>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
