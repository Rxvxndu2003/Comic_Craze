<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function fetchFiles(Request $request)
    {
        $files = File::all();
        return response()->json($files);
    }

    public function index() // This can be used for rendering files initially in Blade view
    {
        $files = File::all();
        return view('pages.files', compact('files')); // This will pass files to Blade view
    }
}
