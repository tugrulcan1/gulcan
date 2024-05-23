<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Raf;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $orders = Order::with("urun")->get();
        $rafs = Raf::with('sutuns.bolmes.uruns.urun')->get();
        return view('admin.home.index' , compact('rafs'));
    }

}
