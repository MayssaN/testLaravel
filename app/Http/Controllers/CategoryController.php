<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{


    // permet d'affichier la page html categorie et d'ajouter la données à l'aide d'un code html 

    public function showFormCategory()
    {
             return view('categorie/Form');
    }


    // permet d'ajouter les données dans la base de données sans utiliser un formulaire 
    public function AddCategory(Request $request)
    {
        //traitement d'ajout  

           // valider les champs (nom c'est le name dans le champs html description aussi )
        $request->validate([
            'nom'=>'required' ,
            'desc'=>'required' ,
        ]) ;

        $c = new Category();
        $c->name = $request->nom ;
        $c->description =  $request->desc ;
        // isajeli categorie fi base de données w izidni categorie 

        if ( $c->save()) 
        {
            //return 'ajouter avec succées ';
                    return redirect('/category/list') ;

        }else{

            return 'erreur d\'ajout ';

        }
      
        
    }
  

    // fonction qui permet d'affichier la liste des catégories
       public function listCategory()
       {

           $categories =  Category::all();
         

        return view ('categorie/liste')->with('listecategories',$categories);

 
       }






}
