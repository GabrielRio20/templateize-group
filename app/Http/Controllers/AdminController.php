<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Shopping;

class AdminController extends Controller
{
    public function index(){
        $customer = User::where('level', 'customer');
        $contributor = User::where('level', 'contributor');
        $template = Shopping::all();
        return view('admin.d_board_admin', compact('customer', 'contributor', 'template'));
    }

    public function dashboard(){
        $customer = User::where('level', 'customer');
        $contributor = User::where('level', 'contributor');
        $template = Shopping::all();
        $feedback = Feedback::all();
        return view('admin.main_dashboard', compact('customer', 'contributor', 'template', 'feedback'));
    }

    public function feedback(){
        $feedback = Feedback::all();
        $contributor = Feedback::where('level', 'contributor');
        $template = Shopping::all();
        return view('admin.feedback', compact('feedback', 'contributor', 'template'));
    }

    public function loginSini(){
        return view('admin.loginSini');
    }
}
