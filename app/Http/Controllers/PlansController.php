<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\Address;
use App\Models\Building;

class PlansController extends Controller
{
     /* Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::with('building','address')->simplePaginate(12);
        return view('Plan.index', compact(['plans']));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Plan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        Plan::create($request->all());
        return redirect('plans');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $pl
     * @return \Illuminate\Http\Response
     */
    public function show($pl)
    {
        $plan = Plan::with('building','address')->findOrFail($pl); 
        list($prevPage,$nextPage) = nextChapter('App\Models\Plan','plid',$plan->plid);
        return view('Plan.show', compact(['plan']))->with('prevPage',$prevPage)->with('nextPage',$nextPage);
    }
    /**
     * Show the form for editing the specified resource.
	 *
     * @param  int  $pl
     * @return \Illuminate\Http\Response
     */
    public function edit($pl)
    {
        $plans = Plan::findOrFail($pl);
        return view('Plan.edit', compact('plans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $pl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pl)
    {
        $plans = Plan::findOrFail($pl);
        $plans->update($request->all());
        return redirect('plans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $pl
     * @return \Illuminate\Http\m_responsekeys(conn, identifier)
     */
    public function destroy($pl)
    {
        Plan::destroy($pl);
        return redirect('plans')->with('flash_message', 'Plan deleted!');
    }

    public function plmenu($plmenu)
    {
        list($min,$max) = explode("-", $plmenu); 
        $plans = [];
        $buildings = Building::where('buildid','!=',0)->whereBetween('year_built',[$min,$max])->orderBy('year_built')->orderBy('client')->simplePaginate(15);
        foreach($buildings as $build){
            $plan = Plan::where('plid',$build->plan_plid);
            array_push($plans,$buildings,$plan);
        }
        
        return view('Plan.index', compact('buildings'))->with('plan',$plan);
    }

    public function planlanding()
    {
        $ary = [];
        $array = Plan::get();
        foreach($array as $a){
            $id = $a->plid; 
            $ary = (array)$ary;
            array_push($ary, $id);
        }
 
        $d = $ary[rand(0, count($ary)-1)];   
        $plan = Plan::findOrFail($d);

        return view('Plan.showplans', compact('plan'));
    }
}
