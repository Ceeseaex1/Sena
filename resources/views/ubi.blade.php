<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFERTAS</title>
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
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}
.container-form{
    width: 100%;
    max-width: 1100px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(2,1fr);
    grid-gap: 50px;
    margin-top: 90px;
}
.container-form h2{
    margin-bottom: 15px;
    font-size: 35px
}
.container-form p{
    font-size: 17px;
    line-height: 1.6;
    margin-bottom: 30px;
}
.container-form a{
    font-size: 17px;
    display: inline-block;
    text-decoration: none;
    width: 100%;
    margin-bottom: 15px;
    color: black;
    font-weight: 700;
}
.container-form a i{
    color: orange;
    margin-right: 10px;
}
.container-form form .campo, textarea{
    width: 100%;
    padding: 15px 10px;
    font-size: 16px;
    border: 1px solid #dbdbdb;
    margin-bottom: 20px;
    border-radius: 3px;
    outline: 0px;
}
.container-form form textarea{
    max-width: 530px;
    min-width: 530px;
    min-height: 140px;
    max-height: 150px;
}
.container-form .btn-enviar{
    padding: 15px;
    font-size: 16px;
    border: none;
    outline: 0px;
    background: orange;
    color: white;
    border-radius: 3px;
    cursor: pointer;
    transition: all 300ms ease;
}
.container-form .btn-enviar:hover{
    background: #e39403;
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
        <h1>Donde Encontrarnos:</h1>

        
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

    <div class="container-form">
        <div class="info-form">
            <h2>Contáctanos</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui eligendi est voluptates quae ipsam eius, in quasi odio porro aut vel beatae aperiam.</p>
            <a href="#"><i class="fa fa-phone"></i> 123-456-789</a>
            <a href="#"><i class="fa fa-envelope"></i> email@tudominio.com</a>
            <a href="#"><i class="fa fa-map-marked"></i> Ciudad, Pais</a>
        </div>
        <form action="#" autocomplete="off">
            <input type="text" name="nombre" placeholder="Tu Nombre" class="campo">
            <input type="emal" name="email" placeholder="Tu Email" class="campo">
            <textarea name="mensaje" placeholder="Tu Mensaje..."></textarea>
            <input type="submit" name="enviar" value="Enviar Mensaje" class="btn-enviar">
        </form>
    </div>

<br><h1>UBICACION DEL SITIO </h1>
    <div class="container-fluid">
		<section class="contacto row justify-content-center">
			<div class="col-12 col-md-9 text-center">
				
			</div>

			<br><br><br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63622.82259244581!2d-74.11770940135726!3d4.695737976823338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bd1330f9f23%3A0x583140b254c90ff0!2sMochileros%20Hamburguesas%20%26%20Alitas!5e0!3m2!1ses!2sco!4v1677384790554!5m2!1ses!2sco" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

			<div class="w-100 mb-4"></div>
		</section>

</main>
<footer >
  

</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>