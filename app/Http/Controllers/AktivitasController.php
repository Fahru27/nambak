<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AktivitasModel;

class AktivitasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->AktivitasModel = new AktivitasModel();
    }

    public function index()
    {
        $data = [
            'aktivitas1' => $this->AktivitasModel->dataAktivitas1(),
            'aktivitas2' => $this->AktivitasModel->dataAktivitas2(),
            'aktivitas3' => $this->AktivitasModel->dataAktivitas3(),
            'aktivitas4' => $this->AktivitasModel->dataAktivitas4(),
            'aktivitas' => $this->AktivitasModel->dataAktivitas(),
            'aktivitas' => $this->AktivitasModel->dataAktivitas(),
            'ikan' => $this->AktivitasModel->ikan(),
            'totalIkan' => $this->AktivitasModel->detailIkan(),
        ];

        return view('v_aktivitas', $data);
    }


    public function insert()
    {
        Request()->validate(
            [
                'id_ikan' => 'required',
                'tanggal' => 'required',
                'aktivitas_masuk' => 'required',
                'aktivitas_keluar' => 'required',
            ]
        );

        $data = [
            'id_ikan' => Request()->id_ikan,
            'tanggal' => Request()->tanggal,
            'aktivitas_masuk' => Request()->aktivitas_masuk,
            'aktivitas_keluar' => Request()->aktivitas_keluar,
        ];

        $this->AktivitasModel->addAktivitas($data);
        return redirect()->route('aktivitas')->with('pesan', 'Data Berhasil Ditambahkan');
    }
}
