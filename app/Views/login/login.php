<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url("css/estilos_inicio.css")?>">
    <title>Iniciar Sesión</title>
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
      <h2 id="tit_L" class="text-center">Iniciar Sesión</h2>
      <div id="input1" class="row d-grid gap-3 col-7 mx-auto">
        <div class="input-group" >
          <input type="text" class="form-control border-end-0" placeholder="Correo" aria-label="Correo">
            <span class="input-group-text bg-white border-start-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                    <path id="email" d="M18.125,64H1.875A2.088,2.088,0,0,0,0,66.25v13.5A2.088,2.088,0,0,0,1.875,82h16.25A2.088,2.088,0,0,0,20,79.75V66.25A2.088,2.088,0,0,0,18.125,64Zm0,2.25v1.913c-.876.856-2.272,2.187-5.257,4.992-.658.621-1.961,2.113-2.868,2.1-.907.018-2.21-1.475-2.868-2.1-2.985-2.8-4.381-4.136-5.257-4.992V66.25ZM1.875,79.75v-8.7c.9.856,2.164,2.056,4.1,3.874C6.828,75.73,8.323,77.511,10,77.5c1.669.011,3.145-1.744,4.026-2.576,1.935-1.818,3.2-3.019,4.1-3.874v8.7Z" transform="translate(0 -64)" fill="#a7a7a7"/>
                </svg>
            </span>
        </div>
        <div class="input-group" >
          <input type="text" class="form-control border-end-0" placeholder="Contraseña" aria-label="Contraseña">
            <span class="input-group-text bg-white border-start-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path id="password" d="M17.857,8.75H16.786V5.938C16.786,2.664,13.741,0,10,0S3.214,2.664,3.214,5.938V8.75H2.143A2.023,2.023,0,0,0,0,10.625v7.5A2.023,2.023,0,0,0,2.143,20H17.857A2.023,2.023,0,0,0,20,18.125v-7.5A2.023,2.023,0,0,0,17.857,8.75Zm-4.643,0H6.786V5.938A3.037,3.037,0,0,1,10,3.125a3.037,3.037,0,0,1,3.214,2.812Z" fill="#a7a7a7"/>
                </svg>
            </span>
        </div>
        <a id="txtReset" href="#">¿Se te ha olvidado la contraseña?</a>
      </div>
      <div id="btnLogin1" class="row btn d-grid col-5 mx-auto">
        <button type="button" class="btnLogin btn rounded-pill">Iniciar Sesión</button>
      </div>
    </div>

    <?php
    echo view('comun/footer');
    ?>

  </body>
</html>