<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiasController extends Controller
{
    public function lista(){
        $noticias = Noticia::all();

        $argumentos = array();
        $argumentos["noticias"] = $noticias;

        return view("noticias.lista", $argumentos);
    }

    public function detalles($id){
        $noticia = Noticia::find($id);
        
        //Simulacion de solicitud de detalles de noticia
        /*
        $detalles_noticia = array();
        $detalles_noticia["titulo"] = "Noticia #". $noticia;
        $detalles_noticia["autor"] = "Autor de la noticia #" . $noticia;
        $detalles_noticia["fecha"] = "28/01/21";
        $detalles_noticia["cuerpo"] = "Este es el texto de la noticia #" . $noticia;
        $detalles_noticia["foto"] = "https://i.ytimg.com/vi/9Thjhu4Pz7Q/maxresdefault.jpg";
        

        
        */
        
        $argumentos= array();
        $argumentos["noticia"] = $noticia;
        return view('noticias.detalles', $argumentos);
    }
}
