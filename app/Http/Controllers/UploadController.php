<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Reader;

class UploadController extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }

    public function processUpload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:csv,txt',
        ]);

        // Get the uploaded file
        $file = $request->file('file');

        // Move the file to a temporary location
        $filePath = $file->store('temp');

        // Read the CSV file using the league/csv package
        $csv = Reader::createFromPath(storage_path('app/' . $filePath), 'r');
        $csv->setHeaderOffset(0);
        $headers = $csv->getHeader();
        $rows = $csv->getRecords();

        return view('upload', compact('headers', 'rows'));
    }
}