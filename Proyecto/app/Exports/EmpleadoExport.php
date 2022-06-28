<?php

namespace App\Exports;

use App\Models\Empleado;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class EmpleadoExport implements FromView, ShouldAutoSize 
{
    
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('empleado.ExcelExport', [
            'empleados' => Empleado::all()
        ]);
    }
}
