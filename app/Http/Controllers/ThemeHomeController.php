<?php

namespace App\Http\Controllers;

use App\Iller;
use Illuminate\Http\Request;

class ThemeHomeController extends Controller
{
    public function view() {
        return view('theme.home');
    }
}
