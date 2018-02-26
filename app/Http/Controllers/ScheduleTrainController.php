<?php

namespace App\Http\Controllers;

use App\Models\Train_Schedule;
use Illuminate\Http\Request;

class ScheduleTrainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Train_Schedule::all();
        return view('schedule_train.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schedule_train.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $train_schedule = new Train_Schedule;
        $train_schedule->nama_kereta = $request->input('nama_kereta');
        $train_schedule->stasiun_keberangkatan = $request->input('stasiun_keberangkatan');
        $train_schedule->waktu_keberangkatan = $request->input('waktu_keberangkatan');
        $train_schedule->stasiun_kedatangan = $request->input('stasiun_kedatangan');
        $train_schedule->waktu_kedatangan = $request->input('waktu_kedatangan');
        $train_schedule->waktu_yang_ditempuh = $request->input('waktu_yang_ditempuh');
        $train_schedule->save();

        return redirect(route('train_schedule.index'));
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
        $data = train_schedule::findOrFail($id);
        return view('schedule_train.edit')->with('data', $data);
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
        $train_schedule = Train_Schedule::find($id);
        $train_schedule->nama_kereta = $request->input('nama_kereta');
        $train_schedule->stasiun_keberangkatan = $request->input('stasiun_keberangkatan');
        $train_schedule->waktu_keberangkatan = $request->input('waktu_keberangkatan');
        $train_schedule->stasiun_kedatangan = $request->input('stasiun_kedatangan');
        $train_schedule->waktu_kedatangan = $request->input('waktu_kedatangan');
        $train_schedule->waktu_yang_ditempuh = $request->input('waktu_yang_ditempuh');
        $train_schedule->save();

        return redirect('/train_schedule')->with('success','Train_Schedule Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Train_Schedule::find($id);
        $id->delete();
        return redirect('/train_schedule');
    }
}
