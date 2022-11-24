<?php

namespace App\Http\Controllers;

use App\Models\Shopping;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('customer.d_board_cust');
    }

    public function myTemp(){
        // $shopping = Shopping::all();
        // return view('customer.my_templates', compact('shopping'));

        $batas = 10;
        $shopping = Shopping::all();
        $shopping = Shopping::orderBy('id')->paginate($batas);
        $id = $batas * ($shopping -> currentPage() - 1);

        return view('customer.my_templates', compact('shopping', 'id'));
    }
}
