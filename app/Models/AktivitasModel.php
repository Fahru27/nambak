<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AktivitasModel extends Model
{
    public function dataAktivitas1()
    {
        return DB::table('aktivitas')
            ->join('ikan', 'ikan.id_ikan', '=', 'aktivitas.id_ikan')
            ->select('ikan.*', 'aktivitas.*',)
            ->where('aktivitas.id_ikan', '=', 1)
            ->get();
    }

    public function dataAktivitas2()
    {
        return DB::table('aktivitas')
            ->join('ikan', 'ikan.id_ikan', '=', 'aktivitas.id_ikan')
            ->select('ikan.*', 'aktivitas.*', 'ikan.jenis')
            ->where('aktivitas.id_ikan', '=', 2)
            ->get();
    }

    public function dataAktivitas3()
    {
        return DB::table('aktivitas')
            ->join('ikan', 'ikan.id_ikan', '=', 'aktivitas.id_ikan')
            ->select('ikan.*', 'aktivitas.*', 'ikan.jenis')
            ->where('aktivitas.id_ikan', '=', 3)
            ->get();
    }

    public function dataAktivitas4()
    {
        return DB::table('aktivitas')
            ->join('ikan', 'ikan.id_ikan', '=', 'aktivitas.id_ikan')
            ->select('ikan.*', 'aktivitas.*', 'ikan.jenis')
            ->where('aktivitas.id_ikan', '=', 4)
            ->get();
    }

    public function dataAktivitas()
    {
        return DB::table('aktivitas')
            ->join('ikan', 'ikan.id_ikan', '=', 'aktivitas.id_ikan')
            ->select('ikan.*', 'aktivitas.*')
            ->orderBy('aktivitas.tanggal', 'desc')
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

    public function ikan()
    {
        return DB::table('ikan')
            ->get();
    }


    public function addAktivitas($data)
    {
        DB::table('aktivitas')->insert($data);
    }
}
