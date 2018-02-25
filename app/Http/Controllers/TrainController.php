<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Models\Train;
use App\Libraries\General;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
      // $this->middleware('auth',['except' => ['index', 'show']]);
    }

    public function index()
    {
      $train = Train::all();
        return view('train.index', compact('train'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('train.create', compact('train'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'train_name' => 'required|unique:trains|max:255',
          'exec_seat' => 'required',
          'bus_seat' => 'required',
          'eco_seat' => 'required',
          'price' => 'required'
      ]);

      // Create Train
        $train = Train::create($request->all());

        return redirect('/train')->with('success', 'Train Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $train = Train::findOrFail($id);
      return view('train.edit', compact('train'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $train = Train::findOrFail($id);
        return view('train.edit', compact('train'));
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

      $this->validate($request, [
          'train_name' => 'required',
          'exec_seat' => 'required',
          'bus_seat' => 'required',
          'eco_seat' => 'required',
          'price' => 'required'
      ]);

      // Update Train
        $train = Train::find($id)->update($request->all());

        return redirect('/train')->with('success', 'Post Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $train = Train::find($id);
      $train->delete();
      return redirect(route('train.index'))->with('success', 'Kereta'.$train->train_name.'Berhasil Di Hapus');
    }
}
