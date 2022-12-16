<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

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
        $feedback = Feedback::all();
        return view('contributor.main_dashboard', compact('feedback'));
    }

    public function uploadTemp(){
        return view('contributor.uploadTemp');
    }
   
}
