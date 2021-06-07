<?php
echo view('comun/header');
?> 
<br>
<div class = "container-fluid">
    <div class="row">
        <div class="col-sm-12">
             <img src="<?php echo base_url('img/icono.png'); ?>" width=100 height=100 class="mx-auto d-block">   
        </div>
    </div>
<br>
<?php
echo view('mapa/mapa');
?>
<BR>
    <div class="row text-center aling-item-center justify-content-center">
        <div class="col-sm-12">
            <button type="button" class="btn btn-dark">Finalizar Viaje</button>
        </div>
    </div>
<br>
</div>
<?php
echo view('comun/footer');
?>