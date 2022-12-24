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

    public function editMakeFile(Request $request)
    {
        $UserId = $request->input('user_id');
        $Id = (int)$request->input('id');
        if (isset($Id)) {
            $filedata = Filedata::where('id', $Id)->first();
            return view('makefile', compact('filedata'));
        } else {
            return view('makefile');
        }
    }

    public function save(Request $request)
    {
        $request->validate(
            [
                'file_name' => 'required',
            ]
        );
        if ($request->has('file_id')) {
            $Id = (int)$request->file_id;
            $data = Filedata::where('id', $Id)->first();
            $data->file_name = $request->file_name;
            $data->text = $request->text;
            $data->save();
        } else {
            Filedata::create(
                [
                    'file_name' => $request->file_name,
                    'text'      => $request->text,
                    'user_id'   => Auth::id(),
                ]
            );
        }
        return redirect('/filelist');
    }
}
