<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Chapter;
use App\Models\Akimage;

class ChaptersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chapter = Chapter::with('book')->orderBy('book_bkid','asc')->orderBy('chapid','asc')->simplePaginate(15);
     
        $bks = Book::get();
        return view('Chapter.index', compact(['chapter']))->with('bks',$bks); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Chapter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Chapter::create($request->all());
        return redirect('chapters');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $chap
     * @return \Illuminate\Http\Response
     */
    public function show($chap)
    {
        $chapter = Chapter::with('book')->findOrFail($chap);
        $id = $chapter->book_bkid;
        $book = $chapter->book;
        $bks = Book::where('bkid', $chapter->book_bkid)->first();
        $chaps = Chapter::where('book_bkid',$id)->get();
     
        // list($prevPage,$nextPage) = nextChapter('App\Models\Chapter','chapid',$chapter->chapid,'');
        list($prevChap,$nextChap) = nextBook('App\Models\Chapter','chapid',$chapter->chapid,'book_bkid',$chapter->book_bkid);
        list($prevPage,$nextPage) = nextChapter('App\Models\Chapter','chapid',$chapter->chapid);
        
        return view('Chapter.show', compact(['chapter']))->with('chaps',$chaps)->with('nextChap', $nextChap)->with('prevChap', $prevPage)->with('nextPage', $nextPage)->with('prevPage', $prevPage)->with('book', $book)->with('bks', $bks);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $chap
     * @return \Illuminate\Http\Response
     */
    public function edit($chap)
    {
        $chapter = Chapter::findOrFail($chap);
        return view('Chapter.edit', compact('chapter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $chap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $chap)
    {
        $chapter = Chapter::findOrFail($chap);
        $chapter->update($request->all());
        return redirect('chapters'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $chap
     * @return \Illuminate\Http\Response
     */
    public function destroy($chap)
    {
        Chapter::destroy($chap);
        return redirect('chapters')->with('flash_message', 'Chapter deleted!');
    }

     public function diy(){
        $howto =  Chapters::where('keyword','like','%diy%')->orderBy('sort_order')->paginate(15);
        return view('Chapter.index', compact('howto'));
    }
}
