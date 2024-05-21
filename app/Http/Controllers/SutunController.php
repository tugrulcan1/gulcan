<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sutun;
use Darryldecode\Cart\Validators\Validator;
use Illuminate\Http\Request;

class SutunController extends Controller
{
    public function index()
    {
        $sutuns = Sutun::all();
        return view('admin.sutuns.index', compact('sutuns'));
    }
    public function show(Sutun $sutun)
    {
        return view('client.sutunsdetail', compact('sutun'));
    }
    public function asd()
    {
        $sutuns = Sutun::all();
       return view('client.sutuns',compact('sutuns'));
    }


    public function create()
    {
        return view('admin.sutuns.create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'capacity' => 'required',
            'empty_space' => 'required',
            'section_number' => 'required',
            'raf_id' => 'required',
        ]);


        Sutun::create([
            'name' => $request->input('name'),
            'stock' => $request->input('stock'),
            'capacity' => $request->input('capacity'),
            'empty_space' => $request->input('empty_space'),
            'section_number' => $request->input('section_number'),
            'raf_id' => $request->input('raf_id'),
        ]);

        return redirect()->route('admin.sutuns.index')
            ->with('success', 'Sütun başarıyla oluşturuldu.');
    }

    public function edit(Sutun $sutun)
    {
        return view('admin.sutuns.edit', compact('sutun'));
    }

    public function update(Request $request, Sutun $sutun)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'stock' => 'required',
            'capacity' => 'required',
            'empty_space' => 'required',
            'section_number' => 'required',
            'raf_id' => 'required'
            
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.sutuns.edit', $sutun->id)
                ->withErrors($validator)
                ->withInput();
        }

    
    



        $sutun->update([
            'name' => $request->input('name'),
            'stock' => $request->input('stock'),
            'capacity' => $request->input('capacity'),
            'empty_space' => $request->input('empty_space'),
            'section_number' => $request->input('section_number'),
            'raf_id' => $request->input('raf_id')

            
        ]);

        return redirect()->route('admin.sutuns.index')
            ->with('success', 'Sütun başarıyla güncellendi.');
    }

    public function destroy(Sutun $sutun)
    {
        $sutun->delete();

        return redirect()->route('admin.sutuns.index')
            ->with('success', 'Sütun başarıyla silindi.');
    }
}
