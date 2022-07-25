<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title><?php echo $titulo?></title>


<link href="<?php echo base_url('assets/css/lixo/bootstrap.min.css') ?>" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}


    </style>

    
    <!-- Custom styles for this template -->
  
  </head>
  <body class="text-center">

  <main class="form-signin w-100 m-auto">
  <?php echo form_open('usuario/inicio_usuario') ?>
    <img class="mb-4" src="assets/img/FaviconCreathus.png" alt="" width="80" height="85">
    <h1 class="h3 mb-3 fw-normal">Conta Creathus</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
      <label for="floatingInput">E-mail</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="senha" placeholder="Senha" required>
      <label for="floatingPassword">Senha</label>
    </div>

    <div class="checkbox mb-3">
      <label>
         Não tem conta? 
         <a title="Realizar cadastro" href="<?php echo site_url('usuario/cadastrar') ?>" >CADASTRE-SE </a>
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted">Candidata: Mônica Lima</p>
  <?php echo form_close(); ?>
</main>
    



    
  </body>
</html>
