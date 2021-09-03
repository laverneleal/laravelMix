<?php

namespace App\Http\Controllers;

use App\Models\KihonJouhouItem;
use Illuminate\Http\Request;

class KihonJouhouItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $items = KihonJouhouItem::all();

        $items = \DB::table('dbo.M_CDM006')->get();

        return view('index', ['items' => $items]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KihonJouhouItem  $kihonJouhouItem
     * @return \Illuminate\Http\Response
     */
    public function show(KihonJouhouItem $kihonJouhouItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KihonJouhouItem  $kihonJouhouItem
     * @return \Illuminate\Http\Response
     */
    public function edit(KihonJouhouItem $kihonJouhouItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KihonJouhouItem  $kihonJouhouItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KihonJouhouItem $kihonJouhouItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KihonJouhouItem  $kihonJouhouItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(KihonJouhouItem $kihonJouhouItem)
    {
        //
    }
}
