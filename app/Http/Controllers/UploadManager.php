<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadManager extends Controller
{
    public function upload()
    {
        return view('upload');
    }

    public function uploadPOST(Request $request)
    {
        // Validate the file
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf,docx|max:2048', // Allow only specific file types and size limit
        ]);

        $file = $request->file('file');

        // Display file details
        echo 'File Name : ' . $file->getClientOriginalName() . '<br>';
        echo 'File Extension: ' . $file->getClientOriginalExtension() . '<br>';
        echo 'File Real Path: ' . $file->getRealPath() . '<br>';
        echo 'File Size : ' . $file->getSize() . '<br>';
        echo 'File MIME Type : ' . $file->getMimeType() . '<br>';

        // Store the file
        $destinationPath = 'uploads';
        $fileName = time() . '_' . $file->getClientOriginalName(); // Use a unique file name to avoid overwriting

        if ($file->move(public_path($destinationPath), $fileName)) {
            echo "File Upload Success";
        } else {
            echo "Failed to upload file";
        }
    }
}

