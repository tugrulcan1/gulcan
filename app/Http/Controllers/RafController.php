<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Raf;
use Darryldecode\Cart\Validators\Validator;
use Illuminate\Http\Request;

class RafController extends Controller
{
    public function index()
    {
        $rafs = Raf::all();
        return view('admin.rafs.index', compact('rafs'));
    }
    public function show(Raf $raf)
    {
        return view('client.rafsdetail', compact('raf'));
    }
    public function asd()
    {
        $rafs = Raf::all();
       return view('client.rafs',compact('rafs'));
    }


    public function create()
    {
        return view('admin.rafs.create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'capacity' => 'required',
            'empty_space' => 'required',
            'column_number' => 'required',
        ]);


        Raf::create([
            'name' => $request->input('name'),
            'stock' => $request->input('stock'),
            'capacity' => $request->input('capacity'),
            'empty_space' => $request->input('empty_space'),
            'column_number' => $request->input('column_number'),
        ]);

        return redirect()->route('admin.rafs.index')
            ->with('success', 'Raf başarıyla oluşturuldu.');
    }

    public function edit(Raf $raf)
    {
        return view('admin.rafs.edit', compact('raf'));
    }

    public function update(Request $request, Raf $raf)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'stock' => 'required',
            'capacity' => 'required',
            'empty_space' => 'required',
            'column_number' => 'required'
            
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.rafs.edit', $raf->id)
                ->withErrors($validator)
                ->withInput();
        }

    
    



        $raf->update([
            'name' => $request->input('name'),
            'stock' => $request->input('stock'),
            'capacity' => $request->input('capacity'),
            'empty_space' => $request->input('empty_space'),
            'column_number' => $request->input('column_number')

            
        ]);

        return redirect()->route('admin.rafs.index')
            ->with('success', 'Raf başarıyla güncellendi.');
    }

    public function destroy(Raf $raf)
    {
        $raf->delete();

        return redirect()->route('admin.rafs.index')
            ->with('success', 'Raf başarıyla silindi.');
    }
}
