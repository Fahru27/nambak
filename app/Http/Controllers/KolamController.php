<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KolamModel;

class KolamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->KolamModel = new KolamModel();
    }

    public function detail($id)
    {
        if (!$this->KolamModel->detailKolam($id)) {
            abort(404);
        }
        $data = [
            'kolam1' => $this->KolamModel->detailKolam($id),
        ];

        // dd($data);
        return view('v_detailKolam', $data);
    }
}
