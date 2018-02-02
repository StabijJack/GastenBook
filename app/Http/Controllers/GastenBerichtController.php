<?php

namespace App\Http\Controllers;

use App\GastenBericht;
use App\http\Requests\GastenBerichtValidation;

class GastenBerichtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gastenBerichten = GastenBericht::latest()->get();
        return view('gastenbericht.index', compact('gastenBerichten'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gastenbericht.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GastenBerichtValidation $request)
    {
        $gastenBericht = GastenBericht::create($request->all());
        
        $file = $request->file('foto');
        if ($file <> null) {
            $path = '\fotos';
            $originalName = $file->getClientOriginalName();
            $file->move(public_path().$path, $gastenBericht->id . $file->getClientOriginalName());
            $gastenBericht->foto = $path . '/' . $gastenBericht->id . $file->getClientOriginalName();
            $gastenBericht->save();
        }
        flash('Bericht is opgeslagen')->success();
        return redirect('gastenbericht');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GastenBericht  $gastenBericht
     * @return \Illuminate\Http\Response
     */
    public function show(GastenBericht $gastenBericht)
    {
        return view('GastenBericht.show', compact('gastenBericht'));
    }
        /**
     * Display the specified resource.
     *
     * @param  \App\GastenBericht  $gastenBericht
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GastenBericht  $gastenBericht
     * @return \Illuminate\Http\Response
     */
    public function edit(GastenBericht $gastenBericht)
    {
        return view('GastenBericht.edit', compact('gastenBericht')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GastenBericht  $gastenBericht
     * @return \Illuminate\Http\Response
     */
    public function update(GastenBerichtValidation $request,  GastenBericht $gastenBericht)
    {
        $gastenBericht->update($request->all());
       
        $file = $request->file('foto');
        if ($file <> null) {
            $path = '\fotos';
            $originalName = $file->getClientOriginalName();
            $file->move(public_path().$path, $gastenBericht->id . $file->getClientOriginalName());
            $gastenBericht->foto = $path . '/' . $gastenBericht->id . $file->getClientOriginalName();
            $gastenBericht->save();
        }
        flash('Bericht is gewijzigd');
        return redirect('gastenbericht');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GastenBericht  $gastenBericht
     * @return \Illuminate\Http\Response
     */
    public function destroy(GastenBericht $gastenBericht)
    {
        $gastenBericht->delete();
        flash('Bericht is verwijderd')->overlay();
        return redirect('gastenbericht');
    }
}
