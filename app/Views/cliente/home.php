<?php
echo view('comun/header');
?>
<div class="container-sm">
    <div class="row" style="margin-bottom:30px; margin-top:25px;">
        <div class="col-sm-12">
        <img src="img/icono.png" heigh=100 width=100 class="mx-auto d-block">
        </div>
    </div>
<?php
echo view('mapa/mapa');
?>
    <div class="d-flex justify-content-center" style=" margin-top: 30px">
        <div class="form w-75" >
            <div class="input-group" style ="margin-bottom: 25px">
            <span class="input-group-text bg-white border-end-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/>
                    <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
                </svg></span>
            </span>
            <input type="text" class="form-control border-start-0" placeholder="Partida" aria-label="Partida">
            </div>
            <div class="input-group" style ="margin-bottom: 25px">
            <span class="input-group-text bg-white border-end-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/>
                    <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
                </svg></span>
            </span>
            <input type="text" class="form-control border-start-0" placeholder="Destino" aria-label="Destino">
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="margin-bottom : 100px">
        <button type="button" class="btn col-6 fs-3 fw-bold rounded-pill bg-dark text-white" >Solicitar Viaje</button>
    </div>
</div>
<?php
echo view('comun/footer');
?>