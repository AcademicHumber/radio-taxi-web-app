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
        <?php
        echo view('mapa/mapa');
        ?>
        <BR>
        <div class="row text-center aling-item-center justify-content-center">
            <div class="col-sm-12">
                <a href="<?php echo base_url('/conductor/finish'); ?>" type="button" class="btn btn-dark rounded-pill">Finalizar Viaje</a>
            </div>
        </div>
        <br>
    </div>
</div>
<?php
echo view('comun/footer');
?>