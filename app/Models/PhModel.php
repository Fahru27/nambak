<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PhModel extends Model
{
    public function dataPh1()
    {
        return DB::table('ph_models')
            ->join('kolam', 'kolam.id_kolam', '=', 'ph_models.id_kolam')
            ->select('ph_models.*', 'kolam.*')
            ->where('kolam.id_kolam', '=', 1)
            ->get();
    }

    public function dataPh2()
    {
        return DB::table('ph_models')
            ->join('kolam', 'kolam.id_kolam', '=', 'ph_models.id_kolam')
            ->select('ph_models.*', 'kolam.*')
            ->where('kolam.id_kolam', '=', 2)
            ->get();
    }

    public function dataPh3()
    {
        return DB::table('ph_models')
            ->join('kolam', 'kolam.id_kolam', '=', 'ph_models.id_kolam')
            ->select('ph_models.*', 'kolam.*')
            ->where('kolam.id_kolam', '=', 3)
            ->get();
    }

    public function dataPh4()
    {
        return DB::table('ph_models')
            ->join('kolam', 'kolam.id_kolam', '=', 'ph_models.id_kolam')
            ->select('ph_models.*', 'kolam.*')
            ->where('kolam.id_kolam', '=', 4)
            ->get();
    }

    public function dataPh()
    {
        return DB::table('kolam')
            ->get();
    }

    public function Ph()
    {
        return DB::table('ph_models')
            ->get();
    }

    public function addPh($data)
    {
        DB::table('ph_models')->insert($data);
    }


    // public function kolam()
    // {
    //     return $this->belongsTo('KolamModel');
    // }
}
