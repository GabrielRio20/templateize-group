<?php

namespace App\Http\Controllers;

use ZipArchive;
use App\Models\Shopping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ShopController extends Controller
{
    
    public function index(){
        $batas = 12;
        $shopping = Shopping::orderBy('id')->paginate($batas);
        $no = $batas * ($shopping->currentPage()-1);

        // $shopping = Shopping::paginate(8);
        return view('shopping_page.shopping', compact('shopping', 'no'));
        // return view('home', compact('shopping'));
    }

    public function home(){
        $shopping = Shopping::paginate(10);
        return view('home', compact('shopping'));
    }

    // public function homeCust(){
    //     $shopping = Shopping::paginate(10);
    //     return view('home', compact('shopping'));
    // }

    public function create(){
        return view('shopping_page.create');
    }

    public function downloadZip(){
        $zip = new ZipArchive;
    }

    public function store(Request $request){
        $this->validate($request, [
            // 'id' => 'required',
            'template_name' => 'required',
            'picture'=> 'image|mimes:jpeg,jpg,png',
            'document' => 'required|file',
            'description' => 'required',
            'price' => 'required'
        ]);

        $shopping = New Shopping;
        $shopping->id = $request->id;
        $shopping->template_name = $request->template_name;
        $shopping->description = $request->description;
        $shopping->price = $request->price;

        $document = $request->document;
        $namadoc = time().'.'.$document->getClientOriginalExtension();
        Storage::putFile('docs/', $document, $request->file('document'));

        $picture = $request->picture;
        $namafile = time().'.'.$picture->getClientOriginalExtension();
        Image::make($picture)->resize(800, 450)->save('thumb/'.$namafile);
        // $picture->move('img/shopping', $namafile);

        $shopping->document = $namadoc;
        $shopping->picture = $namafile;
        $shopping->save();
        return redirect('/shop')->with('pesan', 'Data berhasil disimpan');
    }

}
