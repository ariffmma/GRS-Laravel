<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_form extends Model
{
    protected $fillable= ['name','email','message','categori'];
    use HasFactory;
}
