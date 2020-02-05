<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Fruit;

class PageController extends Controller
{
    public function fruitSearch($search)
    {
        $fruit = Fruit::where('name', 'like', '%' . $search . '%')->limit(5)->get();

        return $fruit;
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|required',
            'message' => 'required',
        ]);

        return $request;
    }
}
