<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bolme;
use App\Models\Personel;
use App\Models\Raf;
use App\Models\Urun;
use App\Models\UrunPlace;
use Illuminate\Http\Request;
use Darryldecode\Cart\Validators\Validator;

class UrunController extends Controller
{
    public function index()
    {
        $uruns = Urun::with("raf", "sutun", "bolum")->get();
        $rafs = Raf::all();
        return view('admin.uruns.index', compact('uruns', 'rafs'));
    }

    public function stockStorePost(Request $request)
    {
        // Validate the request data
        $request->validate([
            'urun_id' => 'required|exists:uruns,id',
            'count' => 'required|integer|min:1|max:20',
            'raf_id' => 'required|exists:rafs,id',
            'sutun_id' => 'required|exists:sutuns,id',
            'bolme_id' => 'required|exists:bolmes,id',
            'username' => 'required|string|max:255',
        ]);

        // Fetch the selected compartment
        $bolme = Bolme::with("uruns")->find($request->bolme_id);

        // Check if the count exceeds the compartment's capacity
        if ($bolme && $request->count > $bolme->capacity - count($bolme->uruns)  ) {
            return back()->withErrors(['count' => 'The product count exceeds the capacity of the selected compartment.'])->withInput();
        }

        // Create and save the product
        $urun = new UrunPlace();
        $urun->urun_id = $request->urun_id;
        $urun->count = $request->count;
        $urun->raf_id = $request->raf_id;
        $urun->sutun_id = $request->sutun_id;
        $urun->bolme_id = $request->bolme_id;
        $urun->username = $request->username;
        $urun->save();

        return redirect()->back()->with('success', 'İşlem Başarılı');
    }

    public function show(Urun $urun)
    {
        return view('client.urunsdetail', compact('urun'));
    }

    public function stockStore()
    {
        $uruns = Urun::all();
        $personels = Personel::all();
        $rafs = Raf::all();

        return view('admin.uruns.stock_store', compact("uruns","rafs","personels"));
    }
    public function asd()
    {
        $uruns = Urun::all();
        return view('client.uruns', compact('uruns'));
    }


    public function create()
    {
        $rafs = Raf::all();
        return view('admin.uruns.create', compact('rafs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'number_unit' => 'required',
            'raf_id' => 'required',
            'sutun_id' => 'required',
            'bolme_id' => 'required',
            'user_id' => 'required',

        ]);


        Urun::create([
            'name' => $request->input('name'),
            'stock' => $request->input('stock'),
            'number_unit' => $request->input('number_unit'),
            'raf_id' => $request->input('raf_id'),
            'sutun_id' => $request->input('sutun_id'),
            'bolme_id' => $request->input('bolme_id'),
            'user_id' => $request->input('user_id'),

        ]);

        return redirect()->route('admin.uruns.index')
            ->with('success', 'Ürün başarıyla oluşturuldu.');
    }

    public function edit(Urun $urun)
    {
        return view('admin.uruns.edit', compact('urun'));
    }

    public function update(Request $request, Urun $urun)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'stock' => 'required',
            'number_unit' => 'required',
            'raf_id' => 'required',
            'sutun_id' => 'required',
            'bolme_id' => 'required',
            'user_id' => 'required'


        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.uruns.edit', $urun->id)
                ->withErrors($validator)
                ->withInput();
        }






        $urun->update([
            'name' => $request->input('name'),
            'stock' => $request->input('stock'),
            'number_unit' => $request->input('number_unit'),
            'raf_id' => $request->input('raf_id'),
            'column_number' => $request->input('column_number'),
            'sutun_id' => $request->input('sutun_id'),
            'bolme_id' => $request->input('bolme_id'),
            'user_id' => $request->input('user_id')




        ]);

        return redirect()->route('admin.uruns.index')
            ->with('success', 'Ürün başarıyla güncellendi.');
    }

    public function destroy(Urun $urun)
    {
        $urun->delete();

        return redirect()->route('admin.uruns.index')
            ->with('success', 'Ürün başarıyla silindi.');
    }
}
