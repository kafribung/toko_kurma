<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BerandaRequest;

// Import Class Str
use Illuminate\Support\Str;

// Import DB Kurma
use App\Models\Kurma;

class BerandaController extends Controller
{
    // READ
    public function index()
    {
        $kurmas = Kurma::orderBy('id', 'DESC')->paginate(4);
        return view('pages.beranda', compact('kurmas'));
    }

    //CREATE
    public function create()
    {
        return view('pages.create_beranda');
    }

    // STORE
    public function store(BerandaRequest $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->negara);

        if ($request->has('img')) {
            $img      = $request->file('img');
            $name_img = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('kurma'), $name_img);

            $data['img'] = $name_img;
        }

        $request->user()->kurmas()->create($data);

        return redirect('/beranda')->with('msg', 'Data berhasil ditambhakan');
    }

    // SHOW
    public function show($slug)
    {
        $kurma = Kurma::where('slug', $slug)->first();

        return view('pages.show_beranda', compact('kurma'));
    }

    // EDIT
    public function edit($slug)
    {
        $kurma = Kurma::where('slug', $slug)->first();

        return view('pages.edit_beranda', compact('kurma'));
    }

    //UPDATE
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'negara'   => ['required', 'string', 'min:3', 'max:50'],
            'img'      => ['mimes:png,jpg,jpeg'],
            'deskripsi'=> ['required']
        ]);

        $data['slug'] = Str::slug($request->negara);

        if ($request->has('img')) {
            $img      = $request->file('img');
            $name_img = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('kurma'), $name_img);

            $data['img'] = $name_img;
        }

        Kurma::findOrFail($id)->update($data);

        return redirect('/beranda')->with('msg', 'Data Berhasil dirubah');
    }

    // DELETE
    public function destroy($id)
    {
        Kurma::destroy($id);

        return redirect('/beranda')->with('msg', 'Data Berhasil dihapus');
    }

    public function about()
    {
        return view('pages.about');
    }
}
