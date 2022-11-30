<?php

namespace App\Http\Controllers;

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
        // $shopping = Shopping::all();
        // return view('customer.my_templates', compact('shopping'));

        // $batas = 10;
        // $shopping = Shopping::all();
        // $shopping = Shopping::orderBy('id')->paginate($batas);
        // $id = $batas * ($shopping -> currentPage() - 1);
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 1)->first();
        if(!empty($pesanan)){
            // $pesanan_detail = PesananDetail::where('pesanan_id', $pesanan->id)->get();
            $pesanan_detail = PesananDetail::all();
            $shopping = Shopping::where('id', $pesanan->id)->get();
            $tanggal = Pesanan::where('tanggal', $pesanan->tanggal);
        }
        else{
            $pesanan_detail = 0;
            $shopping = 0;
        }
        
        // $pesanan_detail = PesananDetail::where('pesanan_id', $pesanan->id)->get();

        return view('customer.my_templates', compact('pesanan', 'pesanan_detail', 'shopping', 'tanggal'));
    }

}
