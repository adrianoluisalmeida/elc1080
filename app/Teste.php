<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\HybridRelations;
//use Illuminate\Support\Facades\DB;

class Teste extends Model
{

    use HybridRelations;


//    public static function getAll(){
//
//        $users = DB::collection('testes')->get();
//    }
}
