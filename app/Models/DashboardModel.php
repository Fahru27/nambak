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
            ->join('kolam', 'id_kolam', '=', 'ikan.id_ikan')
            ->select('kolam.*', 'ikan.*', 'ikan.jenis')
            ->get();
        // return DB::table('ikan')->get();
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
