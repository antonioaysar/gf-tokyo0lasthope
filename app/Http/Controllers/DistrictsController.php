<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\DistrictsRequest;
use App\District;

class DistrictsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//         $districts = District::all();
    	$districts = District::paginate(5);
    	
        return view('districts.districts', compact('districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('districts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DistrictsRequest $request)
    {    	
        $district = new District;
    	$district->nome = $request->nome;
    	$district->descrizione = $request->descrizione;
    	$district->position = $request->position;
    	
    	$district->save();
    	
        return redirect('/gestione/districts')->with('success', 'Distretto creato con successo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $district = District::find($id);
        
        return view('districts.edit',compact('district'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DistrictsRequest $request, $id)
    {
         District::find($id)->update($request->all());
        
        return redirect('/gestione/districts')->with('success','Distretto aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        District::destroy($id);
        
        return redirect('/gestione/districts')->with('success', 'Distretto eliminato con successo!');
    }
}
