<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Raf;
use App\Models\UrunPlace;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $orders = Order::with("urun")->get();
        $rafs = Raf::with('sutuns.bolmes.uruns.personel', 'sutuns.bolmes.uruns.urun')->get();

        // Her raf için toplam ürün sayısını hesapla
        $totalProducts = 0;
        foreach ($rafs as $raf) {
            foreach ($raf->sutuns as $sutun) {
                foreach ($sutun->bolmes as $bolum) {
                    $totalProducts += $bolum->uruns->sum('count');
                }
            }
        }

        // Her bir mağazaya gönderilen toplam koli sayısını ve mağaza sayısını hesapla
        $totalPackagesPerStore = Order::selectRaw('company_name, SUM(qt) as total_packages')
            ->groupBy('company_name')
            ->get();
        $storeCount = $totalPackagesPerStore->count();

        // Toplam koli sayısını mağaza sayısına bölerek ortalama koli sayısını hesapla
        $totalPackagesSum = $totalPackagesPerStore->sum('total_packages');
        $averagePackagesPerStore = $totalPackagesSum / $storeCount;

        $averagePackagesPerPersonel = UrunPlace::selectRaw('username, SUM(count) as average_count')
            ->groupBy('username')
            ->get();
        $personelCount = $averagePackagesPerPersonel->count();

        // Toplam koli sayısını mağaza sayısına bölerek ortalama koli sayısını hesapla
        $totalPackagesSumP = $averagePackagesPerPersonel->sum('average_count');
        $averagePackagesPerPersonel = $totalPackagesSumP / $personelCount;

        $minProduct = UrunPlace::select('urun_id', \DB::raw('SUM(count) as total_count'))
            ->with('urun')
            ->groupBy('urun_id')
            ->orderBy('total_count')
            ->first();

        $maxProduct = UrunPlace::select('urun_id', \DB::raw('SUM(count) as total_count'))
            ->with('urun')
            ->groupBy('urun_id')
            ->orderBy('total_count', "desc")
            ->first();

        // En az ve en çok ürün gönderilen mağazaları bul
        $minStore = Order::selectRaw('company_name, SUM(qt) as total_packages')
            ->groupBy('company_name')
            ->orderBy('total_packages')
            ->first();

        $maxStore = Order::selectRaw('company_name, SUM(qt) as total_packages')
            ->groupBy('company_name')
            ->orderBy('total_packages', 'desc')
            ->first();

        // En az ve en çok kayda sahip olan personeli bul
        $minPersonel = UrunPlace::selectRaw('personels.username, SUM(count) as total_records')
            ->join('personels', 'urun_places.username', '=', 'personels.id')
            ->groupBy('personels.username')
            ->orderBy('total_records')
            ->first();

        $maxPersonel = UrunPlace::selectRaw('personels.username, SUM(count) as total_records')
            ->join('personels', 'urun_places.username', '=', 'personels.id')
            ->groupBy('personels.username')
            ->orderBy('total_records', 'desc')
            ->first();

        // Depo toplam kapasitesi ve doluluk oranını hesapla
        $totalCapacity = Raf::all()->sum('capacity'); // Raf kapasitelerini topla
        $fillRate = ($totalProducts / $totalCapacity) * 100;
        $fillRatePercentage = ($fillRate > 0) ? round($fillRate, 2) : 0; // Doluluk oranını yüzdeye dönüştür ve 2 ondalık basamağa yuvarla

        return view('admin.home.index', compact('rafs', 'fillRatePercentage', "minPersonel", "maxPersonel", "minStore", "maxStore", "minProduct", "maxProduct", 'totalProducts', 'averagePackagesPerStore', "averagePackagesPerPersonel"));
    }




}
