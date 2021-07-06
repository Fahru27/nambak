<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\DashboardModel;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->DashboardModel = new DashboardModel();
    }

    public function index()
    {
        $data = [
            'ikan' => $this->DashboardModel->dataKolam(),
            'ikan2' => $this->DashboardModel->dataIkan(),
            'totalIkan' => $this->DashboardModel->detailIkan(),
        ];

        $dataKeuangan = [
            'keuangan' => $this->DashboardModel->dataKeuangan(),
        ];

        // dd($data);
        return view('v_Dashboard', $data, $dataKeuangan);
    }
}
