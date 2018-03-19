<?php

class EnlacesPagina{
    
    public function enlacesPaginasModel($enlacesModel){
        
        if ($enlacesModel == "nosotros" ||
            $enlacesModel == "servicios" ||
            $enlacesModel == "contactenos" ){
            
            $module = "vistas/modulos/".$enlacesModel.".php";
        }
        elseif ($enlacesModel == "inicio") {
            $module = "vistas/modulos/inicio.php";
        }
        else {
            $module = "vistas/modulos/inicio.php";
        }
        
        return $module; 
    }
}

?>