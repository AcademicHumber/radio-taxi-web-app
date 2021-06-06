<?php
echo view('comun/header');
?>
<br>
<br>
<h1 class ="text-center"> Administración</h1>
<?php
echo view('comun/footer');
?>
<br>
<div class = "container-fluid ">
    <div class="row">
        <div class="col-sm-12">
        <img src="img/icono.png" heigh=100 width=100 class="mx-auto d-block">
        </div>  
    </div>
    <br>
  <div class = "row"  > 
  <div class="col-sm-12">
 <h4 class="text-primary text-center" > <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
 </svg> Usuario </h4>
 </div> 
 </div> 
 <br>   
    <div class="d-grid gap-2 col-6 mx-auto"> 
        <div class="row text-center aling-item-center justify-content-center">
            
            <button type="button" class="btn btn-dark btn-lg">Configuraciones</button>
        </div> 
        <br>     
        <div class="row text-center aling-item-center justify-content-center">
        
            <button type="button" class="btn btn-dark btn-lg">Precio</button>
        </div>   
        <br>   
        <div class="row text-center aling-item-center justify-content-center">
            
            <button type="button" class="btn btn-dark btn-lg">Cupones</button>
        </div>  
        <br> 
        <div class="row text-center aling-item-center justify-content-center">
            
            <button type="button" class="btn btn-dark btn-lg">Conductores</button>
        </div>   
    </div>
    <br>
    <br>
    <div class = "row text-center aling-item-center justify-content-center ">
    <a href="#" class= "link-primary">Cerrar Sesión</a>
    </div> 
    
</div> 