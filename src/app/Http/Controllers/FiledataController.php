<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filedata;
use Illuminate\Support\Facades\Auth;

class FiledataController extends Controller
{
    public function getFileList(Request $request)
    {
        $isDatetimeSort = unserialize($request->get('sort'));
        
        if ($isDatetimeSort) {
            $filedatas = Filedata::where('user_id', Auth::id())
                ->orderBy('updated_at', 'asc')
                ->get();
        } else {
            $filedatas = Filedata::where('user_id', Auth::id())
                ->orderBy('file_name', 'asc')
                ->get();
        }
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
