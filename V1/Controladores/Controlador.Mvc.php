<?php

    #aca se van a gestionar todas las interacciones de la vista
    class MvcCtlr 
    {
        #llamada a la plantilla
        public function llamando_plantilla_ctlr()
        {
            require_once("Vistas/Plantilla.php");
        }

        #interaccion del usuario con las vistas o redirecciones
        public function enlaces_paginas_ctlr()
        {
            if (isset($_GET['act'])) {
                $enlaces_ctlr = $_GET['act'];
            }else{
                $enlaces_ctlr = "index";
            }
            #var_dump($enlaces); #test
            $rta = MvcMdl::enlaces_paginas_mdl($enlaces_ctlr);
            #var_dump($rta); #test
            include_once $rta;
        }
    }

?>