<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Translation\Loader\CsvFileLoader;

class TestController extends Controller
{
    //
    public function upload(Request $request){
        $path = $request->file('csv_file')->getRealPath();
        $data = array_map('str_getcsv', file($path));
        $csv_data = array_slice($data, 0, 17);

        //dd($csv_data);
        return view('import_fields', compact('csv_data'));
        
    }
}
