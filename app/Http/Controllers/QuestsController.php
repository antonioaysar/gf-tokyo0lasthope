<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\QuestsRequest;
use App\Quest;
use Carbon\Carbon;

class QuestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//     	$quests = Quest::all();
    	$quests = Quest::paginate(5);
    	
        return view('quests.quests', compact('quests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestsRequest $request)
    {
        $quest = new Quest;
        $quest->title = $request->title;
    	$quest->text = $request->text;
    	$quest->created_at = Carbon::now();
    	$quest->updated_at = Carbon::now();
    	
    	$quest->save();
    	
        return redirect('/gestione/quests')->with('success', 'Quest creata con successo!');
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
        $quest = Quest::find($id);
        
        return view('quests.edit',compact('quest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuestsRequest $request, $id)
    {
        //Quest::find($id)->update($request->all());
    	$quest = Quest::find($id);
    	$quest->title = $request->title;
    	$quest->text = $request->text;
    	$quest->updated_at = Carbon::now();
    	 
    	$quest->save();
    	
    	
        return redirect('/gestione/quests')->with('success','Quest aggiornata con successo!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Quest::destroy($id);
        
        return redirect('/gestione/quests')->with('success', 'Quest eliminata con successo!');
    }
}
