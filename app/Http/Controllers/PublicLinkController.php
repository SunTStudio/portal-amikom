<?php

namespace App\Http\Controllers;

use App\Models\Default_link;
use App\Models\Custom;
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
        // $data_custom = Custom_Link::get();

        return view('portal/dashboard',compact('data_akademik'));
    }

    public function form()
    {
        return view('portal/form-link');
    }

    public function akademik()
    {
        $data_akademik = Default_link::simplePaginate(6);
        return view('portal/akademik',compact('data_akademik'));
    }

    public function custom_link()
    {

        $data = Custom::where('id_pengguna',session('nim'))->with('kategori')->get();
        return view('portal/custom-link',compact('data'));
    }

    public function umum()
    {
        return view('portal/umum');
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
    public function edit(Public_link $public_link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Public_link $public_link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Public_link $public_link)
    {
        //
    }
}
