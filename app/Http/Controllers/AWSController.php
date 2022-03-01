<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AWSController extends Controller
{
    
    public function layout(Type $var = null)
    {
        return view('layout');
    }
    
    public function AWS(Request $request)
    {
        $request->file('berkas');
        dd($request);

        return redirect()->back();
    }
}
