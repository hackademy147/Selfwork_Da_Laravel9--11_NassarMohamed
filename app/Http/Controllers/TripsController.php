<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use App\Http\Requests\TripRequest;
use App\Http\Controllers\TripsController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class TripsController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('auth', except: ['index']),
        ];
    }
    public function create(){
        return view('CreateTrips');
    }

    public function store(TripRequest $request){
       $trip= Trip::create([
        'username'=>$request->username,
        'titolo'=>$request->title
        ]);
    return redirect(route('home'))->with('success','viaggio inserito');
}

public function index(){
    $trips= Trip::all();
    return view('trip.index', compact('trips'));
}



}
