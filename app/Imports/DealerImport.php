<?php

namespace App\Imports;

use App\Models\Dealer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withHeadingRow;

class DealerImport implements ToModel, withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Dealer([
            //
            'company' =>$row['compnay'],
            'name'=>$row['name'],
            'area'=>$row['area'],
        ]);
    }
}
