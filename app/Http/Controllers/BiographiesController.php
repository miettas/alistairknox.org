<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Akimage;
use App\Models\Building;
use App\Models\Plan;
use App\Models\Biography;

class BiographiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biography = Biography::simplePaginate(15);
        return view('Biography.index', compact('biography'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Biography.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Biography::create($request->all());
        return redirect('biographies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($bio)
    {
        $biography = Biography::findOrFail($bio);
        list($prevPage,$nextPage) = nextChapter('App\Models\Biography','bioid',$biography->bioid,'bioid');
        
        return view('Biography.show', compact('biography'))->with('prevPage',$prevPage)->with('nextPage',$nextPage);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($bio)
    {
        $biography = Biography::findOrFail($bio);
        return view('Biography.edit', compact('biography'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $bio)
    {
        $biography = Biography::findOrFail($bio);
        $biography->update($request->all());
        return redirect('biographies'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biography $bio)
    {
        Biography::destroy($bio);
        return redirect('biographies')->with('flash_message', 'Bio deleted!');
    }

    public function splash_page()
    {
        $biography = Biography::findOrFail(29);
        return view('Biography.show', compact('biography'));
    }
}
    
