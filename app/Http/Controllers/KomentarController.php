<?php

namespace App\Http\Controllers;

use App\Models\komentar;
use App\Http\Requests\StorekomentarRequest;
use App\Http\Requests\UpdatekomentarRequest;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorekomentarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekomentarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function show(komentar $komentar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function edit(komentar $komentar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekomentarRequest  $request
     * @param  \App\Models\komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekomentarRequest $request, komentar $komentar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function destroy(komentar $komentar)
    {
        //
    }
}
