<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Reader;
use App\Models\Cvs; 


class CsvController extends Controller
{
    public function index(){
        return view('admin.upload');
    }
    public function upload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt',
        ]);

        // Get the uploaded file
        $file = $request->file('csv_file');

        // Move the file to a temporary location
        $filePath = $file->store('temp');

        // Open the CSV file for reading
        $csv = Reader::createFromPath(storage_path('app/'.$filePath), 'r');
        $csv->setHeaderOffset(0); // Assumes the first row contains headers

        // Get the CSV data
        $data = $csv->getRecords();

        // Insert the CSV data into your table
        foreach ($data as $row) {
            Cvs::create([
                'comp_name' => $row['comp_name'],
                'your_url' => $row['your_url'],
                'your_reach' => $row['your_reach'],
                'compitetor_reach' => $row['compitetor_reach'],
                'compitetor_url' => $row['compitetor_url'],
            ]);
        }

        return redirect('/admin');
    }
}
