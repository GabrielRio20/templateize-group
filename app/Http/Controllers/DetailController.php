<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Pesanan;
use App\Models\Shopping;
use Illuminate\Http\Request;
use App\Models\PesananDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class DetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id){
        $shopping = Shopping::where('id', $id)->first();
        $recommend = Shopping::all()->random(4);
        return view('shopping_details.details', compact('shopping', 'recommend'));
    }

    public function buy(Request $request, $id){
        $shopping_all = Shopping::all();
        $shopping = Shopping::where('id', $id)->first();
        $tanggal = Carbon::now();
        $jumlah = 1;

        //cek validasi
        $cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

        //simpan ke database pesanan
        if(empty($cek_pesanan)){
            $pesanan = new Pesanan;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal = $tanggal;
            $pesanan->status = 0;
            $pesanan->total_price = 0;
            $pesanan->save();
        }
        
        //simpan ke database pesanan detail
        $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

        //cek pesanan detail
        $cek_pesanan_detail = PesananDetail::where('barang_id', $shopping->id)->where('pesanan_id', $pesanan_baru->id)->first();

        if(empty($cek_pesanan_detail)){
            $pesanan_detail = new PesananDetail;
            $pesanan_detail->barang_id = $shopping->id;
            $pesanan_detail->pesanan_id = $pesanan_baru->id;
            $pesanan_detail->jumlah_harga = $shopping->price;
            $pesanan_detail->save();
        }
        else{
            $pesanan_detail = PesananDetail::where('barang_id', $shopping->id)->where('pesanan_id', $pesanan_baru->id)->first();
            $pesanan_detail->jumlah_harga = $shopping->price;
            $pesanan_detail->update();
        }

        //jumlah total
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan->total_price = $pesanan->total_price + $shopping->price;
        $pesanan->update();
        
        // return redirect('/details/{id}')->with('pesan', 'Berhasil membeli template', compact('shopping_all'));
        Alert::success('Congratulations!', 'Your Template added to Cart.');
        return redirect()->back()->with('pesan', 'Your purchase is success, Enjoy your template!', compact('shopping_all'));
        // return view('shopping_details.checkout');

    }

    // public function buy($id){
        
    //     $shopping = Shopping::where('id', $id);
    //     $shopping->template_name;
    //     $shopping->description;
    //     $shopping->save();
    //     return view('customer.my_templates', compact('shopping', 'id'));
    // }

    public function checkout(){
        
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if(!empty($pesanan)){
            $pesanan_detail = PesananDetail::where('pesanan_id', $pesanan->id)->get();
        }
        else{
            $pesanan_detail = 0;
        }

        return view('shopping_details.checkout', compact('pesanan', 'pesanan_detail'));
    }

    public function delete($id){
        $pesanan_detail = PesananDetail::where('id', $id)->first();
        
        $pesanan_1 = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan_1->total_price = $pesanan_1->total_price-$pesanan_detail->jumlah_harga;
        $pesanan_1->update();

        $pesanan_detail->delete();
        Alert::error('Okay', 'Template deleted');
        return redirect('checkout');
    }

    public function confirmation(){

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $user = User::where('id', Auth::user()->id)->first();
        (int)$money = $user->money;

        
        // $money = (int)$money - (int)$pesanan->total_price;

        if((int)$money < $pesanan->total_price){
            (int)$money = $money;
            Alert::error('Sorry', 'Your money is not enough');
        }
        if((int)$money > (int)$pesanan->total_price){
            $pesanan->status = 1;
            $money = (int)$money - (int)$pesanan->total_price;
            Alert::success('Congratulations!', 'Your template purchased succesfully.');
        }
        

        $pesanan->update();
        $user->update(['money' => $money]);
        return redirect('checkout');

        
    }

    public function shop(){
        $shopping = Shopping::orderBy('id', 'desc')->paginate(8);
        return view('home', compact('shopping'));
    }

    public function download($id){
        $shopping = Shopping::where('id', $id)->first();
        $doc = $shopping->document;
        $filepath = storage_path("docs/".$shopping->template_name.'.zip'
    
    );
        return response()->download($filepath);
    }

    // public function recommendation(){
    //     $shopping = Shopping::orderBy('id', 'desc')->paginate(4);
    //     // return view('details', compact('shopping'));
    //     return back()->with(compact('shopping'));
    // }
}
