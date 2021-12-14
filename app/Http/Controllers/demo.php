<?php

namespace App\Http\Controllers;

use App\Imports\demoImport;
use Excel;
use App\Imports\MeritmatrixImport;
use Illuminate\Http\Request;

class demo extends Controller
{
    public function go2()
    {
        return view("/demo2");
    }

   
    public function import2(Request $req)
    {
        Excel::import (new demoImport,$req->file2);
        return "record are Imported";
    }

}
