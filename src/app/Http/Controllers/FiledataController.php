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

    public function edit_make_file()
    {
        return view('makefile');
    }

    public function save(Request $request)
    {
        $request->validate(
            [
                'file_name' => 'required',
            ]
        );

        Filedata::create(
            [
                'file_name' => $request->file_name,
                'text'      => $request->text,
                'user_id'   => 1,
            ]
        );
        return redirect('/filelist');
    }
}
