<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function fromExcel($dir = null, $file = null)
    {
        $file = $dir . '/' . $file;
        $rows = Excel::load($file, null)->get();
        return $rows;
    } // end fromExcel function
    
    public function toExcel($table = null)
    {
        $data = DB::select(DB::raw("SELECT * FROM $table"));
        $data = json_encode($data);
        $this->data = json_decode($data, true);
        Excel::create('Excel', function ($excel) {
            $excel->sheet('Sheet1', function ($sheet) {
                $sheet->appendRow(array_keys($this->data[0]));
                foreach ($this->data as $field) {
                    $sheet->appendRow($field);
                }
            });
        })->export('xlsx');
    } // end toExcel function
}
