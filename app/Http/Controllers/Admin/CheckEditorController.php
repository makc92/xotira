<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;

class CheckEditorController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            //get filename with extension

            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            //image resize
            $img = Image::make($request->file('upload'));
            $img->widen(800, function ($constraint) {
                $constraint->upsize();
            });
            $img->save(storage_path('app/public/images/checkeditor/' . $filenametostore));

            //Upload File
            /*$request->file('upload')->storeAs('images/checkeditor', $filenametostore);*/


            $CKEditorFuncNum = $request->input('CKEditorFuncNum');

            $url = asset('storage/images/checkeditor/' . $filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
}
