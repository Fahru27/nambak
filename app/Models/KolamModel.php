<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KolamModel extends Model
{


    public function detailKolam($id)
    {
        return DB::table('ikan')
            ->join('kolam', 'kolam.id_ikan', '=', 'ikan.id_ikan')
            ->select('kolam.*', 'ikan.*', 'ikan.jenis')
            ->where('id_kolam', $id)->first();
    }

    // public function dataIkan($id)
    // {
    //     return DB::table('aktivitas')
    //         ->join('ikan', 'ikan.id_ikan', '=', 'aktivitas.id_ikan')
    //         ->select(
    //             'ikan.*',
    //             'aktivitas.*',
    //             DB::raw('(aktivitas_masuk-aktivitas_keluar)+ikan.jumlah_awal as total_ikan'),
    //         )
    //         ->groupBy('aktivitas.id_ikan')
    //         ->where('ikan.id_ikan', $id)->first();
    // }

    // public function dataIkan2()
    // {
    //     return DB::table('aktivitas')
    //         ->join('ikan', 'ikan.id_ikan', '=', 'aktivitas.id_ikan')
    //         ->select(
    //             'ikan.*',
    //             'aktivitas.*',
    //             DB::raw('(aktivitas_masuk-aktivitas_keluar)+ikan.jumlah_awal as total_ikan'),
    //         )
    //         ->groupBy('aktivitas.id_ikan')
    //         ->get();
    // }
}
