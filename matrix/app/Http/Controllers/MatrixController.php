<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatrixController extends Controller
{
    public function jumlahDiagonal($angka)
    {
        $n = count($angka);
        $jumlah = 0;

        for ($i = 0; $i < $n; $i++) {
            $jumlah += $angka[$i][$i];

            if ($i !== $n - $i - 1) {
                $jumlah += $angka[$i][$n - $i - 1];
            }
        }

        return $jumlah;
    }

    public function angkaUsage()
    {
        $angka = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ];

        $hasil = $this->jumlahDiagonal($angka);

        return "Jumlah hasil dari diagonal: " . $hasil;
    }
}

