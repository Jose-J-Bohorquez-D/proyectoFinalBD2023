<?php

    require_once("Controladores/Controlador.Mvc.php");
    require_once("Controladores/Controlador.Usuarios.php");

    require_once("Modelos/Modelo.Mvc.php");
    require_once("Modelos/Modelo.Usuarios.php");

    $mvc=new MvcCtlr; 
    
    $mvc->llamando_plantilla_ctlr();

?>