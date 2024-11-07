<?php

namespace App\Exports;

use App\Models\FormEntry;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormEntriesCsvExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return FormEntry::all();
    }
}
