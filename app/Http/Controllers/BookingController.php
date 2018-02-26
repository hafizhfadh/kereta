<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use App\Models\Booking;
use App\Models\Customer_ticket;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = Booking::all();
        return view('booking.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booking.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking = new Booking;
        $booking->nama_customer = $request->input('nama_customer');
        $booking->tanggal_pesan = $request->input('tanggal_pesan');
        $booking->nama_kereta= $request->input('nama_kereta');
        $booking->stasiun_keberangkatan = $request->input('stasiun_keberangkatan');
        $booking->stasiun_kedatangan = $request->input('stasiun_kedatangan');
        $booking->waktu_keberangkatan = $request->input('waktu_keberangkatan');
        $booking->waktu_kedatangan = $request->input('waktu_kedatangan');
        $booking->jumlah_tiket = $request->input('jumlah_tiket');
        $booking->tarif_pertiket = $request->input('tarif_pertiket');
        $booking->total_bayar = $request->input('total_bayar');
        $booking->save();

        $uuid4 = Uuid::uuid4();
        $ticket = new Customer_ticket;
        $ticket->id_booking = $booking->id;
        $ticket->token = $uuid4->toString() . "\n";
        $ticket->save();

        return redirect(route('booking.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Booking::findOrFail($id);
        return view('booking.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $booking = Booking::find($id);
        $booking->nama_customer = $request->input('nama_customer');
        $booking->tanggal_pesan = $request->input('tanggal_pesan');
        $booking->nama_kereta = $request->input('nama_kereta');
        $booking->stasiun_keberangkatan = $request->input('stasiun_keberangkatan');
        $booking->stasiun_kedatangan = $request->input('stasiun_kedatangan');
        $booking->waktu_keberangkatan = $request->input('waktu_keberangkatan');
        $booking->waktu_kedatangan = $request->input('waktu_kedatangan');
        $booking->jumlah_tiket = $request->input('jumlah_tiket');
        $booking->tarif_pertiket = $request->input('tarif_pertiket');
        $booking->total_bayar = $request->input('total_bayar');
        $booking->save();

        return redirect('/booking')->with('success', 'Booking Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Booking::find($id);
        $id->delete();
        return redirect('/booking');
    }
}
