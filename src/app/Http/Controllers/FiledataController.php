<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filedata;

class FiledataController extends Controller
{
    public function index()
    {
        $filedatas = Filedata::all();
        return view('filedata', compact('filedatas'));
    }

    public function make()
    {
        return view('makefile');
    }

    public function regist(Request $request)
    {
        $request->validate(
            [
                'file_name' => 'required',
                'text' => 'required',
            ]
        );

        $newfile = new Filedata();
        $newfile->file_name = $request->file_name;
        $newfile->text = $request->text;
        $newfile->user_id = 1;
        $newfile->save();
        return redirect('/filelist');
    }
}
