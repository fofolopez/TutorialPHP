<?php

class MvcController{
    
    # LLAMADA A LA PLANTILLA
    public function plantilla(){
        include "vistas/template.php";
    }
    
    # INTERACCION CON EL USUARIO
    public function enlacesPaginasController(){
        
        if(isset($_GET["action"])){
            $enlacesController = $_GET["action"];
        }
        else{
            $enlacesController = "inicio";
        }
        
        $respuesta = EnlacesPagina::enlacesPaginasModel($enlacesController);
        
        include $respuesta;
    }
}