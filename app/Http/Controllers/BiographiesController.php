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
        
        if($bio==2)
        {
            $ary = [];
            $array = Akimage::where('show',1)->get();
            foreach($array as $a){
                $id = $a->imgid; 
                $ary = (array)$ary;
                array_push($ary, $id);
            }
            // $ary = array('34','300','489','568','761','862','864','868','872','877','909','912','988','997','1011','1032','1033','1037','1038','1039','1045','1050','1054','1063','1111','1131','1137','1139','1142','1146','1150','1182','1193','1194','1196','1197','1201','1203','1205','1211','1219','1222','1226','1234','1264','1269','1272','1273','1304','1311','1324','1327','1332','1343','1362','1364','1373','1453','1460','1546','1596','1613','1795','1956','1959','1992');
            $d = $ary[rand(0, count($ary)-1)];
            $akimage = Akimage::findOrFail($d);

            return view('Biography.showbuilding', compact('akimage'));
        }
        elseif($bio==27)
        {
            $ary = array('567','570','935','1088','1126','369','380','389','390','396','415','354');
            $d = $ary[rand(0, count($ary)-1)];
            $plan = Plan::findOrFail($d);
            return view('Biography.showplans', compact('plan'));
        }
        // elseif($bio==29)
        // {
        //     return view('Biography.show', compact('biography'))->with('akimage',$akimage);
        // }
        elseif($bio == 32){
            return view('Biography.showdir', compact('biography'))->with('akimage',$akimage);
        }
            else{
            return view('Biography.show', compact('biography'))->with('prevPage',$prevPage)->with('nextPage',$nextPage);
        }
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
    
