<?php

namespace App\Imports;

use App\Models\meritmatrix;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MeritmatrixImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new meritmatrix([
            'Performance Rating' => $row['Performance Rating'],
            'CR Grouping' => $row['CR Grouping'],
            'Inc Percentage' => $row['Inc Percentage'],
           
        ]);
    }
}
