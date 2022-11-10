<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filedata;

class FiledataController extends Controller
{
    public function index()
    {
        $filedatas = Filedata::all();
        return view('filedata',compact('filedatas'));
    }
}
