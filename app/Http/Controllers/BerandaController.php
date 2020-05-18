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
        $kurmas = Kurma::orderBy('id', 'DESC')->paginate(6);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function about()
    {
        return view('pages.about');
    }
}
