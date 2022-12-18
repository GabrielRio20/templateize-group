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
        $data_user = User::all();
        return view('user.index', compact('data_user', 'no'));
        // return view('admin.d_board_admin', compact('data_user', 'no'));
    }

    public function destroy($id) {
        $data_user = User::find($id);
        
        if ($data_user->level == 'customer' || $data_user->level == 'contributor'){
            $data_user->delete();
        }
        if ($data_user->level == 'admin'){
            die("Could not delete");
        }
        
        return redirect('/user');
    }

}
