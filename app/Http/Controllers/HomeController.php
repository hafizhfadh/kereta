<?php

namespace App\Http\Controllers;

use Charts;
use App\Models\Train;
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
        // $train = Train::where('active', 1)
        //        ->orderBy('name', 'desc')
        //        ->take(10)
        //        ->get();
        // $chart = Charts::multi('bar')
        //     // Setup the chart settings
        //     ->title("Jumlah Kereta")
        //     // A dimension of 0 means it will take 100% of the space
        //     // ->dimensions(0, 400) // Width x Height
        //     // This defines a preset of colors already done:)
        //     ->template("hightchart")
        //     // You could always set them manually
        //     ->colors(['#2196F3', '#F44336', '#FFC107'])
        //     // Setup the diferent datasets (this is a multi chart)
        //     ->dataset('Kereta', $a->id)
        //     // Setup what the values mean
        //     ->labels(['One', 'Two', 'Three']);
        return view('home');
    }
}
