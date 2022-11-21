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
}
