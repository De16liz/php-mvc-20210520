<?php

//Aquí la vista.
include( "Sesiones.php" );
Sesiones::verificar_sesion();

$seccion = "v_seccion_buscar_persona.php";

include( "v-plantilla.php" );