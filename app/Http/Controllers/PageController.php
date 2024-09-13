<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        // where('departure_day','>','CURRENTDATE')
        $all_trains = Train::where('departure_day','>', Train::raw('CURDATE()'))->orderBy('departure_day')->get();
        $title = 'Treni Odierni';
        return view('home', compact('all_trains','title'));
    }

    public function allTrains(){
        // where('departure_day','>','CURRENTDATE')
        $all_trains = Train::all();
        $title = 'Registro di tutti i treni';
        return view('home', compact('all_trains','title'));
    }

    public function enterpriseTrains(){
        // where('departure_day','>','CURRENTDATE')
        $all_trains = Train::orderBy('enterprise')->get();
        $title = 'Treni per Compagnie';
        return view('home', compact('all_trains','title'));
    }

}
