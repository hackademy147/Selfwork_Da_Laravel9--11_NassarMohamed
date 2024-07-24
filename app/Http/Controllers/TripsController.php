<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use App\Http\Requests\TripRequest;
use Illuminate\Support\Facades\Auth;
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
        return view('trip.CreateTrips');
    }

    public function store(TripRequest $request){
       $trip= Trip::create([
        'username'=>$request->username,
        'titolo'=>$request->title,
        'partenza'=>$request->departure,
        'arrivo'=>$request->arrive,
        'user_id'=>Auth::user()->id,
        ]);
    return redirect(route('home'))->with('success','viaggio inserito');
}

    public function index(){
    $trips= Trip::all();
    return view('trip.index', compact('trips'));
    }
    
    public function show(Trip $trip){
    return view('trip.show', compact('trip'));
    }

    public function edit(Trip $trip){
        return view('trip.edit', compact('trip'));
        }

    public function update( Trip $trip, TripRequest $request){
    
        //$trip= Trip::update
        $trip->update([
            'username'=>$request->username,
            'titolo'=>$request->title,
            'partenza'=>$request->departure,
            'arrivo'=>$request->arrive,
            'user_id'=>Auth::user()->id
            ]);

            return redirect(route('trip.show', $trip))->with('Done','viaggio modificato');
}

    public function destroy(Trip $trip){
        $trip->delete();
        return redirect(route('trip.index', $trip))->with('gameDeleted','viaggio eliminato');
    }
}