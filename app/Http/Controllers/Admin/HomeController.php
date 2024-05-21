<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Raf;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $rafs = Raf::with('sutuns.uruns',"sutuns.bolmes.uruns",'uruns')->get();
        return view('admin.home.index' , compact('rafs'));
    }
    
}
