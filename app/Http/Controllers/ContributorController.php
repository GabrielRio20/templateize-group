<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Shopping;
use Illuminate\Support\Facades\Auth;

class ContributorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('contributor.d_board_cont');
    }

    public function dashboard(){
        $feedback = Feedback::all();
        $templates = Shopping::where('uploader', Auth::id())->get();
        return view('contributor.main_dashboard', compact('feedback', 'templates'));
    }

    public function uploadTemp(){
        return view('contributor.uploadTemp');
    }
    
    public function myTemp(){
        $templates = Shopping::where('uploader', Auth::id())->get();

        return view('contributor.my_templates', compact('templates'));
    }

    public function destroy($id) {
        $template = Shopping::find($id);
        $template->delete();
        return redirect('/ContributorTemplates');
    }

    
}
