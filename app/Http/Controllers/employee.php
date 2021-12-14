<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use Excel;
use App\Models\salary;
use App\Imports\SalaryImport;

class employee extends Controller
{
    public function go ()
    {
        
        return view('/demo');
    }

    public function import (Request $req)
    {
        Excel::import(new SalaryImport,$req->file);
        return "record are Imported";
    }

   
}
