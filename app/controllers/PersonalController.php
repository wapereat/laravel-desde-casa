<?php


class Personalcontroller extends BaseController
{
    function getRegistrar($tipo,$nombre)
    {
        if($tipo=="enfermera")
            echo "hola $nombre eres $tipo";
    
    
        if($tipo=="medico")
            echo "hola $nombre eres un $tipo";
        
    }                
        }