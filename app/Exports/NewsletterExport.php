<?php

namespace App\Exports;

use App\Models\Subscription;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class NewsletterExport implements FromCollection, WithHeadings, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Subscription::all();
    }
      /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'id',
           'Email',
           'Created At',
           'Updated At'
        ];
    }

    /**
     * @return string
     */
    public function startCell(): string
    {
        return 'A1';
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('A1:D1')->applyFromArray([
                    'font' => [
                        'bold' => true,
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'color' => ['rgb' => 'FFFF00'],
                    ],
                ]);
            },
        ];
    }
}