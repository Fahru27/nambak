<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeuanganModel;

class KeuanganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->KeuanganModel = new KeuanganModel();
    }

    public function index()
    {
        $data = [
            'keuangan' => $this->KeuanganModel->dataKeuangan(),
            'tabel' => $this->KeuanganModel->tabelKeuangan(),
        ];

        // dd($data);
        return view('v_Keuangan', $data);
    }

    public function insert()
    {
        Request()->validate(
            [
                'tanggal' => 'required',
                'uang_masuk' => 'required',
                'uang_keluar' => 'required',
            ]
        );

        $data = [
            'tanggal' => Request()->tanggal,
            'uang_masuk' => Request()->uang_masuk,
            'uang_keluar' => Request()->uang_keluar,
        ];

        $this->KeuanganModel->addKeuangan($data);
        return redirect()->route('keuangan')->with('pesan', 'Data Berhasil Ditambahkan');
    }
}
