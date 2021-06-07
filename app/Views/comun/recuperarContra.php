<?php
echo view('comun/header');
?> 
<br>
<div class = "container-fluid">
    <div class="row">
        <div class="col-sm-12">
             <img src="<?php echo base_url('img/icono.png'); ?>" width=140 height=140 class="mx-auto d-block">   
        </div>
    </div>
<br>
<h4 class="text-center">Ingrese su correo de verificación</h4>
<br>
<div class="form ">
    <div class="row text-center aling-item-center justify-content-center">
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg></span>
                <input type="text" class="form-control" placeholder="Código" aria-label="partida" aria-describedby="basic-addon1">
            </div><br>
         </div>
    </div>
    <div class="row text-center aling-item-center justify-content-center">
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                </svg></span>
                <input type="text" class="form-control" placeholder="Ingrese nueva contraseña" aria-label="partida" aria-describedby="basic-addon1">
            </div><br>
         </div>
    </div>     
       
</div>
<br>
<div class="row text-center aling-item-center justify-content-center">
    <div class="col-sm-12">
        <button type="button" class="btn btn-outline-primary">Cambiar Contraseña</button>
    </div>
</div>
<br>
</div>
<br>
<br>
<br>
<br>
<?php
echo view('comun/footer');
?>