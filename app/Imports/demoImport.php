<?php

namespace App\Imports;
use Excel;
use App\Models\meritmatrix;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class demoImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new meritmatrix([
            'rating' => $row['rating'],
            'grouping' => $row['grouping'],
            'persentage' => $row['persentage'],
        ]);
    }
}
