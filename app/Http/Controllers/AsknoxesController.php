<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asknox;
use App\Models\Akimage;
use App\Models\Building;
use App\Models\Plan;

class AsknoxesController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asknox = Asknox::simplePaginate(15);
        return view('Asknox.index', compact('asknox'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asknox.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Asknox::create($request->all());
        return redirect('asknoxes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ask)
    {
        $asknox = Asknox::findOrFail($ask); 
        
        list($prevPage,$nextPage) = nextChapter('App\Models\Asknox', 'askid', $asknox->askid);
       
        return view('Asknox.show', compact('asknox'))->with('prevPage',$prevPage)->with('nextPage',$nextPage);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ask)
    {
        $asknox = Asknox::findOrFail($ask);
        return view('Asknox.edit', compact('asknox'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ask)
    {
        $asknox = Asknox::findOrFail($ask);
        $asknox->update($request->all());
        return redirect('asknoxes'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asknox $ask)
    {
        Asknox::destroy($ask);
        return redirect('askonxes')->with('flash_message', 'Knox deleted!');
    }
//     public function splash_page()
//    {
//         $asknox = Asknox::findOrFail();
//         return view('Asknox.show', compact('asknox'));
//     }

    // public function splash_page()
    // {
    //     $asknox = Asknox::findOrFail(29);dd($asknox);
    //     return view('Asknox.show', compact('asknox'));
    // }
}
