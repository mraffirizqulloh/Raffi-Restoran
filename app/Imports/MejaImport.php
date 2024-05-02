<?php

namespace App\Imports;

use App\Models\Meja;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MejaImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // dd($row);
        return new Meja([
            'nomor_meja' => $row['nomor_meja'],
            'kapasitas' => $row['kapasitas'],
            'status' => $row['status']
        ]);
        return null;
    }

    public function headingRow(): int
    {
        return 3;
    }
}
