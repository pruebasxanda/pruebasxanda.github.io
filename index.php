<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IA</title>
    <link rel="stylesheet" href="Css/main3.css">
</head>
<body>
    <div class="main">

        <div class="contenedor_1">
            <div class="contenedor_2_encabezado">
            
            </div>
            <div class="contenedor_2_chat">
                <div class="contenedor_1_chat_contactos">
                    <img src="Img/modelo.jpg" class="contenedor_1_chat_contactos_imagen">
                    <div class="contenedor_1_chat_contactos_campotexos">
                        <p class="contenedor_1_chat_contactos_texos_1">Cristina</p>
                        <p class="contenedor_1_chat_contactos_texos_2">Ingeniera en sistemas computacionales</p>
                        <p class="contenedor_1_chat_contactos_texos_3">21 años</p>
                        <p class="contenedor_1_chat_contactos_texos_3">Cancer</p>
                        <p class="contenedor_1_chat_contactos_texos_3">Soltera</p>

                    </div>
                </div>
            </div>
            <div class="contenedor_2_inferior">
            
            </div>
        </div>

        <div class="contenedor_2">
            <div class="contenedor_2_encabezado">
            
            </div>
            <div class="contenedor_2_chat">
            
            </div>
            <div class="contenedor_2_inferior">
                <form method="post" class="contenedor_2_form">
                    <input type="text" placeholder="Mensaje" name="opcion_campo" class="sistema_de_mensajes_campo">

                    <div class="contenedor_2_form_opciones">
                        <input type="submit" Value="+" name="opcion_mas" class="sistema_de_mensajes_submit">
                        <input type="submit" Value=">" name="opcion_mayormenor" class="sistema_de_mensajes_submit">
                        <input type="submit" Value="-" name="menos" class="sistema_de_mensajes_submit">
                        <input type="submit" Value="<" name="opcion_nemormayor" class="sistema_de_mensajes_submit">
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>
</html>

<?php

    if(isset($_POST["opcion_mas"])){


    $varcampo=$_POST['opcion_campo'];

    $vardefecto1 = 'hola';
    $vardefecto1_1 = 'Hola';
    $vardefecto1_2 = 'HOLA';

    $vardefecto2 = 'como estas';
    $vardefecto2_1 = '¿Cómo estás?';
    $vardefecto2_2 = 'Como estas?';
    $vardefecto2_3 = 'como estas?';
    $vardefecto2_4 = 'Como estás?';
    $vardefecto2_5 = 'como estás?';
    $vardefecto2_6 = '¿cómo estás?';
    $vardefecto2_7 = '¿Cómo estas?';
    $vardefecto2_8 = '¿Como estás?';
    $vardefecto2_9 = '¿como estás?';
    $vardefecto2_10 = '¿cómo estas?';

    $asiel = 'mal';

    if($varcampo==$vardefecto1 || $varcampo==$vardefecto1_1 || $varcampo==$vardefecto1_2){
        

        $lista_array=array('Hola','Hola, que tal','Hola, ¿Cómo estás?','Hola Asiel','Hola :3','ssas','e');
        $random_keys=array_rand($lista_array,2);
            $x=$lista_array[$random_keys[0]];
            $y=$lista_array[$random_keys[1]];



        echo'<div class="main">

        <div class="contenedor_1">
            <div class="contenedor_2_encabezado">
            
            </div>
            <div class="contenedor_2_chat">
                <div class="contenedor_1_chat_contactos">
                    <img src="Img/modelo.jpg" class="contenedor_1_chat_contactos_imagen">
                    <div class="contenedor_1_chat_contactos_campotexos">
                        <p class="contenedor_1_chat_contactos_texos_1">Cristina</p>
                        <p class="contenedor_1_chat_contactos_texos_2">Ingeniera en sistemas computacionales</p>
                        <p class="contenedor_1_chat_contactos_texos_3">21 años</p>
                        <p class="contenedor_1_chat_contactos_texos_3">Cancer</p>
                        <p class="contenedor_1_chat_contactos_texos_3">Soltera</p>

                    </div>
                </div>
            </div>
            <div class="contenedor_2_inferior">
            
            </div>
        </div>

        <div class="contenedor_2">
            <div class="contenedor_2_encabezado">
            
            </div>
            <div class="contenedor_2_chat_2">
            <div class="contenedor_mensaje_yo">
                <div class="mensaje_yo">
                    <p>'.$varcampo.'</p>
                </div>
            </div>

                <div class="contenedor_mensaje_chica">
                    <div class="mensaje_chica">
                        <p>'.$x.'</p>
                    </div>
                </div>
            </div>
            <div class="contenedor_2_inferior">
                <form method="post" class="contenedor_2_form">
                    <input type="text" placeholder="Mensaje" name="opcion_campo_dentro" class="sistema_de_mensajes_campo">

                    <div class="contenedor_2_form_opciones">
                        <input type="submit" Value="+" name="opcion_mas_dentro" class="sistema_de_mensajes_submit">
                        <input type="submit" Value=">" name="opcion_mayormenor" class="sistema_de_mensajes_submit">
                        <input type="submit" Value="-" name="menos" class="sistema_de_mensajes_submit">
                        <input type="submit" Value="<" name="opcion_nemormayor" class="sistema_de_mensajes_submit">
                    </div>
                </form>
            </div>
        </div>

    </div>';
    

   }


   if($varcampo==$vardefecto2 || $varcampo==$vardefecto2_1 || $varcampo==$vardefecto2_2 || $varcampo==$vardefecto2_3 || $varcampo==$vardefecto2_4 || $varcampo==$vardefecto2_5 || $varcampo==$vardefecto2_6 || $varcampo==$vardefecto2_7 || $varcampo==$vardefecto2_8 || $varcampo==$vardefecto2_9 || $varcampo==$vardefecto2_10){

    $lista_array=array('Bien','Muy bien gracias','Estoy muy bien','bien ¿Y tú?','Me encuentro bien ¿Qué hay de ti?', 'Estoy bien, gracias', 'Muy bien ¿Y tú?', 'Bien ¿Qué hay de ti', 'Estoy bien, gracias por preguntar :3', 'Estoy bien, gracias por preguntar :3 ¿Y tú cómo estás?, .');
    $random_keys=array_rand($lista_array,2);
        $x=$lista_array[$random_keys[0]];
        $y=$lista_array[$random_keys[1]];



    echo'<div class="main">

    <div class="contenedor_1">
        <div class="contenedor_2_encabezado">
        
        </div>
        <div class="contenedor_2_chat">
            <div class="contenedor_1_chat_contactos">
                <img src="Img/modelo.jpg" class="contenedor_1_chat_contactos_imagen">
                <div class="contenedor_1_chat_contactos_campotexos">
                    <p class="contenedor_1_chat_contactos_texos_1">Cristina</p>
                    <p class="contenedor_1_chat_contactos_texos_2">Ingeniera en sistemas computacionales</p>
                    <p class="contenedor_1_chat_contactos_texos_3">21 años</p>
                    <p class="contenedor_1_chat_contactos_texos_3">Cancer</p>
                    <p class="contenedor_1_chat_contactos_texos_3">Soltera</p>

                </div>
            </div>
        </div>
        <div class="contenedor_2_inferior">
        
        </div>
    </div>

    <div class="contenedor_2">
        <div class="contenedor_2_encabezado">
        
        </div>
        <div class="contenedor_2_chat_2">
        <div class="contenedor_mensaje_yo">
            <div class="mensaje_yo">
                <p>'.$varcampo.'</p>
            </div>
        </div>

            <div class="contenedor_mensaje_chica">
                <div class="mensaje_chica">
                    <p>'.$x.'</p>
                </div>
            </div>
        </div>
        <div class="contenedor_2_inferior">
            <form method="post" class="contenedor_2_form">
                <input type="text" placeholder="Mensaje" name="opcion_campo" class="sistema_de_mensajes_campo">

                <div class="contenedor_2_form_opciones">
                    <input type="submit" Value="+" name="opcion_mas" class="sistema_de_mensajes_submit">
                    <input type="submit" Value=">" name="opcion_mayormenor" class="sistema_de_mensajes_submit">
                    <input type="submit" Value="-" name="menos" class="sistema_de_mensajes_submit">
                    <input type="submit" Value="<" name="opcion_nemormayor" class="sistema_de_mensajes_submit">
                </div>
            </form>
        </div>
    </div>

</div>';


}


}

?>
