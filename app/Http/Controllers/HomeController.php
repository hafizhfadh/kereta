<?php

namespace App\Http\Controllers;

use Carbon;
use Charts;
use App\Models\Train;
use Ramsey\Uuid\Uuid;
use App\Models\Station;
use App\Models\Booking;
use App\Models\Customer_ticket;
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
       $this->middleware(['auth','isVerified'])->except(['welcome','store']);
     }

     public function welcome()
     {
       return view('welcome');
     }

     public function store(Request $request)
     {
       $mytime = Carbon\Carbon::now();
       $price = Train::select('*')
                      ->where('train_name',$request->input('nama_kereta'))
                      ->with('seat')
                      ->get();
         $booking = new Booking;
         $booking->nama_customer = $request->input('nama_customer');
         $booking->tanggal_pesan = $mytime->toDateString();
         $booking->nama_kereta= $request->input('nama_kereta');
         $booking->stasiun_keberangkatan = $request->input('stasiun_keberangkatan');
         $booking->stasiun_kedatangan = $request->input('stasiun_kedatangan');
         $booking->waktu_keberangkatan = $request->input('waktu_keberangkatan');
         $booking->waktu_pulang = $request->input('waktu_pulang');
         $booking->jumlah_tiket = $request->input('jumlah_tiket');
         $booking->tarif_pertiket = $price[0]->seat->price;
         $booking->total_bayar = $request->input('total_bayar');
         $booking->save();

         $uuid4 = Uuid::uuid4();
         $ticket = new Customer_ticket;
         $ticket->id_booking = $booking->id;
         $ticket->token = $uuid4->toString() . "\n";
         $ticket->save();

         return redirect(route('ticket', $ticket->id));
     }

     public function ticket($id)
     {
       $ticket = Customer_ticket::find($id);
       return view('ticket', compact('ticket'));
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
