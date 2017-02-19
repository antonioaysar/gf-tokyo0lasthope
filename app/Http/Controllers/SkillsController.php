<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Skill;
use App\Http\Requests\SkillsRequest;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$skills = Skill::all();
    	
    	$skills = Skill::paginate(5);
    	
        return view('skills.skills', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SkillsRequest $request)
    {
        $skill = new Skill;
    	$skill->name = $request->name;
    	$skill->stat = $request->stat;
    	$skill->description = $request->description;
    	$skill->id_race = $request->id_race;
    	
    	$skill->save();
    	
        return redirect('/gestione/skills')->with('success', 'Abilità creata con successo!');
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
        $skill = Skill::find($id);
    	
    	return view('skills.edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SkillsRequest $request, $id)
    {
        Skill::find($id)->update($request->all());
        
        return redirect('/gestione/skills')
                        ->with('success','Abilità aggiornata con successo!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	Skill::destroy($id);
    	
    	return redirect('/gestione/skills')->with('success', 'Skill eliminata con successo!');
    }
}
