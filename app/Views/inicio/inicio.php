<?php
echo view('comun/header');
?>
<div class="container-sm">

    <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
            <img src="<?php echo base_url('img/icono.png'); ?>" width=100 height=100 class="mx-auto d-block">
        </div>
    </div>

    <div>

        <div class="row">
            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
                <img src="<?php echo base_url('img/btn1.png'); ?>" width=200 height=40 class="mx-auto d-block">
            </div>
        </div>


        <div class="row d-grid col-5 mx-auto gap-3">
            <a href="<?php echo base_url("/login") ?>" class="btn btn-primary rounded-pill " type="button">Iniciar sesión</a>
            <a href="<?php echo base_url("/cliente/clientRegister") ?>" class="btn btn-primary rounded-pill " type="button">Registrarse</a>
            <a href="<?php echo base_url("/conductor/driverRegister") ?>" class="btn btn-primary rounded-pill " type="button">Conductores</a>
        </div>

    </div>
</div>
<?php
echo view('comun/footer');
?>