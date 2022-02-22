<?php

namespace App\Exports;

use App\Models\Laporan;
use App\Models\Kehadiran;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KehadiranExport implements FromView, ShouldAutoSize
{
    public function __construct($laporan)
    {
        $this->laporan = $laporan;
    }
    
    public function view(): View
    {
        return view('laporan.tableExport', [
            'laporan'=>$this->laporan
        ]);
    }
}
