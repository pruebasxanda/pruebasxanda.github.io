<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XandA | Iniciar sesión</title>
    <link rel="stylesheet" href="Css/main4.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>

</body>
</html>

<?php
session_start();
if(isset($_SESSION['nombredelusuario'])){
    header('location: pagina.php');
}

if(isset($_POST['iniciarsesion'])){
    include("conexion.php");


    $varcorreo=$_POST['namecorreo']; //nombres de los identificadores del formulario
    $varpass=$_POST['namepass'];


    $query=mysqli_query($conn,"Select * from usuarioreleases where campocorreo = '".$varcorreo."' and campopassword = '".$varpass."'");
    $nr=mysqli_num_rows($query);


    if(!isset($_SESSION['nombredelusuario']))
    {
        if($nr == 1) //si se metieron bien los datos
        {
            $_SESSION['nombredelusuario']=$varcorreo;
            echo"<script>alert('Si existe');window.location= 'pagina.php'
            </script>";
        }
    else if ($nr == 0) //si se metieron mal los datos
    {
        echo"<script> swal('Lo sentimos :(', 'Este usuario no existe, favor de verificarlo', 'error');
        </script>";
    }
    }
}


if(isset($_POST["opcion_siguiente_crear_cuanta"]))
{

    include("conexion.php");

    $varcamponombre=$_POST['campo_nombre']; //nombres de los identificadores del formulario
    $varcampocorreo=$_POST['campo_correo'];
    $varcampocontrasena=$_POST['campo_contrasena'];
    $varcampoconfirmarcontrasena=$_POST['campo_confirmacion_contrasena'];


    $sqlgrabar = "INSERT INTO usuarios_xanda(celdanombre,celdacorreo,celdacontrasena) values('$varcamponombre','$varcampocorreo','$varcampocontrasena')";


    if($varcampocontrasena==$varcampoconfirmarcontrasena){
    if (mysqli_query($conn, $sqlgrabar))
    {
        echo"<script> swal('Hola $varcamponombre', 'Ya formas parte de la familia XandA', 'success');
        </script>";
    }else
    {
      echo"<script> swal('Lo sentimos :(', 'Ha ocurrido un error, intentalo más tarde', 'error');
      </script>";
    }
    }
    else{
        echo"<script> swal('Las contraseñas no coinciden', 'Verifica que las contraseñas estén correctas y vuelvelo a intentar', 'error');
        </script>";


        function defecto(){
            echo'<div class="main_inicio">
            <div class="contenedor_inicio_2">
                <div class="inicio_contenedor_imagen_2">
                    <img src="Img/logo.png" class="inicio_imagen_2">
                </div>
                <div class="inicio_contenedor_titulo_2">
                    <p class="inicio_texto_titulo">Crear tu cuenta XandA</p>
                    <p class="inicio_texto_subtitulo">Ten acceso a todos nuestros servicios</p>
    
                </div>
                <div class="inicio_contenedor_iniciarsesion">
                    <form method="POST" class="inicio_contenedor_iniciarsesion_form_2">
                        <input type="text" placeholder="Nombre completo" name="campo_nombre" class="inicio_contenedor_iniciarsesion_form_campo_2">
                        <input type="email" placeholder="Correo electrónico" name="campo_correo" class="inicio_contenedor_iniciarsesion_form_campo_2">
                        <input type="password" placeholder="Contraseña" name="campo_contrasena" class="inicio_contenedor_iniciarsesion_form_contrasena_1">
                        <input type="password" placeholder="Confirmación" name="campo_confirmacion_contrasena" class="inicio_contenedor_iniciarsesion_form_contrasena_2">
    
                        <input type="submit" Value="Inicia sesión" name="opcion_iniciar_sesion" class="inicio_contenedor_iniciarsesion_form_boton_1">
                        <input type="submit" Value="Siguiente" name="opcion_siguiente_crear_cuanta" class="inicio_contenedor_iniciarsesion_form_boton_2">
    
                    </form>
                </div>
    
                <img src="Img/astronauta.png" class="inicio_imagen_astronauta">
            </div>
    
        </div>';
            }
            defecto();

            salir();

    }

    

}



if(isset($_POST["opcion_siguiente_crear_cuanta_listo"]))
{
    include("conexion.php");


    $varcamponumero=$_POST['campo_numero']; //nombres de los identificadores del formulario
    $varcampocorreoderecuperacion=$_POST['campo_correoderecuperacion'];
    $varcampodia=$_POST['campo_dia'];
    $varcampomes=$_POST['campo_mes'];
    $varcampoano=$_POST['campo_ano'];

    $sqlgrabar = "update usuarios_xanda set celdatelefono='$varcamponumero', celdacorreorecuperacion='$varcampocorreoderecuperacion', celdadia='$varcampodia', celdames='$varcampomes', celdaano='$varcampoano' where celdacorreo='$varcampocorreoderecuperacion'";

    if (mysqli_query($conn, $sqlgrabar))
    {
        echo"<script> swal('Cuenta creada con éxito', 'Ya formas parte de la familia XandA', 'success');
        </script>";
    }else
    {
      echo"<script> swal('Lo sentimos', 'Ha ocurrido un error, intentalo más tarde', 'error');
      </script>";
    }
    
}


$varautomatica=0;

if($varautomatica==0){    

    if(isset($_POST["opcion_iniciar_sesion"])){

        echo'<div class="main_inicio">
        <div class="contenedor_inicio">
            <div class="inicio_contenedor_imagen">
                <img src="Img/logo.png" class="inicio_imagen">
            </div>
            <div class="inicio_contenedor_titulo">
                <p class="inicio_texto_titulo">Acceder</p>
                <p class="inicio_texto_subtitulo">Usa tu cuenta de XandA</p>
            </div>
            <div class="inicio_contenedor_iniciarsesion">
                <form method="POST" class="inicio_contenedor_iniciarsesion_form">
                    <input type="text" placeholder="Correo electrónico" class="inicio_contenedor_iniciarsesion_form_campo">
                    <input type="submit" value="Olvidé mi contraseña" class="inicio_contenedor_iniciarsesion_form_olvidemicontrasena">
                    <p class="inicio_contenedor_iniciarsesion_form_subtexto">Consulta los servicios que obtienes al tener una cuenta XandA</p>
                    <input type="submit" Value="Crear cuenta" name="opcion_crear_cuenta" class="inicio_contenedor_iniciarsesion_form_boton_1">
                    <input type="submit" Value="Siguiente" class="inicio_contenedor_iniciarsesion_form_boton_2">
    
                </form>
            </div>
        </div>
    
        </div>';

    }

    if(isset($_POST["opcion_siguiente_crear_cuanta"])){
        echo'<div class="main_inicio">
        <div class="contenedor_inicio_2">
            <div class="inicio_contenedor_imagen_2">
                <img src="Img/logo.png" class="inicio_imagen_2">
            </div>
            <div class="inicio_contenedor_titulo_2">
                <p class="inicio_texto_titulo">Ya casi terminamos</p>
                <p class="inicio_texto_subtitulo">Estás a un paso de tener tu cuenta XandA</p>

            </div>
            <div class="inicio_contenedor_iniciarsesion">
                <form method="POST" class="inicio_contenedor_iniciarsesion_form_2">
                    <input type="text" placeholder="Número de teléfono" name="campo_numero" class="inicio_contenedor_iniciarsesion_form_campo_2">
                    <input type="text" placeholder="Ingresa tu corro nuevamente" name="campo_correoderecuperacion" class="inicio_contenedor_iniciarsesion_form_campo_2">
                    <input type="text" placeholder="Día" name="campo_dia" class="inicio_contenedor_iniciarsesion_form_contrasena_3">
                    <input type="text" placeholder="Mes" name="campo_mes" class="inicio_contenedor_iniciarsesion_form_contrasena_3">
                    <input type="text" placeholder="Año" name="campo_ano" class="inicio_contenedor_iniciarsesion_form_contrasena_3">

                    <input type="submit" Value="Atrás" name="opcion_crear_cuenta" class="inicio_contenedor_iniciarsesion_form_boton_1">
                    <input type="submit" Value="Siguiente" name="opcion_siguiente_crear_cuanta_listo" class="inicio_contenedor_iniciarsesion_form_boton_2">

                </form>
            </div>

            <img src="Img/astronauta4.png" class="inicio_imagen_astronauta_2">
        </div>

    </div>';

    salir();
    }
    
    if(isset($_POST["opcion_crear_cuenta"])){
        echo'<div class="main_inicio">
        <div class="contenedor_inicio_2">
            <div class="inicio_contenedor_imagen_2">
                <img src="Img/logo.png" class="inicio_imagen_2">
            </div>
            <div class="inicio_contenedor_titulo_2">
                <p class="inicio_texto_titulo">Crear tu cuenta XandA</p>
                <p class="inicio_texto_subtitulo">Ten acceso a todos nuestros servicios</p>

            </div>
            <div class="inicio_contenedor_iniciarsesion">
                <form method="POST" class="inicio_contenedor_iniciarsesion_form_2">
                    <input type="text" placeholder="Nombre completo" name="campo_nombre" class="inicio_contenedor_iniciarsesion_form_campo_2">
                    <input type="email" placeholder="Correo electrónico" name="campo_correo" class="inicio_contenedor_iniciarsesion_form_campo_2">
                    <input type="password" placeholder="Contraseña" name="campo_contrasena" class="inicio_contenedor_iniciarsesion_form_contrasena_1">
                    <input type="password" placeholder="Confirmación" name="campo_confirmacion_contrasena" class="inicio_contenedor_iniciarsesion_form_contrasena_2">

                    <input type="submit" Value="Inicia sesión" name="opcion_iniciar_sesion" class="inicio_contenedor_iniciarsesion_form_boton_1">
                    <input type="submit" Value="Siguiente" name="opcion_siguiente_crear_cuanta" class="inicio_contenedor_iniciarsesion_form_boton_2">

                </form>
            </div>

            <img src="Img/astronauta.png" class="inicio_imagen_astronauta">
        </div>

    </div>';

    salir();
    }

    function defecto(){
        echo'<div class="main_inicio">
        <div class="contenedor_inicio">
            <div class="inicio_contenedor_imagen">
                <img src="Img/logo.png" class="inicio_imagen">
            </div>
            <div class="inicio_contenedor_titulo">
                <p class="inicio_texto_titulo">Acceder</p>
                <p class="inicio_texto_subtitulo">Usa tu cuenta de XandA</p>
            </div>
            <div class="inicio_contenedor_iniciarsesion">
                <form method="POST" class="inicio_contenedor_iniciarsesion_form">
                    <input type="email" placeholder="Correo electrónico" class="inicio_contenedor_iniciarsesion_form_campo">
                    <input type="submit" value="Olvidé mi contraseña" class="inicio_contenedor_iniciarsesion_form_olvidemicontrasena">
                    <p class="inicio_contenedor_iniciarsesion_form_subtexto">Consulta los servicios que obtienes al tener una cuenta XandA</p>
                    <input type="submit" Value="Crear cuenta" name="opcion_crear_cuenta" class="inicio_contenedor_iniciarsesion_form_boton_1">
                    <input type="submit" Value="Siguiente" class="inicio_contenedor_iniciarsesion_form_boton_2">
    
                </form>
            </div>
        </div>
    
        </div>';
        }

        defecto();


}


function salir(){
    exit();
}
?>