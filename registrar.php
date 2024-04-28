<?php 

    include("conexion.php"); 

    if (isset($_POST['register'])) {
        if(
            strlen($_POST['name']) >= 1 &&
            strlen($_POST['direction']) >= 1 &&
            strlen($_POST['age']) >= 1 &&
            strlen($_POST['sex']) >= 1 &&
            strlen($_POST['name1']) >= 1 &&
            strlen($_POST['direction1']) >= 1 &&
            strlen($_POST['age1']) >= 1 &&
            strlen($_POST['sex1']) >= 1 &&
            strlen($_POST['delito']) >= 1 
        )  { 

            $name = trim($_POST['name']);
            $direction = trim($_POST['direction']);
            $age = trim($_POST['age']);
            $sex = trim($_POST['sex']);
            $name1 = trim($_POST['name1']);
            $direction1 = trim($_POST['direction1']);
            $age1 = trim($_POST['age1']);
            $sex1 = trim($_POST['sex1']);
            $delito = trim($_POST['delito']);
            $consulta = "INSERT INTO datos(Nombre_Denunciante, Direccion_Denunciante, Edad_Denunciante, Sexo_Denunciante, Nombre_Denunciado, Direccion_Denunciado, Edad_Denunciado, Sexo_Denunciado, Delito) 
            VALUES('$name', '$direction', '$age', '$sex', '$name1', '$direction1', '$age1', '$sex1', '$delito' )";
            $resultado =mysqli_query($conex, $consulta);
            if ($resultado) { 
                ?> 
                <h3 class="success" >Tu registro se ha completado</h3>
                <?php
            }   else {
                ?> 
                <h3 class="error">Ocurrio un error</h3>
                <?php
            }
        }else { 
            ?> <h3 class="error">Llena todos los campos</h3> 
            <?php
        } 

    }
?>