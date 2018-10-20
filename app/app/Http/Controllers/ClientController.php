<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clientes = Client::where('user_id', auth()->user()->id)->get();
        
        return view('client', compact('clientes'));
    }
}
