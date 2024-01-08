<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\Book;

class DiysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chapter = Chapter::with('book')->whereNotNull('keyword')->get();
        $book = Book::get();

     	$build =	[];
		$mud = 		[];
		$pise = 	[];
     	$design = 	[];

     	foreach($chapter as $chap){
     		if(preg_match('/design/',$chap->keyword)){
     			array_push($design,$chap);
     		}
     		if(preg_match('/build/',$chap->keyword)){
     			array_push($build,$chap);
     		}
     		if(preg_match('/mud/',$chap->keyword)){
     			array_push($mud,$chap);
			 }
			 if(preg_match('/pise/',$chap->keyword)){
				array_push($pise,$chap);
			}
     	}

        return view('Diy.index', compact(['book','design','build','mud','pise']))->with('book',$book);
    }

}