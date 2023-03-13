<?php

namespace App\Http\Controllers;

use App\Models\Sidemenu;
use Illuminate\Http\Request;
use App\Http\Resources\SidemenuResource;

class SidemenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sidemenus = Sidemenu::where('parent_id', null)->with('children')->get();

        return SidemenuResource::collection(
            $sidemenus
        );
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
     * @param  \App\Models\Sidemenu  $sidemenu
     * @return \Illuminate\Http\Response
     */
    public function show(Sidemenu $sidemenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sidemenu  $sidemenu
     * @return \Illuminate\Http\Response
     */
    public function edit(Sidemenu $sidemenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sidemenu  $sidemenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sidemenu $sidemenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sidemenu  $sidemenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sidemenu $sidemenu)
    {
        //
    }
}
