<?php
echo view('comun/header');
?> 
<br>

<div class = "container-fluid " >
    <div class="row">
        <div class="col-sm-12">
             <img src="<?php echo base_url('img/icono.png'); ?>" width=140 height=140 class="mx-auto d-block">   
        </div>
    </div>
<br>
<h4 class="text-center">Ingrese su correo y recibirá un código de verificación</h4>
<br>
<div class="form ">
    <div class="row text-center aling-item-center justify-content-center">
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                    </svg></span>
                <input type="text" class="form-control" placeholder="Correo" aria-label="partida" aria-describedby="basic-addon1">
            </div><br>
         </div>
    </div>    
       
</div>
<br>
<div class="row text-center aling-item-center justify-content-center">
    <div class="col-sm-12">
        <button type="button" class="btn btn-outline-primary">Enviar código</button>
    </div>
</div>
<br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
echo view('comun/footer');
?>