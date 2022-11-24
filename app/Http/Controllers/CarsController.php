<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarsController extends Controller
{
    public function index(){
        $cars = Car::all();

        return view('cars',compact('cars'));
    }
}
