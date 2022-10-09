<!DOCTYPE html>
<html>
<body>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/main.css">
        <title>Índice de masa corporal</title>
    </head>

<form action="index.php" method="POST">
  <p>Usuario: <input type="text" name="usuario" ></p>
  <p>Contraseña: <input type="text" name="contrase" ></p>
  <p><input type="submit" name="btn" value="Enviar""></p>
</form>

<!-- Carrusel -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="slide1.jpg" class="d-block w-100" alt="foto">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="slide2.jpg" class="d-block w-100" alt="foto">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="slide3.jpg" class="d-block w-100" alt="foto">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


<style>

body{
    background: #ffe259;
}

</style>
        
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $usuario=$_POST["usuario"];
    $password=$_POST["contrase"];

    echo $usuario;
    echo $password;

        if($usuario=="admin" && $password=="contrase") {
                echo"<html><h2> B I E N V E N I D O...</h2></html>";
            }

        else{
            echo"<html><h2> D A T O S   I N C O R R E C T O S...</h2></html>";
        }

        if($usuario=="admin" && $password != "contrase")
        {
            echo"<html><h2> U S U A R I O    C O R R E C T O,    C O N T R A S E Ñ A    I N C O R R E C T A...</h2></html>";
        }

}

?>

</body>
</html>