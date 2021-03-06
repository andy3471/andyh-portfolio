<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Fruit;
use App\Mail\ContactMe;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function v1()
    {
        return view('v1');
    }

    public function fruitSearch($search)
    {
        $fruit = Fruit::where('name', 'like', '%' . $search . '%')->limit(5)->get();

        return $fruit;
    }

    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'email|required',
            'message' => 'required',
        ]);

        $contact = $request;

        Mail::send(new ContactMe($contact));

        return 'Email Sent';
    }
}
