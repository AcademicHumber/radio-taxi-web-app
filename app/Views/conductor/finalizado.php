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
    <h1 class="text-center">Viaje Finalizado</h1><br>
    <h3 class="text-center">BS. 20</h3>
        <div class="row">
            <div class="col-sm-12">
            <img src="<?php echo base_url('img/card.png'); ?>" width=250 height=220 class="mx-auto d-block">  
            </div>
        </div>
</div>
<BR>
    <div class="row text-center aling-item-center justify-content-center">
        <div class="col-sm-12">
            <button type="button" class="btn btn-dark">Cancelado</button>
        </div>
    </div>
</div>
<br>
<?php
echo view('comun/footer');
?>