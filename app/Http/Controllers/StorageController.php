<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StorageController extends Controller
{
    public function index()
    {
        $filesInFolder = \File::files('../../video');
        foreach ($filesInFolder as $path) {
            $file = pathinfo($path);
            error_log($file['basename']);
            error_log($file['extension']);
        }

        return view('storage', [
            'items' => $filesInFolder,
        ]);
    }
}