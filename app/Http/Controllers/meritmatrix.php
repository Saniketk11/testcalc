<?php

namespace App\Http\Controllers;
use Excel;
use App\Imports\MeritmatrixImport;

use Illuminate\Http\Request;

class meritmatrix extends Controller
{
    public function go2()
    {
        return view("/demo2");
    }

    public function import2(Request $req)
    {
        Excel::import2(new MeritmatrixImport,$req->file2);
        return "record inserted";
    }
}
