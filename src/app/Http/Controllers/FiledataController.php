<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filedata;
use Illuminate\Support\Facades\Auth;

class FiledataController extends Controller
{
    public function getFileList()
    {
        $filedatas = Filedata::all()->where('user_id', Auth::id());
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
                'user_id'   => Auth::id(),
            ]
        );
        return redirect('/filelist');
    }
}
