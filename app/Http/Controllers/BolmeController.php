<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bolme;
use App\Models\Sutun;
use Illuminate\Http\Request;
use Darryldecode\Cart\Validators\Validator;


class BolmeController extends Controller
{

    public function getSutunstoRaf($rafID)
    {
        $sutuns = Sutun::where("raf_id", $rafID)->get();
        return response()->json([
            "sutuns" => $sutuns
        ]);
    }

    public function getBolmesToSutun($sutunID)
    {
        $bolmes = Bolme::where("sutun_id", $sutunID)->get();
        return response()->json([
            "bolmes" => $bolmes
        ]);
    }

    public function index()
    {
        $bolmes = Bolme::all();
        return view('admin.bolmes.index', compact('bolmes'));
    }

    public function show(Bolme $bolme)
    {
        return view('client.bolmesdetail', compact('bolme'));
    }
    
    public function asd()
    {
        $bolmes = Bolme::all();
        return view('client.bolmes', compact('bolmes'));
    }


    public function create()
    {
        return view('admin.bolmes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'capacity' => 'required',
            'empty_space' => 'required',
            'product_number' => 'required',
            'sutun_id' => 'required',
        ]);


        Bolme::create([
            'name' => $request->input('name'),
            'stock' => $request->input('stock'),
            'capacity' => $request->input('capacity'),
            'empty_space' => $request->input('empty_space'),
            'product_number' => $request->input('product_number'),
            'sutun_id' => $request->input('sutun_id'),
        ]);

        return redirect()->route('admin.bolmes.index')
            ->with('success', 'Bölme başarıyla oluşturuldu.');
    }

    public function edit(Bolme $bolme)
    {
        return view('admin.bolmes.edit', compact('bolme'));
    }

    public function update(Request $request, Bolme $bolme)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'stock' => 'required',
            'capacity' => 'required',
            'empty_space' => 'required',
            'product_number' => 'required',
            'sutun_id' => 'required'

        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.bolmes.edit', $bolme->id)
                ->withErrors($validator)
                ->withInput();
        }






        $bolme->update([
            'name' => $request->input('name'),
            'stock' => $request->input('stock'),
            'capacity' => $request->input('capacity'),
            'empty_space' => $request->input('empty_space'),
            'product_number' => $request->input('product_number'),
            'sutun_id' => $request->input('sutun_id')


        ]);

        return redirect()->route('admin.bolmes.index')
            ->with('success', 'Bölme başarıyla güncellendi.');
    }

    public function destroy(Bolme $bolme)
    {
        $bolme->delete();

        return redirect()->route('admin.bolmes.index')
            ->with('success', 'Bölme başarıyla silindi.');
    }
}
