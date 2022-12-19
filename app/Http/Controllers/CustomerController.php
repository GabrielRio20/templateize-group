<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pesanan;
use App\Models\Shopping;
use Illuminate\Http\Request;
use App\Models\PesananDetail;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('customer.d_board_cust');
    }

    public function myTemp(){
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 1)->get();
        $pesanan_detail = PesananDetail::all();
        // $pesanan_detail = PesananDetail::orderBy('pesanan_id', 'asc')->get();
        
        return view('customer.my_templates', compact('pesanan', 'pesanan_detail'));
    }

    public function dashboardCust(){
        $user = User::where('id', Auth::user()->id)->first();
        $money = $user->money;

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 1)->get();
        $pesanan_detail = PesananDetail::all();
        if($money < 0){
            $money = 0;
        }
        return view('customer.main_dashboard', compact('pesanan', 'pesanan_detail', 'money', 'user'));
    }

}
