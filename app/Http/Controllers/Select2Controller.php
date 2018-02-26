<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class Select2Controller extends Controller
{
  public function train(Request $request)
  {
    $data = [];


      if($request->has('q')){
          $search = $request->q;
          $data = DB::table("trains")
              ->select("id","train_name")
              ->where('train_name','LIKE',"%$search%")
              ->get();
      } else {
        $data = DB::table("trains")
            ->select("id","train_name")
            ->get();
      }


      return response()->json($data);
  }

  public function station(Request $request)
  {
    $data = [];

      if($request->has('q')){
          $search = $request->q;
          $data = DB::table("stations")
              ->select("id","nama_st")
              ->where('nama_st','LIKE',"%$search%")
              ->get();
      } else {
        $data = DB::table("stations")
            ->select("id","nama_st")
            ->get();
      }


      return response()->json($data);
  }

  public function schedule(Request $request)
  {
    $data = [];

      if($request->has('q')){
          $search = $request->q;
          $data = DB::table("schedule_trains")
              ->select("id","stasiun_keberangkatan")
              ->where('stasiun_keberangkatan','LIKE',"%$search%")
              ->get();
      } else {
        $data = DB::table("schedule_trains")
            ->select("id","stasiun_keberangkatan")
            ->get();
      }


      return response()->json($data);
  }
}
