<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Darryldecode\Cart\Validators\Validator;

use App\Models\Personel;
use Illuminate\Http\Request;

class PersonelController extends Controller
{
    public function index()
    {
        $personels = Personel::all();
        return view('admin.personels.index', compact('personels'));
    }
    public function show(Personel $personel)
    {
        return view('client.personelsdetail', compact('personel'));
    }
    public function asd()
    {
        $personels = Personel::all();
       return view('client.personels',compact('personels'));
    }


    public function create()
    {
        return view('admin.personels.create');
    }

    public function store(Request $request)
    {
         $request->validate([

            'username' => 'required',
            'title' => 'required',

          
        ]);


        Personel::create([
            'username' => $request->input('username'),
            'title' => $request->input('title'),

        ]);

        return redirect()->route('admin.personels.index')
            ->with('success', 'Personel başarıyla oluşturuldu.');
    }

    public function edit(Personel $personel)
    {
        return view('admin.personels.edit', compact('personel'));
    }

    public function update(Request $request, Personel $personel)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'title' => 'required'

            
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.personels.edit', $personel->id)
                ->withErrors($validator)
                ->withInput();
        }

        $personel->update([
            'title' => $request->input('title'),
            'username' => $request->input('username')
        ]);

        return redirect()->route('admin.personels.index')
            ->with('success', 'Personel başarıyla güncellendi.');
    }

    public function destroy(Personel $personel)
    {
        $personel->delete();

        return redirect()->route('admin.personels.index')
            ->with('success', 'Personel başarıyla silindi.');
    }
}
