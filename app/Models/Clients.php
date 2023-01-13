<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;


    //specify the table
    protected $table = "client";

    //specify the columns
    protected $fillable = ['nom','prenom','email'];

    //In case we didn't name our primary key 'id', LARAVEL will shows an error, we will need to specify it here
    // protected $primaryKey = "client_id";

    //Remove the default timestamp columns
    public $timestamps = false;



}
