<?php

namespace App\Exports;

use App\Models\Owner;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class OwnerExport implements FromView
{
    public function view(): View
    {
        return view('admin.owners._export', [
            'owners' => Owner::all()
        ]);
    }

    public function columnFormats(): array
    {
        return [
            'I' =>  "0",
        ];
    }
}

?>