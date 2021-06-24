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
        $this->DashboardModel = new DashboardModel();
    }

    public function index()
    {
        $data = [
            'ikan' => $this->DashboardModel->dataKolam(),
        ];

        $dataKeuangan = [
            'keuangan' =>
            $this->DashboardModel->dataKeuangan(),
        ];

        return view('v_Dashboard', $data, $dataKeuangan);
    }
}
