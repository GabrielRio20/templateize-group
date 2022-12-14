<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContributorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('contributor.d_board_cont');
    }

    public function dashboard(){
        return view('contributor.main_dashboard');
    }

    public function uploadTemp(){
        return view('contributor.uploadTemp');
    }
   
}
