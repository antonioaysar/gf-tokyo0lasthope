<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\NewsRequest;
use App\News;
use Carbon\Carbon;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    	
//     	$news = News::all();
    	$news = News::paginate(5);
    	
        return view('news.news', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
    	$news = new News;
    	$news->text = $request->text;
    	$news->created_at = Carbon::now();
    	$news->updated_at = Carbon::now();
    	
    	$news->save();
    	
        return redirect('/gestione/news')->with('success', 'News creata con successo!');
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
        $news= News::find($id);
        
        return view('news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
//         News::find($id)->update($request->all());
		$news = News::find($id);
    	$news->text = $request->text;
    	$new->updated_at = Carbon::now();
    	 
    	$news->save();
        
        return redirect('/gestione/news')
                        ->with('success','News aggiornata con successo!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);
        
        return redirect('/gestione/news')->with('success', 'News eliminata con successo!');
    }
}
