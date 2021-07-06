<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
    public function dataPegawai()
    {
        return DB::table('users')
            ->where('email', 'not like', '%admin%')
            ->get();
    }

    public function deleteData($id)
    {
        DB::table('users')->where('id', $id)->delete();
    }

    public function detailData($id)
    {
        return DB::table('users')->where('id', $id)->first();
    }

    public function updateData($id, $data)
    {
        DB::table('users')
            ->where('id', $id)
            ->update($data);
    }
}
