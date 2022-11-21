<?php

namespace App\Http\Controllers;

use App\Models\Shopping;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use File;

class ShopController extends Controller
{
    public function index(){
        $shopping = Shopping::paginate(10);
        return view('shopping_page.shopping', compact('shopping'));
    }

    public function create(){
        return view('shopping_page.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'template_name' => 'required',
            'picture'=> 'image|mimes:jpeg,jpg,png',
            'description' => 'required',
            'price' => 'required'
        ]);

        $shopping = New Shopping;
        $shopping->template_name = $request->template_name;
        $shopping->description = $request->description;
        $shopping->price = $request->price;

        $picture = $request->picture;
        $namafile = time().'.'.$picture->getClientOriginalExtension();

        Image::make($picture)->resize(800, 450)->save('thumb/'.$namafile);
        // $picture->move('img/shopping', $namafile);

        $shopping->picture = $namafile;
        $shopping->save();
        return redirect('/shop')->with('pesan', 'Data berhasil disimpan');
    }
}
