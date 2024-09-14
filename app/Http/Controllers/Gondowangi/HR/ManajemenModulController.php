<?php

namespace App\Http\Controllers\Gondowangi\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManajemenModulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gondowangi.hr.manajemenmodul.index', [
            'title' => 'Manajemen Modul - Gondowangi'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gondowangi.hr.manajemenmodul.create', [
            'title' => 'Menambahkan Modul - Gondowangi'
        ]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
