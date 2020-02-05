<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

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
