<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgChasse;

class ProgChasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ProgChasse = ProgChasse::all();
        return view ('ProgChasse.index')->with('ProgChasse', $ProgChasse);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ProgChasse.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        ProgChasse::create($input);
        return redirect('ProgChasse')->with('flash_message', 'ProgChasse Addedd!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ProgChasse = ProgChasse::find($id);
        return view('ProgChasse.show')->with('ProgChasse', $ProgChasse);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ProgChasse = ProgChasse::find($id);
        return view('ProgChasse.edit')->with('ProgChasse', $ProgChasse);
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
        $ProgChasse = ProgChasse::find($id);
        $input = $request->all();
        $ProgChasse->update($input);
        return redirect('ProgChasse')->with('flash_message', 'ProgChasse Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProgChasse::destroy($id);
        return redirect('ProgChasse')->with('flash_message', 'ProgChasse deleted!');
    }
}
