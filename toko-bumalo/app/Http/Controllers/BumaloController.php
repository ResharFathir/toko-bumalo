<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BumaloController extends Controller
{
    public function index()
    {
        return view('bumalo.index');
    }
}