<?php

namespace App\Http\Controllers;

use ZipArchive;
use App\Models\Shopping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    
    public function index(){
        $batas = 12;
        $shopping = Shopping::orderBy('id', 'desc')->paginate($batas);
        $no = $batas * ($shopping->currentPage()-1);
        // $shopping = Shopping::paginate(8);
        return view('shopping_page.shopping', compact('shopping', 'no'));
        // return view('home', compact('shopping'));
    }

    public function home(){
        $shopping = Shopping::paginate(8);
        return view('home', compact('shopping'));
    }

    // public function homeCust(){
    //     $shopping = Shopping::paginate(10);
    //     return view('home', compact('shopping'));
    // }

    public function create(){
        return view('shopping_page.create1');
    }

    public function downloadZip(){
        $zip = new ZipArchive;
    }

    public function store(Request $request){

        $this->validate($request, [
            // 'id' => 'required',
            'template_name' => 'required',
            'category' => 'required',
            'picture'=> 'image|mimes:jpeg,jpg,png',
            'document' => 'required|file|mimes:zip',
            'description' => 'required',
            'price' => 'required'
        ]);

        $shopping = New Shopping;
        $shopping->id = $request->id;
        $shopping->template_name = $request->template_name;
        $shopping->category = $request->category;
        $shopping->description = $request->description;
        $shopping->price = $request->price;

        // $document = $request->document;
        // $namadoc = time();
        // Storage::disk('local')->put('docs/'.$namadoc, $document);

        $zip = new ZipArchive();
        $document = $request->file('document');
        $namadoc = time().'.'.$document->getClientOriginalExtension();
        Storage::disk('local')->put('docs/'.$namadoc, $document);

        if ($zip->open(storage_path($namadoc), ZipArchive::CREATE) == TRUE) {
            $files = File::files(storage_path('app/docs', $namadoc));

            foreach ($files as $value){
                $filename = basename($value);
                $zip->addFile($value, $filename);
            }
            $zip->close();
            return Storage::disk('local')->put('docs/', $namadoc);
        }
        
        
        $picture = $request->picture;
        $namafile = time().'.'.$picture->getClientOriginalExtension();
        Image::make($picture)->resize(800, 450)->save('thumb/'.$namafile);
        // $picture->move('img/shopping', $namafile);

        $shopping->document = $namadoc;
        $shopping->picture = $namafile;
        $shopping->save();
        return redirect('/shop')->with('pesan', 'Data berhasil disimpan');
    }

    public function destroy($id) {
        $template = Shopping::find($id);
        $template->delete();
        return redirect('/ContributorTemplates');
    }

    public function edit($id) {
        $template = Shopping::find($id);
        
        return view('contributor.update_template', ['template' => $template]);
    }

    public function edit2($id) {
        $template = Shopping::find($id);
        
        return view('admin.update_template', ['template' => $template]);
    }
}
