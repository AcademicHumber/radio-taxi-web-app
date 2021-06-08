<?php
echo view('comun/header');
?> 
<div class="container-sm">
<br>
    <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
            <img src="<?php echo base_url('img/icono.png'); ?>" width=100 height=100 class="mx-auto d-block">       
        </div>
    </div>
<br>
<div class="card border-light">

    <h1 class="text-center">Viaje Finalizado</h1><br>
    <h3 class="text-center">BS. 20</h3>
        <div class="row">
            <div class="d-flex justify-content-center">
            <img src="<?php echo base_url('img/card.png'); ?>" width=250 height=220 class="mx-auto d-block">  
            </div>
        </div>
</div>
<BR>
    <div class="row text-center aling-item-center justify-content-center">
        <div class="col-sm-12">
        <a href="<?php echo base_url('/conductor'); ?>" type="button" class="btn btn-dark rounded-pill">Cancelado</a>
        </div>
    </div>
</div>
<br>
<?php
echo view('comun/footer');
?>