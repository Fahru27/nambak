<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DashboardModel extends Model
{
    public function dataKolam()
    {
        return DB::table('ikan')
            ->join('kolam', 'kolam.id_ikan', '=', 'ikan.id_ikan')
            ->select('kolam.*', 'ikan.*', 'ikan.jenis')
            ->get();
    }

    public function dataIkan()
    {
        return DB::table('aktivitas')
            ->join('ikan', 'ikan.id_ikan', '=', 'aktivitas.id_ikan')
            ->select(
                'ikan.*',
                'aktivitas.*',
                DB::raw('(aktivitas_masuk-aktivitas_keluar)+ikan.jumlah_awal as total_ikan'),
            )
            ->groupBy('aktivitas.id_ikan')
            ->get();
    }

    public function detailIkan()
    {
        return DB::table('aktivitas')
            ->join('ikan', 'ikan.id_ikan', '=', 'aktivitas.id_ikan')
            ->select(
                'aktivitas.*',
                'ikan.*',
                DB::raw('SUM(aktivitas_masuk-aktivitas_keluar)+SUM(ikan.jumlah_awal) as total_ikan')
            )
            ->groupBy('tanggal')
            ->orderBy('aktivitas.tanggal', 'desc')
            ->get();
    }

    public function dataKeuangan()
    {
        return DB::table('keuangan')
            ->get();
    }

    // public function dataIkan()
    // {
    //     return DB::table('ikan')->get();
    // }
}
