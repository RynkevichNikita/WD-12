<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Picture;


class FileController extends Controller
{
    public function update(Request $request)
    {
        $path = $request->file('painting')->store('paintings');

        $picture = new Picture;
        $picture->path = $path;
        $picture->save();
        
        return 'ok';
    }
}
