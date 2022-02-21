<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Idee;

class AddideeController extends Controller
{
    function addIdee(Request $req)
    {
        $idee              = new idee;
        $idee->titre       = $req->input('titre');
        $idee->description = $req->input('description');
        $idee->statut      = $req->input('statut');

        $idee->save();

        return $idee;
    }
}
