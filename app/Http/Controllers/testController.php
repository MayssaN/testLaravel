<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    //


    // exemple simple qui permet d'affichier view à partir d'un controlleur 
    public function afficher  () {
        return view('test');
    }


    // une fonction qui retourne donnée vers la page html 
    //les etapes : déclarer un variable , retourne variable avec (with) et na3teha un nom 
    public function index ()
    {
        //1 
        $name="ahmed" ; 
        $age= 20 ; 

        $names = ["ali","ahmed","mayssa"] ; 

        return view ('donnes.index')->with('name',$name)->with('age',$age)->with('names',$names);
    }

}
