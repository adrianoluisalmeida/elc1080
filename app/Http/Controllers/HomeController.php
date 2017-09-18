<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teste;

class HomeController extends Controller
{
    public function index(){

       dd(Teste::find(1));
    }
}
