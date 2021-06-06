<?php
echo view('comun/header');
?>
<div class="container">
    <h1 class = "text-center bg-dark text-white " style = "margin-top : 60px ; margin-bottom:50px">LOGO</h1>
    <h2 class="text-center" style="color : #393E46; margin-bottom: 40px;">Registrarse</h2>
    <div class="input-group" style ="width :300px ; margin-left:25px; margin-bottom: 20px">
    <input type="text" class="form-control border-end-0" placeholder="Nombre" aria-label="Nombre">
    <span class="input-group-text bg-white border-start-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
            <path id="user" d="M14,11.875c-1.281,0-1.9.625-4,.625s-2.714-.625-4-.625c-3.312,0-6,2.352-6,5.25v1A2.023,2.023,0,0,0,2.143,20H17.857A2.023,2.023,0,0,0,20,18.125v-1C20,14.227,17.313,11.875,14,11.875Zm3.857,6.25H2.143v-1A3.647,3.647,0,0,1,6,13.75a19.715,19.715,0,0,0,4,.625,19.525,19.525,0,0,0,4-.625,3.647,3.647,0,0,1,3.857,3.375ZM10,11.25c3.549,0,6.429-2.52,6.429-5.625S13.549,0,10,0,3.571,2.52,3.571,5.625,6.451,11.25,10,11.25Zm0-9.375a4.051,4.051,0,0,1,4.286,3.75A4.051,4.051,0,0,1,10,9.375a4.051,4.051,0,0,1-4.286-3.75A4.051,4.051,0,0,1,10,1.875Z" fill="#a7a7a7"/>
        </svg>
    </span>
    </div>
    <div class="input-group" style ="width :300px ; margin-left:25px; margin-bottom: 20px">
    <input type="text" class="form-control border-end-0" placeholder="Correo" aria-label="Correo">
    <span class="input-group-text bg-white border-start-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
            <path id="email" d="M18.125,64H1.875A2.088,2.088,0,0,0,0,66.25v13.5A2.088,2.088,0,0,0,1.875,82h16.25A2.088,2.088,0,0,0,20,79.75V66.25A2.088,2.088,0,0,0,18.125,64Zm0,2.25v1.913c-.876.856-2.272,2.187-5.257,4.992-.658.621-1.961,2.113-2.868,2.1-.907.018-2.21-1.475-2.868-2.1-2.985-2.8-4.381-4.136-5.257-4.992V66.25ZM1.875,79.75v-8.7c.9.856,2.164,2.056,4.1,3.874C6.828,75.73,8.323,77.511,10,77.5c1.669.011,3.145-1.744,4.026-2.576,1.935-1.818,3.2-3.019,4.1-3.874v8.7Z" transform="translate(0 -64)" fill="#a7a7a7"/>
        </svg>
    </span>
    </div>
    <div class="input-group" style ="width :300px ; margin-left:25px; margin-bottom: 20px">
    <input type="text" class="form-control border-end-0" placeholder="Contraseña" aria-label="Contraseña">
    <span class="input-group-text bg-white border-start-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
            <path id="password" d="M17.857,8.75H16.786V5.938C16.786,2.664,13.741,0,10,0S3.214,2.664,3.214,5.938V8.75H2.143A2.023,2.023,0,0,0,0,10.625v7.5A2.023,2.023,0,0,0,2.143,20H17.857A2.023,2.023,0,0,0,20,18.125v-7.5A2.023,2.023,0,0,0,17.857,8.75Zm-4.643,0H6.786V5.938A3.037,3.037,0,0,1,10,3.125a3.037,3.037,0,0,1,3.214,2.812Z" fill="#a7a7a7"/>
        </svg>
    </span>
    </div>
    <div class="input-group" style ="width :300px ; margin-left:25px; margin-bottom: 20px">
    <input type="text" class="form-control border-end-0" placeholder="Sexo" aria-label="Sexo">
    <span class="input-group-text bg-white border-start-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15">
            <path id="down" d="M8.893,167.238l-8.5-9.874a1.938,1.938,0,0,1,0-2.461L1.8,153.262a1.353,1.353,0,0,1,2.119,0l6.027,7,6.027-7a1.353,1.353,0,0,1,2.119,0l1.413,1.641a1.938,1.938,0,0,1,0,2.461l-8.5,9.874a1.346,1.346,0,0,1-2.113,0Z" transform="translate(0.05 -152.75)" fill="#a7a7a7"/>
        </svg>
    </span>
    </div>
    <div class="input-group" style ="width :300px ; margin-left:25px; margin-bottom: 20px">
    <input type="text" class="form-control border-end-0" placeholder="Teléfono" aria-label="Teléfono">
    <span class="input-group-text bg-white border-start-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
            <path id="phone" d="M19.263.951,15.2.013a.944.944,0,0,0-1.074.543L12.251,4.931a.935.935,0,0,0,.27,1.094l2.367,1.937a14.477,14.477,0,0,1-6.922,6.922L6.029,12.517a.936.936,0,0,0-1.094-.27L.56,14.122A.949.949,0,0,0,.013,15.2l.937,4.062a.937.937,0,0,0,.914.727A18.123,18.123,0,0,0,19.99,1.865.936.936,0,0,0,19.263.951Z" transform="translate(0.01 0.011)" fill="#a7a7a7"/>
        </svg>
    </span>
    </div>
    <button type="button" class="btn col-4 justify-content-center" style="background-color: #00ADB5">Registrarse</button>
</div>
<?php
echo view('comun/footer');
?>