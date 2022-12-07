<?php

namespace App\Http\Controllers;

use App\Models\Shopping;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function search(Request $request){
        $batas = 5;
        $search = $request -> templates;
        $shopping = Shopping::where('template_name', 'like', "%".$search."%") ->paginate($batas);
        $temp_amount = $shopping -> count();
        $no = $batas * ($shopping -> currentPage() - 1);
        return view('shopping_page.shopping', compact('shopping', 'temp_amount', 'no', 'search'));
    }

    public function shop(){
        $shopping = Shopping::orderBy('id', 'desc')->paginate(8);
        return view('home', compact('shopping'));
    }

    public function aboutUs(){
        return view('aboutUs');
    }
    public function faq(){
        return view('faq');
    }
}
