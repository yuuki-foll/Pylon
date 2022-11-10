<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filedata;

class FiledataController extends Controller
{
    public function getFileList()
    {
        $filedatas = Filedata::all();
        return view('filedata', compact('filedatas'));
    }
}
