<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Response;

class StorageController extends Controller
{

    public function index()
    {

        $basenameArray = array();
        $extensionArray = array();
        $sizeArray = array();

        $filesInFolder = \File::files('../../video');
        foreach ($filesInFolder as $path) {
            $file = pathinfo($path);
            $fileSize = \File::size(public_path($path));

            $sizeArray = Arr::prepend($sizeArray, $fileSize);
            $basenameArray = Arr::prepend($basenameArray, $file['basename']);
            $extensionArray = Arr::prepend($extensionArray, $file['extension']);
            // error_log($file['basename']);
            // error_log($file['extension']);
        }
        return view('storage', [
            'size' => $sizeArray,
            'basename' => $basenameArray,
            'extension' => $extensionArray
        ]);
    }

    public function show($id)
    {
        $basenameArray = array();
        $extensionArray = array();
        $sizeArray = array();

        $filesInFolder = \File::files('../../video');
        foreach ($filesInFolder as $path) {
            $file = pathinfo($path);
            $fileSizes = \File::size(public_path($path));

            $sizeArray = Arr::prepend($sizeArray, $fileSizes);
            $basenameArray = Arr::prepend($basenameArray, $file['basename']);
            $extensionArray = Arr::prepend($extensionArray, $file['extension']);
            // error_log($file['basename']);
            // error_log($file['extension']);
        }

        $fileName = $basenameArray[$id];
        $fileSize = $sizeArray[$id];

        return view('detail', ['fileName' => $fileName, 'id' => $id, 'fileSize' => $fileSize]);
    }

    public function download($id)
    {

        $basenameArray = array();
        $extensionArray = array();

        $filesInFolder = \File::files('../../video');
        foreach ($filesInFolder as $path) {
            $file = pathinfo($path);
            $basenameArray = Arr::prepend($basenameArray, $file['basename']);
            $extensionArray = Arr::prepend($extensionArray, $file['extension']);
            // error_log($file['basename']);
            // error_log($file['extension']);
        }

        $fileName = $basenameArray[$id];

        $file = 'C:\xampp\htdocs\video\\' . $fileName;
        $headers = array('Content-Type: application/pdf',);
        return Response::download($file, $fileName, $headers);
    }
}
