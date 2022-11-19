<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail1(){
        return view('shopping_details.shopDetail1');
    }
    public function detail2(){
        return view('shopping_details.shopDetail2');
    }
    public function detail3(){
        return view('shopping_details.shopDetail3');
    }
    public function detail4(){
        return view('shopping_details.shopDetail4');
    }
}
