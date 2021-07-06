<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use Validator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->AdminModel = new AdminModel();
    }

    public function index()
    {
        $data = [
            'users' => $this->AdminModel->dataPegawai(),
        ];

        return view('v_Admin', $data);
    }

    public function delete($id)
    {
        $this->AdminModel->deleteData($id);
        return redirect()->route('admin')->with('pesan', 'Data Berhasil Dihapus');
    }


    public function edit($id)
    {
        if (!$this->AdminModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'users' => $this->AdminModel->detailData($id),
        ];

        return view('v_adminEdit', $data);
    }



    public function update($id)
    {
        Request()->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'nik' => 'required|unique:users,nik',
                'noHp' => 'required',
                'alamat' => 'required',
                'kontrak' => 'required',
                'level' => 'required'
            ]
        );

        $data = [
            'name' => Request()->name,
            'email' => Request()->email,
            'nik' => Request()->nik,
            'noHp' => Request()->noHp,
            'alamat' => Request()->alamat,
            'kontrak' => Request()->kontrak,
            'level' => Request()->level,
        ];
        $this->AdminModel->updateData($id, $data);


        return redirect()->route('admin')->with('pesan', 'Data Berhasil Diupdate');
    }
}
