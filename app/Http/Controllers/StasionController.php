<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Illuminate\Http\Request;

class StasionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Station::all();
        return view('station.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('station.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $station = new Station;
        $station->nama_st = $request->input('nama_st');
        $station->kode_st = $request->input('kode_st');
        $station->kota = $request->input('kota');
        $station->alamat_st = $request->input('alamat_st');
        $station->tlp_st= $request->input('tlp_st');
        $station->save();

        return redirect(route('station.index'));
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
      $data = Station::findOrFail($id);
        return view('station.edit')->with('data', $data);
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
        $station = Station::find($id);
        $station->nama_st = $request->input('nama_st');
        $station->kode_st = $request->input('kode_st');
        $station->alamat_st = $request->input('alamat_st');
        $station->kota = $request->input('kota');
        $station->tlp_st = $request->input('tlp_st');
        $station->save();

        return redirect('/station')->with('success', 'Station Updated');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Station::find($id);
        $id->delete();
        return redirect('/station');
    }
}
