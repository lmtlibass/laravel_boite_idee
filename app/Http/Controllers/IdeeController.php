<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idee;

class IdeeController extends Controller
{
    function addidee(Request $req){
        $idee               = new idee;
        $idee->titre       = $req->input('titre');
        $idee->description = $req->input('description');
        $idee->statut      = $req->input('statut');

        $idee->save();

        return response()->json($idee);
        /*  //return $req->titre(''); */
        //return $req->input();
    }
    //  
}

