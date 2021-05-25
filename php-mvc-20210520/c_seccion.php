<?php

    include( "Consultas.php" );
    include( "Vimprimir.php" );

    include( "Sesiones.php" );
    Sesiones::verificar_sesion();

    $r = Consultas::consultar_personas();
    $r = Vimprimir::imprimir( $r );

    //Aquí la vista.
    $seccion = "v_seccion.php" ;

    include( "v-plantilla.php" );
