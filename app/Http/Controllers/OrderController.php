<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\UrunPlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Database transaction için eklendi
use Exception;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::with("urun")->orderBy("id","desc")->get();
        return view("admin.orders.index", compact("orders"));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'phone' => 'required|string',
            'product_id' => 'required|integer|exists:uruns,id',
            'qt' => 'required|integer|min:1',
            'address' => 'required|string|max:255',
        ]);

        // Stok kontrolü
        $totalStock = UrunPlace::where('urun_id', $validated['product_id'])
            ->sum('count');

        if ($totalStock < $validated['qt']) {
            return redirect()->back()->with('error', 'Stok Yetersiz');
        }

        DB::beginTransaction(); // Transaction başlat
        try {
            // Create order
            $order = Order::create($validated);

            $urunPlaces = UrunPlace::where('urun_id', $validated['product_id'])
                ->orderBy('raf_id')
                ->orderBy('sutun_id')
                ->orderBy('bolme_id')
                ->orderBy('created_at')
                ->get();

            // Process stock
            foreach ($urunPlaces as $urunPlace) {
                if ($validated['qt'] <= 0) break;

                if ($urunPlace->count >= $validated['qt']) {
                    $urunPlace->count -= $validated['qt'];
                    if ($urunPlace->count == 0) {
                        $urunPlace->delete();
                    } else {
                        $urunPlace->save();
                    }
                    $validated['qt'] = 0; // All requested quantity has been fulfilled
                } else {
                    $validated['qt'] -= $urunPlace->count;
                    $urunPlace->delete();
                }
            }

            DB::commit(); // Transaction tamamlandı
            return redirect()->back()->with('success', 'Sipariş başarıyla kaydedildi!');
        } catch (Exception $e) {
            DB::rollBack(); // Hata durumunda değişiklikleri geri al
            return redirect()->back()->with('error', 'Sipariş sırasında bir hata oluştu: ' . $e->getMessage());
        }
    }
}
