<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Cars::all();

        return view('home', ['cars' => $cars]);
    }
}