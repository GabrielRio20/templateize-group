<?php

namespace App\Http\Controllers;

use App\Models\Shopping;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id){
        $shopping = Shopping::where('id', $id)->first();
        return view('shopping_details.details', compact('shopping'));
    }

    public function buy(Request $request){
        // $shopping = Shopping::where('id', $id)->first();
        // return redirect('/details{id}')->with('pesan', 'Berhasil membeli template', compact('shopping'));
    }

    // public function buy($id){
        
    //     $shopping = Shopping::where('id', $id);
    //     $shopping->template_name;
    //     $shopping->description;
    //     $shopping->save();
    //     return view('customer.my_templates', compact('shopping', 'id'));
    // }
}
