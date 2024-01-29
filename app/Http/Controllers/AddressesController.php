<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Building;
use App\Models\Plan;

class AddressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = Address::with('building','plan')->paginate(20); 
        return view('Address.index', compact(['addresses']));
    }
   
    // public function index()
    // {  
    //     $address = Address::with('buildings')->simplePaginate(20);  
    //     foreach($address as $adr){
    //         $building = Building::where('buildname',$adr->building_buildid)->get();
    //     }
    //     return view('Address.index', compact(['address','building']));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Address.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Address::create($request->all());
        return redirect('addresses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {   
        $address = Address::with('building')->find($id); 
        list($prevPage,$nextPage) = nextChapter('App\Models\Address','adrid',$address->adrid);
        return view('Address.show', compact(['address']))->with('prevPage',$prevPage)->with('nextPage',$nextPage);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $address = Address::findOrFail($id);
        return view('Address.edit', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $adr)
    {
        $address = Address::findOrFail($adr);
        $address->update($request->all());
        return redirect('addresses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Address::destroy($id);
        return redirect('addresses')->with('flash_message', 'Address deleted!');
    } 
}
