<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cars;



class CarsController extends Controller
{
    
    // Get all cars
    public function index()
    {
        $cars = Cars::with(['specifications','colors'])
            ->where('active_position','>',0)
            ->orderBy('active_position', 'asc')
            ->get();
       
        

        return Inertia::render('Welcome', [
            'cars' => $cars,
            'name' => 'Inicio'
        ]);
    }

    // Get individual car



    //Add Car


    // Edit Car



}
