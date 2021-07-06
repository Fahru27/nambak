<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhModel;
use App\Models\KolamModel;

class PhController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->PhModel = new PhModel();
        $this->KolamModel = new KolamModel();
    }

    public function index()
    {
        $data = [
            'ph_air1' => $this->PhModel->dataPh1(),
            'ph_air2' => $this->PhModel->dataPh2(),
            'ph_air3' => $this->PhModel->dataPh3(),
            'ph_air4' => $this->PhModel->dataPh4(),
            'ph_air'  => $this->PhModel->dataPh(),
            'ph'  => $this->PhModel->Ph(),
        ];

        // dd($data);
        return view('v_AddPh', $data);
    }


    public function insert()
    {
        Request()->validate(
            [
                'ph' => 'required',
                'tanggal' => 'required',
                'id_kolam' => 'required',
                'tanggal' => 'required',
            ],
            [
                'nim.required' => 'NIM wajib diisi',
                'nim.unique' => 'NIM ini sudah ada',
            ]
        );

        $data = [
            'ph' => Request()->ph,
            'tanggal' => Request()->tanggal,
            'id_kolam' => Request()->id_kolam,
            'tanggal' => Request()->tanggal,
        ];

        $this->PhModel->addPh($data);
        return redirect()->route('ph_air')->with('pesan', 'Data Berhasil Ditambahkan');
    }
}
