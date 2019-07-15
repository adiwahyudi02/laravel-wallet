<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;
use App\history;

class DashboardController extends Controller
{

    public function index()
    {
        $siswa = Siswa::all();
    	return view('dashboards.index',['siswa'=> $siswa]);
    }
    public function history(){
        $history = Siswa::all();
        return view('user.dashboardUser',['history'=> $history]);
    }
}
