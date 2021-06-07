<?php
echo view('comun/header');
?> 
<br><br><br>
<div class="container-sm">
<br>
    <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
            <img src="<?php echo base_url('img/icono.png'); ?>" width=100 height=100 class="mx-auto d-block">       
        </div>
    </div>
<br>
<div class="card border-light">
<br>
      <div class="row">
         <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
            <img src="<?php echo base_url('img/btn1.png'); ?>" width=200 height=40 class="mx-auto d-block">  
          </div>  
      </div> 
      <br>

     <div class="text-center aling-item-center justify-content-center">
         <button class="btn btn-primary rounded-pill " type="button">Iniciar sesión</button><br><br>
          <button class="btn btn-primary rounded-pill " type="button">Registrarse</button><br><br>
          <button class="btn btn-primary rounded-pill " type="button">Conductores</button><br><br>
     </div>

  </div>
  </div>
  <br> <br> <br>
    <?php
    echo view('comun/footer');
    ?>
