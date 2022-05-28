<?php

namespace App\Exports;

use App\Models\Dealer;
use Maatwebsite\Excel\Concerns\FromCollection;

class dealersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Dealer::all();
    }
}
