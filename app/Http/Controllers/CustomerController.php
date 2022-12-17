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
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 1)->first();
        if(!empty($pesanan)){
            $pesanan_detail = PesananDetail::where('pesanan_id', $pesanan->id)->get();
            // $pesanan_detail = PesananDetail::all();
            // $shopping = Shopping::where('id', $pesanan->id)->get();
            $tanggal = Pesanan::where('tanggal', $pesanan->tanggal);
        }
        else{
            $pesanan_detail = 0;
            $shopping = 0;
            $tanggal = 0;
        }

        return view('customer.my_templates', compact('pesanan', 'pesanan_detail', 'tanggal'));
    }

    public function dashboardCust(){
        $user = User::where('id', Auth::user()->id)->first();
        // $money = User::where('money', $user->money)->first();
        $money = $user->money;

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 1)->first();
        if(!empty($pesanan)){
            $pesanan_detail = PesananDetail::where('pesanan_id', $pesanan->id)->get();
            // $pesanan_detail = PesananDetail::all();
            $shopping = Shopping::where('id', $pesanan->id)->get();
            $tanggal = Pesanan::where('tanggal', $pesanan->tanggal);
        }
        else{
            $pesanan_detail = 0;
            $shopping = 0;
            $tanggal = 0;
        }

        if($money < 0){
            $money = 0;
        }

        return view('customer.main_dashboard', compact('pesanan', 'pesanan_detail', 'shopping', 'tanggal', 'money', 'user'));
    }

}
