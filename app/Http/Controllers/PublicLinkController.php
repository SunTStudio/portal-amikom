<?php

namespace App\Http\Controllers;

use App\Models\Default_link;
use App\Models\Custom;
use App\Models\Kategori;
use App\Models\Public_link;
use Illuminate\Http\Request;

class PublicLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function dashboard()
    {
        $data_akademik = Default_link::simplePaginate(6);
        $data = Custom::where('id_pengguna', session('nim'))->with('kategori')->simplePaginate(6);
        $kategori = Kategori::all();
        $data_umum = Custom::whereHas('kategori', function ($query) {
            $query->whereNotIn('nama_kategori', ['Akademik', 'Custom']);
        })->simplePaginate(6);

        return view('portal/dashboard', compact('data_akademik','data_umum', 'data','kategori'));
    }

    public function form()
    {
        return view('portal/form-link');
    }

    public function akademik(Request $request)
    {
        $data_akademik = Default_link::simplePaginate(6);
        return view('portal/akademik', compact('data_akademik', 'request'));
    }

    public function akademikSearch(Request $request)
    {
        $data_akademik = Default_link::where('Nama_Link', 'LIKE', '%' . $request->search . '%')->simplePaginate(6);
        $kategori = Kategori::all();
        return view('portal/akademik', compact('data_akademik', 'kategori', 'request'));
    }

    public function custom_link(Request $request)
    {
        $kategori = Kategori::all();
        $data = Custom::where('id_pengguna', session('nim'))->with('kategori')->simplePaginate(6);
        return view('portal/custom-link', compact('data', 'kategori', 'request'));
    }

    public function customSearch(Request $request)
    {
        $data = Custom::where('Nama_Link', 'LIKE', '%' . $request->search . '%')->simplePaginate(6);
        $kategori = Kategori::all();
        return view('portal/custom-link', compact('data', 'kategori', 'request'));
    }

    public function customKategori(Request $request, $kategori)
    {
        $data = Custom::where('id_kategori_link', $kategori)->simplePaginate(6);
        $kategori = Kategori::all();
        return view('portal/custom-link', compact('data', 'kategori', 'request'));
    }

    public function umum(Request $request)
    {    
        $kategori = Kategori::all();
        $data_umum = Custom::whereHas('kategori', function ($query) {
            $query->whereNotIn('nama_kategori', ['Akademik', 'Custom']);
        })->simplePaginate(6);
    
    
        return view('portal/umum', compact('data_umum', 'kategori', 'request'));
    }

    public function umumSearch(Request $request)
    {
        $data_umum = Public_link::where('Nama_Link', 'LIKE', '%' . $request->search . '%')->simplePaginate(6);
        $kategori = Kategori::all();
        return view('portal/akademik', compact('data_umum', 'kategori', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(request $request)
    {
        Custom::create($request->all());
        return redirect()->route('portal.custom');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Public_link $public_link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Public_link $public_link, $id)
    {
        $data = Custom::find($id);
        return view('portal.edit-link', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Custom::find($id);
        $data->update($request->all());
        return redirect()->route('portal.custom');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Public_link $public_link, $id)
    {
        $link = Custom::find($id);
        $link->delete();
        return redirect()->route('portal.custom');
    }
}
