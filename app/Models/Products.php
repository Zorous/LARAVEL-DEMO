<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    //Specifying the table
    protected $table = "products";  

    protected $fillable = ["nom", "description", "prix","image","category"];

    public $timestamps = false;
}
