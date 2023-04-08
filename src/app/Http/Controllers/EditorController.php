<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class EditorController extends Controller
{
    public function index()
    {
        return view('editor');
    }

    public function store(Request $request)
    {
        echo $request->input('editor');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
           
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

           
            $extension = $request->file('upload')->getClientOriginalExtension();

           
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            
            $request->file('upload')->storeAs('public/uploads', $filenametostore);
            

            echo json_encode([
                'default' => asset('storage/uploads/' . $filenametostore),
                
            ]);
        }
    }
}
