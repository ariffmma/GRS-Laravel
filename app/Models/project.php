<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $fillable = ['title','short_description','details','thumb','location','year','completion_year','slug','latlong','scale'];
    use HasFactory;
}
