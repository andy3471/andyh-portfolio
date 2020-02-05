<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Fruit;
use App\Mail\ContactMe;

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

        $contact = $request;

        Mail::send(new ContactMe($contact));

        return redirect()->back()->with('message', 'Email Sent');
    }
}
