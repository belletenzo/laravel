<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function productList(){
        return "Listes des produits";
    }

    public function detailedProduct($id){
        return "Fiche du produit ".$id;
    }
}
