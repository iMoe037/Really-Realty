<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

// use App\Neighborhood;

class NeighborhoodController extends Controller
{
    public function main_index() 
    {
        $neighborhoods = DB::table('neighborhoods')
                ->whereIn('name', ['bay ridge', 'sunset park', 'bensonhurst', 'red hook', 'financial district', 'greenwich village'])
                ->select('id', 'borough', 'name')
                ->get();
        
        return $neighborhoods;
    }
}
