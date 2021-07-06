<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KeuanganModel extends Model
{
    public function dataKeuangan()
    {
        return DB::table('keuangan')
            ->get();
    }

    public function tabelKeuangan()
    {
        return DB::table('keuangan')
            ->orderBy('tanggal', 'desc')
            ->get();
    }

    public function addKeuangan($data)
    {
        DB::table('keuangan')->insert($data);
    }
}
