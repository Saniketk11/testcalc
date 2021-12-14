<?php

namespace App\Imports;

use App\Models\salary;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SalaryImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new salary([
         
            'firstname' => $row['firstname'],
            'currentsalary' => $row['currentsalary'],
            'performance' => $row['performance'],
            'rating' => $row['rating'],
            'cr' => $row['cr'],
            'crgrouping' => $row['crgrouping'],
            
        ]);
    }
}
