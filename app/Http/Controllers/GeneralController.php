<?php

namespace App\Http\Controllers;
use Itstructure\GridView\DataProviders\EloquentDataProvider;

use Illuminate\Http\Request;
use App\Production;
use DataTables;

class GeneralController extends Controller
{
     public function index(Request $request)
    {
   
            $listproduction = Production::all();
                
                return view('generalle', ['productions' => $listproduction]);
                
    }
}
