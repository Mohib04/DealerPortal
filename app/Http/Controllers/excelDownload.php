<?php

namespace App\Http\Controllers;

use App\Exports\dealersExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Dealer;
use Excel;

class excelDownload extends Controller
{
    //
    public function dealerDownload()
    {
        return Excel::download(new dealersExport, 'users.xlsx');
    }

    //Emport
    public function dealerImport(){
        return view('dealer_import');
    }
    //Emport
    public function Import(Request $request){
        $data = Excel::import(new DealerImport,request()->file('file'));

        dd($data); ;

    }
}