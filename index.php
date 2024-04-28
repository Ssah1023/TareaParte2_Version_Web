<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href=css\style.css>
</head>
<body>
    <form method="post">
    <h1>Sistema de Denuncias</h1>
    <p>Inicia tu Registro</p>

    <div class="input-wrapper">
        <input type="text" name="name" placeholder="Nombre del Denunciante"> 
        <img class="input-icon" src="images/name.svg" alt=""> 

    </div> 
    
    <div class="input-wrapper">
        <input type="text" name="direction" placeholder="Direccion del Denunciante">
        <img class="input-icon" src="images/direction.svg" alt="">

    </div> 

    <div class="input-wrapper">
        <input type="text" name="age" placeholder="Edad del Denunciante">
        <img class="input-icon" src="images/age.svg" alt="">

    </div> 

    <div class="input-wrapper">
        <input type="text" name="sex" placeholder="Sexo del Denunciante">
        <img class="input-icon" src="images/sex.svg" alt="">

    </div> 

    <div class="input-wrapper">
        <input type="text" name="name1" placeholder="Nombre del Denunciado"> 
        <img class="input-icon" src="images/name.svg" alt=""> 

    </div> 

    <div class="input-wrapper">
        <input type="text" name="direction1" placeholder="Direccion del Denunciado">
        <img class="input-icon" src="images/direction.svg" alt="">

    </div> 

    <div class="input-wrapper">
        <input type="text" name="age1" placeholder="Edad del Denunciado">
        <img class="input-icon" src="images/age.svg" alt="">

    </div> 

    <div class="input-wrapper">
        <input type="text" name="sex1" placeholder="Sexo del Denunciado">
        <img class="input-icon" src="images/sex.svg" alt="">

    </div>

    <div class="input-wrapper">
        <input type="text" name="delito" placeholder="Delito Cometido">
        <img class="input-icon" src="images/delito.svg" alt="">

    </div>

    <input class="btn "type="submit" name="register" value="Guardar Denuncia">

    </form>
    <?php 
        include("registrar.php");

    ?>
</body>
</html>