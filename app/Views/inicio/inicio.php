<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url("css/estilos_inicio.css")?>">
    <title>Inicio</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
    <?php
    echo view('comun/header');
    ?>
  <div class="container-fluid">
    <div id="img_logo" class="row">
        <div class="col-sm-12">
          <img src="img/icono.png" heigh=100 width=100 class="mx-auto d-block rounded">
        </div> 
    </div>
    <div class="row">
        <div class="col-sm-12">
          <img id="img_btn1" src="img/btn1.png" class="mx-auto d-block rounded">
        </div>  
    </div> 
    <div id="botones" class="row d-grid gap-3 col-5 mx-auto">
      <button type="submit" class="btnIn btn btn-lg rounded-pill ">Iniciar Sesión</button>
      <button type="submit" class="btnRe btn btn-lg rounded-pill">Registrarse</button>
      <button type="submit" class="btnCond btn btn-lg rounded-pill">Conductor</button>
      <div class="row">
      </div>
    </div>
  </div>
    <?php
    echo view('comun/footer');
    ?>

  </body>
</html>