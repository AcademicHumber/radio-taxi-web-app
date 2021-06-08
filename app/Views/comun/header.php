<!DOCTYPE html>
<html lang="es">
<meta charset="utf8">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo base_url('img/icono.png'); ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="<?php echo base_url("css/style.css") ?>" rel="stylesheet" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <style>
    .contenedor::after {
      content: "";
      background-image: url('<?php echo base_url('/img/driver.png') ?>');
      background-position: center;
      background-repeat: no-repeat;
      opacity: 0.2;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      position: absolute;
      z-index: -1;
      filter: brightness(90%);
    }
  </style>
  <title>App Radio Taxi</title>

</head>

<body>
  <div class="contenedor">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Uber Camba</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a href="<?php echo base_url("/inicio") ?>" class="nav-link " href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url("/") ?>" class="nav-link" href="#">Cliente</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url("/conductor") ?>" class="nav-link" href="#">Conductor</a>
            </li>
          </ul>

        </div>

    </nav>