<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function fruitSearch($search)
    {
        $fruit = collect([
            'Apple',
            'Banana'
        ]);


        return $fruit->where($search);
    }
}
