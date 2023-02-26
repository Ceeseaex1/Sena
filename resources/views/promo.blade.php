<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promociones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    a{
    color: white !important;
    text-decoration: none ;
    align-items: center;
}
a:hover{
    color: black;
    text-decoration: none ;
}
footer{
    background: blue;
    display: flex;
    width: 100%;
    height: 100px;
    position: absolute;
    top: 100%;
}
h1,h2{
    text-align: center;
}
body{
background-image: url("resource/img/amigos.jpg");
background-size: cover;
background-repeat: no-repeat;
background-position: center;
background-attachment: fixed;

 }
</style>
</head>
<body>
<header>
<navbar class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
        <h1>Promociones</h1>

        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ofertas">Ofertas</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="promociones"> Promo </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="ubicacion"> Ubicacion sitio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="https://api.whatsapp.com/send?phone=3027561090" target=_blank>Whatsapp</a>
                </li>
                
    
            </ul>
            
        </div>
    </div>
</navbar>
</header>
<main>
<div class="container d-flex justify-content-center">
    <img class="img-fluid rounded-circle"  src="{{url('resource/img/hamburguesa2.jpg')}}" alt="">
</div>
<br> <h1> Descuentos </h1><br><br>
    <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Hamburguesa con papas</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$15.000<small class="text-muted fw-light">/Antes $20.000</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Envio Gratis</li>
              <li>2 Salsas de tu preferencia</li>
              <li>Papas saladas o francesa</li>
              
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Pidelo Ahora!</button>
          </div>
        </div>
      </div>
      <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
          <h4 class="my-0 fw-normal">Perro caliente con gaseosa</h4>
          </div>
          <div class="card-body">
          <h1 class="card-title pricing-card-title">$17.000<small class="text-muted fw-light">/Antes $21.000</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Envio Gratis</li>
              <li>2 salsas de tu preferencia</li>
              <li>1L de gaseosa de tu preferencia</li>
              
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Pidelo Ahora!</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
          <h4 class="my-0 fw-normal">Arepa con todo</h4>
          </div>
          <div class="card-body">
          <h1 class="card-title pricing-card-title">$10.000<small class="text-muted fw-light">/Antes $15.000</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Envio Gratis</li>
              <li>Pollo con champiñon</li>
              <li>Carne en salsa</li>
              
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Pidelo Ahora!</button>
          </div>
        </div>
      </div>
    </div>
</main>
<footer >
  

</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>