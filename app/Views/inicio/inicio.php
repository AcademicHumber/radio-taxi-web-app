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
    <div class="container-sm w-100 mt-5 rounded">
    <div class="text-center">
    <img id="imgL" src="img/logo.jpg" class="rounded" alt="logo">
    </div>
    <div class="row gap-3 mx-auto w-50">
    <img id="imgL" src="img/btn1.png" class="rounded" alt="logo">
    <button type="submit" class="btnIn btn btn-primary btn-lg rounded-pill ">Iniciar Sesión</button>
    <button type="submit" class="btnRe btn btn-primary btn-lg rounded-pill">Registrarse</button>
    <button type="submit" class="btnCond btn btn-primary btn-lg rounded-pill">Quiero ser conductor</button>
    <img id="imgL1" src="img/btn2.png" class="rounded" alt="logo">
    </div>
    </div>
    <?php
    echo view('comun/footer');
    ?>

  </body>
</html>