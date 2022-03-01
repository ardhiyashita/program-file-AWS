<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\File as HttpFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Exists;
use League\Flysystem\AwsS3v3\AwsS3Adapter;

class UploadController extends Controller
{
    
    public function uploadPage(Type $var = null)
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        if($request->file('berkas')){
            $berkas = $request->file('berkas');
            $destinationPath = 'folderFile';
            $berkasLokal = $destinationPath."/".$berkas->getClientOriginalName();            
            $berkas->move($destinationPath, $berkasLokal);
        }
        dd($request);
    
        return redirect()->back();
    }

    public function uploadAWS(Request $request)
    {
        if($request->file('berkas')){
            $berkas = $request->file('berkas');
            $destinationPath = 'folderFile';
            $filename = $destinationPath."/".$berkas->getClientOriginalName();

            if (file_exists($filename)) {
                FacadesFile::delete($filename);
                $berkas = $request->file('berkas');                
                $berkas->move($destinationPath, $filename);
                $berkas->move('s3', $filename, 's3');

            } else {
                $berkas = $request->file('berkas');
                $berkas->move('s3', $filename, 's3');
            }
            

        }
    
        return redirect()->back();
    }

    public function uploadFix(Request $request)
    {
        
        if ($request->hasFile('berkas')) {
            $file = $request->file('berkas');
            $name = $file->getClientOriginalName();
            $filePath = 'folder-AWS/' . $name;

            if (Storage::exists($filePath)){
                Storage::disk('s3')->delete('folder-AWS/' . $name);
            }
            else{
                Storage::disk('s3')->put($filePath, file_get_contents($file));
            }
        }        
        
        return redirect()->back();
    }

    // public function destroy($image)
    //     {
    //     Storage::disk('s3')->delete('images/' . $image);
        
    //     return back()->withSuccess('Image was deleted successfully');
    //     }
    

}

