<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Support\Collection;

class InternApplicationExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    protected $batch;

    public function __construct($batch)
    {
        $this->batch = $batch;
    }

    public function collection()
    {
        $data = [
            ['Shavira', 'System Analyst Intern', 'Universitas Jember', '1', 'Accepted'],
            ['Ghina Qurrotu Aini', 'Backend Developer Intern', 'Universitas Brawijaya', '1', 'Accepted'],
            ['Alfian Pratama', 'Frontend Developer Intern', 'Universitas Gadjah Mada', '1', 'Rejected'],
            ['Raka Dwi Saputra', 'UI/UX Designer Intern', 'Institut Teknologi Sepuluh Nopember', '2', 'Accepted'],
            ['Nabila Putri', 'QA Engineer Intern', 'Universitas Airlangga', '2', 'Rejected'],
        ];

        
        if ($this->batch !== 'all') {
            $data = array_filter($data, function ($item) {
                return $item[3] == $this->batch;
            });
        }

        return new Collection(array_values($data));
    }

    public function headings(): array
    {
        return [
            'Name',
            'Position',
            'Institution',
            'Batch',
            'Status'
        ];
    }
}
