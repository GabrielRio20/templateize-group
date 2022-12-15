<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index(){
        $no = 0;
        $money = 100000;
        $data_user = User::all();
        return view('user.index', compact('data_user', 'no', 'money'));
        // return view('admin.d_board_admin', compact('data_user', 'no'));
    }

}
