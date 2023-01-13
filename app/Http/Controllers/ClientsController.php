<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Clients;

class ClientsController extends Controller
{
    //

    public function index(){
        $clients = Clients::all();
        return view('Clients.index',['clients' => $clients]);
    }
}
