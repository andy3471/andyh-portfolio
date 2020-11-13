<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LunchRotaVersionController extends Controller
{
    public function checkAlert() {
        return 'Warning! This version of rota is no longer supported. Please switch to the Community Edition, on github.com/andy3471/lunchrota-ce or visit andyh.app/lunchrota for information on purchasing a support licence.';
    }
}
