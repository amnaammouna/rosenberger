<?php

namespace App\Http\Controllers;
use Itstructure\GridView\DataProviders\EloquentDataProvider;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
     public function example()
    {
        $productions = new EloquentDataProduction(ExampleModel::query());
        return view('example-view', [
            'productions' => $productions
        ]);
    }
}
