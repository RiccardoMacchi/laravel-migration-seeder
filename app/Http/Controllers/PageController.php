<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        // where('departure_day','>','CURRENTDATE')
        $all_trains = Train::where('departure_day','>', Train::raw('CURDATE()'))->get();
        return view('home', compact('all_trains'));
    }

    public function allTrains(){
        // where('departure_day','>','CURRENTDATE')
        $all_trains = Train::all();
        return view('home', compact('all_trains'));
    }

    public function enterpriseTrains(){
        // where('departure_day','>','CURRENTDATE')
        $all_trains = Train::orderBy('enterprise')->get();
        return view('home', compact('all_trains'));
    }

}
