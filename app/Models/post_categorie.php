<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_categorie extends Model
{
    protected $fillable = ['post_id','categori_id'];
    use HasFactory;
    
}
