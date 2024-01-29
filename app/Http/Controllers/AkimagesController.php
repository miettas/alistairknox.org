<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akimage;
use App\Models\Building;

class AkimagesController extends Controller
{
     
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akimages = Akimage::with('building')->simplePaginate(10);
        return view('Akimage.index', compact(['akimages']));     
    }
// ->with($big)->with($small)->with($thumb)->with($width)
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Akimage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Akimage::create($request->all());
        return redirect('akimages');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Akimages  $akimages
     * @return \Illuminate\Http\Response
     */
    public function show($img)
    {
       
        $akimage = Akimage::with('building')->where('imgid',$img)->find($img); 
       
        list($big,$small,$thumb,$width) = imageSize($akimage->imgpath,$akimage->imgname,$akimage->imgextension);
        
        list($prevPage,$nextPage) = nextChapter('App\Models\Akimage','imgid',$akimage->imgid);
        list($prevChap,$nextChap) = nextBook('App\Models\Akimage','imgid',$akimage->imgid,'building_buildid',$akimage->building_buildid);

        return view('Akimage.show', compact(['akimage']))->with('prevPage', $prevPage)->with('nextPage', $nextPage)->with('nextChap', $nextChap)->with('prevChap', $prevChap)->with('big', $big)->with('small', $small)->with('thumb', $thumb)->with('width', $width);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Akimages  $akimages
     * @return \Illuminate\Http\Response
     */
    public function edit($img)
    {
        $akimage = Akimage::findOrFail($img);
        return view('Akimage.edit', compact('akimage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Akimages  $akimages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $img)
    {
        $akimage = Akimage::findOrFail($img);
        $akimage->update($request->all());
        return redirect('akimages'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Akimages  $akimages
     * @return \Illuminate\Http\Response
     */
    public function destroy($img)
    {
        Akimage::destroy($img);
        return redirect('alimages')->with('flash_message', 'Image deleted!');
    }

    public function linkshow($img)
    {
        $akimage = Akimage::with('buildings')->findOrFail($img);
        $big    = preg_replace('/150/', '1800', $akimage->imgpath); 
        $small  = preg_replace('/1800/', '600', $big); 
        $big    = "$big/$akimage->imgname.$akimage->imgextension";
        $small  = "$small/$akimage->imgname.$akimage->imgextension"; 
        $thumb  = "$akimage->imgpath/$akimage->imgname.$akimage->imgextension";
        $width  = '100%'; 
        list($w,$h) = getimagesize(app_path("../public$thumb"));
        if($h>$w){$width = $w / $h * 100; };  
        $width = "$width%"; 
        $width = preg_replace('/%%/','%', $width);
        return view('Akimage.show', compact(['akimage','buildings']))->with('small', $small)->with('big', $big)->with('width', $width)->with('thumb', $thumb);    
    }
}
