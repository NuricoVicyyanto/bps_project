<?php

namespace App\Exports;

use App\Models\surkel;
use Maatwebsite\Excel\Concerns\FromCollection;

class OutmailExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Surkel::select('index', 'date', 'kode_surat', 'alamat', 'tanggal', 'perihal')->get();
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ['Index', 'Date', 'Kode Surat', 'Alamat', 'Tanggal', 'Perihal'];
    }
}


