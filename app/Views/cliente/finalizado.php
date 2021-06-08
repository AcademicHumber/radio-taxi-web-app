<?php
echo view('comun/header');
?>
<div class="container-sm">
    <div class="row">
        <div class="col-sm-12" style="padding: 20px 0;">
            <img src="<?php echo base_url('img/icono.png'); ?>" width=100 height=100 class="mx-auto d-block">
        </div>
    </div>
    <div class="card border-secondary" style="border-radius: 50px; margin-bottom:90px">
        <div class="card-body">
            <div class="d-flex justify-content-center" style="margin-bottom:20px; margin-top:15px">
                <h1 class="text-center col-10 fw-bold" style="padding-top: 10px;">Viaje Finalizado</h1>
                <a href="<?php echo base_url('/') ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                        <path id="close" d="M20.5,8A12.5,12.5,0,1,0,33,20.5,12.5,12.5,0,0,0,20.5,8Zm6.129,15.781a.605.605,0,0,1,0,.857l-2,1.991a.605.605,0,0,1-.857,0L20.5,23.323l-3.281,3.306a.605.605,0,0,1-.857,0l-1.991-2a.605.605,0,0,1,0-.857L17.677,20.5l-3.306-3.281a.605.605,0,0,1,0-.857l2-2a.605.605,0,0,1,.857,0L20.5,17.677l3.281-3.306a.605.605,0,0,1,.857,0l2,2a.605.605,0,0,1,0,.857L23.323,20.5Z" transform="translate(-8 -8)" />
                    </svg>
                </a>
            </div>
            <div class="d-flex justify-content-center" style="margin-bottom:40px;">
                <img src="<?php echo base_url('img/conductor.jpg'); ?>" width=100 height=100 class="mx-auto d-block">
            </div>
            <h5 class="text-center">Califica el viaje</h5>
            <div class="d-flex justify-content-center" style="margin-bottom:40px; margin-top:25px; ">
                <svg class="col-1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path id="star" d="M39.475,6.686l-5.462-.832L31.572.683a1.175,1.175,0,0,0-2.146,0L26.986,5.854l-5.462.832a1.266,1.266,0,0,0-.662,2.133l3.951,4.023-.935,5.683a1.207,1.207,0,0,0,1.735,1.316L30.5,17.158l4.886,2.683a1.208,1.208,0,0,0,1.735-1.316l-.935-5.683,3.951-4.023a1.266,1.266,0,0,0-.662-2.133Zm-5.215,5.5.886,5.406L30.5,15.041l-4.647,2.55.886-5.406L22.978,8.358l5.2-.789L30.5,2.648l2.325,4.921,5.2.789L34.26,12.186Z" transform="translate(-20.5 0.013)" fill="#a7a7a7" />
                </svg>
                <svg class="col-1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path id="star" d="M39.475,6.686l-5.462-.832L31.572.683a1.175,1.175,0,0,0-2.146,0L26.986,5.854l-5.462.832a1.266,1.266,0,0,0-.662,2.133l3.951,4.023-.935,5.683a1.207,1.207,0,0,0,1.735,1.316L30.5,17.158l4.886,2.683a1.208,1.208,0,0,0,1.735-1.316l-.935-5.683,3.951-4.023a1.266,1.266,0,0,0-.662-2.133Zm-5.215,5.5.886,5.406L30.5,15.041l-4.647,2.55.886-5.406L22.978,8.358l5.2-.789L30.5,2.648l2.325,4.921,5.2.789L34.26,12.186Z" transform="translate(-20.5 0.013)" fill="#a7a7a7" />
                </svg>
                <svg class="col-1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path id="star" d="M39.475,6.686l-5.462-.832L31.572.683a1.175,1.175,0,0,0-2.146,0L26.986,5.854l-5.462.832a1.266,1.266,0,0,0-.662,2.133l3.951,4.023-.935,5.683a1.207,1.207,0,0,0,1.735,1.316L30.5,17.158l4.886,2.683a1.208,1.208,0,0,0,1.735-1.316l-.935-5.683,3.951-4.023a1.266,1.266,0,0,0-.662-2.133Zm-5.215,5.5.886,5.406L30.5,15.041l-4.647,2.55.886-5.406L22.978,8.358l5.2-.789L30.5,2.648l2.325,4.921,5.2.789L34.26,12.186Z" transform="translate(-20.5 0.013)" fill="#a7a7a7" />
                </svg>
                <svg class="col-1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path id="star" d="M39.475,6.686l-5.462-.832L31.572.683a1.175,1.175,0,0,0-2.146,0L26.986,5.854l-5.462.832a1.266,1.266,0,0,0-.662,2.133l3.951,4.023-.935,5.683a1.207,1.207,0,0,0,1.735,1.316L30.5,17.158l4.886,2.683a1.208,1.208,0,0,0,1.735-1.316l-.935-5.683,3.951-4.023a1.266,1.266,0,0,0-.662-2.133Zm-5.215,5.5.886,5.406L30.5,15.041l-4.647,2.55.886-5.406L22.978,8.358l5.2-.789L30.5,2.648l2.325,4.921,5.2.789L34.26,12.186Z" transform="translate(-20.5 0.013)" fill="#a7a7a7" />
                </svg>
                <svg class="col-1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path id="star" d="M39.475,6.686l-5.462-.832L31.572.683a1.175,1.175,0,0,0-2.146,0L26.986,5.854l-5.462.832a1.266,1.266,0,0,0-.662,2.133l3.951,4.023-.935,5.683a1.207,1.207,0,0,0,1.735,1.316L30.5,17.158l4.886,2.683a1.208,1.208,0,0,0,1.735-1.316l-.935-5.683,3.951-4.023a1.266,1.266,0,0,0-.662-2.133Zm-5.215,5.5.886,5.406L30.5,15.041l-4.647,2.55.886-5.406L22.978,8.358l5.2-.789L30.5,2.648l2.325,4.921,5.2.789L34.26,12.186Z" transform="translate(-20.5 0.013)" fill="#a7a7a7" />
                </svg>
            </div>
            <h3 class="text-center">¿Tienes algún comentario?</h3>
            <div class="form-check" style="margin-top:30px; margin-bottom:30px">
                <input class="form-check-input" type="checkbox" value="" style="width:20px; height:20px ; margin-left:10px;" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    <h5 style="margin-left:12px"> Tengo un reclamo</h5>
                </label>
            </div>
            <textarea class="form-control border-secondary" aria-label="With textarea" placeholder="Comentario" rows="5"></textarea>
            <div class="d-flex justify-content-center" style="margin-bottom : 50px; margin-top : 30px">
                <a href="<?php echo  base_url('/') ?>" type="button" class="btn col-4 fs-3 fw-bold rounded-pill bg-dark text-white">Enviar</a>
            </div>
        </div>
    </div>
</div>

<?php
echo view('comun/footer');
?>