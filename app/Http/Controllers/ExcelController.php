<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;
use App\Booking;

class ExcelController extends Controller
{
    public function export()

	{

		return view('export');

	}

	public function downloadExcel($type)

	{

		$dta =DB::table('bookings')
		->join('customers', 'bookings.nama_customer','=','customers.nama_customer')
		->select('bookings.*', 'customers.telp_customer')->get();
		$datas= Booking::get();
		// $data = array($dta);
		$datas[0]->no_telp = $dta[0]->telp_customer;
		$datas->toArray();
		return Excel::create('Data Booking', function($excel) use ($datas) {

			$excel->sheet('mySheet', function($sheet) use ($datas)

	        {

				$sheet->fromArray($datas);

	        });

		})->download($type);

	}
	

	

}

