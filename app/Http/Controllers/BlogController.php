<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Darryldecode\Cart\Validators\Validator;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }
    public function show(Blog $blog)
    {
        return view('client.blogsdetail', compact('blog'));
    }
    public function asd()
    {
        $blogs = Blog::all();
       return view('client.blogs',compact('blogs'));
    }


    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required',
            'content' => 'required',
            'short_content' => 'required',
            'image' => 'required',
        ]);

        $dosya = $request->file('image');

        // Eğer dosya seçilmediyse veya geçerli bir dosya değilse hata döndür
        if (!$dosya || !$dosya->isValid()) {
            return redirect()->back()->with('error', 'Geçerli bir dosya seçin.');
        }

        // Dosyayı yükleme klasörüne kaydetme
        $dosyaAdi = $dosya->getClientOriginalName(); // Dosya adını alın
        $dosya->move(public_path('uploads'), $dosyaAdi); // Dosyayı uploads klasörüne kaydet



        Blog::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'short_content' => $request->input('short_content'),
            'image' => $dosyaAdi,
        ]);

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog başarıyla oluşturuldu.');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'short_content' => 'required'
            
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.blogs.edit', $blog->id)
                ->withErrors($validator)
                ->withInput();
        }

    
        $dosya = $request->file('image');
        $dosyaAdi=$blog->image;

        // Eğer dosya seçilmediyse veya geçerli bir dosya değilse hata döndür
        if ($dosya) {
             // Dosyayı yükleme klasörüne kaydetme
        $dosyaAdi = $dosya->getClientOriginalName(); // Dosya adını alın
        $dosya->move(public_path('uploads'), $dosyaAdi); // Dosyayı uploads klasörüne kaydet

        }



        $blog->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'short_content' => $request->input('short_content'),
            'image' => $dosyaAdi
        ]);

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog başarıyla güncellendi.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog başarıyla silindi.');
    }
}
