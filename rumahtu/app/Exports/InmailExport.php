<?php
  
namespace App\Exports;
  
use App\Models\Surmas;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
  
class InmailExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Surmas::select('index', 'date', 'kode_surat', 'alamat', 'tanggal', 'perihal')->get();
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