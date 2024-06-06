<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Default_link;
use App\Models\Custom_Link;
=======
use App\Models\Custom;
>>>>>>> 6600dc5479b876a8600f61c773b087e4bfc19a69
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
        $data_akademik = Default_link::get();
        // $data_custom = Custom_Link::get();

        return view('portal/dashboard',compact('data_akademik'));
    }

    public function form()
    {
        return view('portal/form-link');
    }

    public function akademik()
    {
        $data_akademik = Default_link::get();
        return view('portal/akademik',compact('data_akademik'));
    }

    public function custom_link()
    {
        return view('portal/custom-link');
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
