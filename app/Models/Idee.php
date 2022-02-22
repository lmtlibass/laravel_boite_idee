<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idee extends Model
{
    protected $table    = 'idee';
    protected $filable  = ['titre', 'description','statut'];
    public $timestamps = false;
    
}
