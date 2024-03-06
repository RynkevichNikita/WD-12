<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file('upload');
        $name = $file->getClientOriginalName();
        $size = Storage::size($file->store('users'));
        Log::info('File info: ', [
            'name' => $name,
            'size' => $size,
            'date' => now(),
            'ip' => $request->ip()
        ]);
    }
}
