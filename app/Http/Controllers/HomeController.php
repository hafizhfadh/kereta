<?php

namespace App\Http\Controllers;

use Charts;
use App\Models\Train;
use App\Models\Station;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
       $this->middleware(['auth','isVerified']);
     }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $train = Train::all();
        $station = Station::all();
        $chart = Charts::create('pie', 'google')
                      ->title('Data Kereta')
                      ->labels(['Jumlah Kereta', 'Jumlah Stasiun'])
                      ->values([$train->count(), $station->count()])
                      ->dimensions(1000,500)
                      ->responsive(true);
        return view('home', compact('chart'));
    }
}
