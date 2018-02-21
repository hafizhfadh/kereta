<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Train;
use App\Models\Wagon;
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
      $train = Train::with('wagons')->get();
      // foreach ($train as $a) {
      //   return $a->wagons[0]->train_id;
      // }
        return view('train.index', compact('train'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enum = General::getEnumValues('wagons', 'class');
        return view('train.create', compact('enum', 'train'));
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
          'class' => 'required',
          'price' => 'required',
          'seat' => 'required',
          'wagon' => 'required'
      ]);

      // Create Train
        $train = new Train();
        $train->train_name = $request->input('train_name');
        $train->save();

      // Create Wagon
        for ($b=0; $b < $request->input('wagon'); $b++) {
          $wagon = Wagon::create([
            'class' => $request->input('class'),
            'price' => $request->input('price'),
            'seat' => $request->input('seat'),
            'train_id' => $train->id,
          ]);
        }

        return redirect('/train')->with('success', 'Post Created');
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
      $enum = General::getEnumValues('wagons', 'class');
        $train = Train::findOrFail($id);
        return view('train.edit', compact('train', 'enum'));
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
        //
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
