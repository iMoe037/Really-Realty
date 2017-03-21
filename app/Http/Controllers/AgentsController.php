<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Agent;

class AgentsController extends Controller
{
    public function index()
    {
        $agents = Agent::all();
        return $agents;
    }
}
