<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;
use App\Models\Akimage;
use App\Models\Asknox;
use App\Models\Biography;
use App\Models\Chapter;
use App\Models\Plan;
use App\Models\Address;
use App\Models\Person;
use App\Models\Book;
use App\Models\Mydirectory;


class SearchController extends Controller
{
    // BUILDINGS------------------------------------------------------------
	public function searchbuildings(Request $request)
	{
		list($buildings,$num) = searchQuery($request,'App\Models\Building');

		if( $num>1){
			return view('Building.index', compact('buildings'));
		}
		elseif($num == 1){
			$build = $buildings[0]['buildid'];	
			$building = $buildings[0];
			
			list($prevPage,$nextPage) = nextChapter('App\Models\Building','buildid',$building->buildid);
			
			if(preg_match('/YLTAD28 \d+/',$building->drawinglocation,$match)){
				$location = $match[0];
			}

	        if(isset($location)){
				$builds = Building::where('client', 'like', "%".$building->client."%")->orWhere('drawinglocation',$location)->get();
				if(count($builds)==1){
					return view('Building.show', compact(['building']))->with('prevPage',$prevPage)->with('nextPage',$nextPage)->with('builds',$builds[0]);
				}
				else{
	            	return view('Building.show', compact(['building']))->with('prevPage',$prevPage)->with('nextPage',$nextPage)->with('builds',$builds);
				}
			}
	        else{
	            $builds = Building::where('client', 'like', "%".$building->client."%")->get();
	            return view('Building.show', compact(['building']))->with('prevPage',$prevPage)->with('nextPage',$nextPage)->with('builds',$builds[0]);
	        }
		}
		else{
			return view('Building.index', ['noresult'=>'No building matches your query. Try again . . .']);	
        }
	}

//ADDRESSES------------------------------------------------------------
	
	public function searchaddresses(Request $request)
	{
		list($addresses,$num) = searchQuery($request,'App\Models\Address');
		
			if( $num>1){
				return view('Address.index', compact('addresses'));
			}
			elseif($num == 1){
				$adr = $addresses[0]['adrid'];
				$addresses = Address::find($adr); 
																
				list($prevPage,$nextPage) = nextChapter('App\Models\Address','adrid',$addresses->adrid);
				return view('Address.show', compact('addresses'))->with('prevPage',$prevPage)->with('nextPage',$nextPage)->with('address',$addresses);
			}
			else{	
				return view('Address.index', ['noresult'=>'No address matches your query. Try again . . .']);
			}
		
	}

// IMAGES------------------------------------------------------------

	public function searchimages(Request $request)
	{
		list($akimages,$num) = searchQuery($request,'App\Models\Akimage');
		
		if(isset($num)){

			if( $num>1){
				return view('Akimage.index', compact('akimages'));
			}
			elseif($num == 1){
				$img = $akimages[0]['imgid'];
				$akimage = $Akimages[0];
				list($big,$small,$thumb,$width) = imgsze($akimage->imgpath,$akimage->imgname,$akimage->imgextension);
				list($prevPage,$nextPage) = nextChapter('App\Models\Akimage','imgid',$akimage->imgid);
	    		list($prevChap,$nextChap) = nextBook('App\Models\Akimage','imgid',$akimage->imgid,'building_buildid',$akimage->building_buildid);
			
				return view('Akimage.show', compact('akimage'))->with('prevPage', $prevPage)->with('nextPage', $nextPage)->with('nextChap', $nextChap)->with('prevChap', $prevChap)->with('big', $big)->with('small', $small)->with('thumb', $thumb)->with('width', $width)->with('akimages',$akimage);
			}
			else{
				return view('Akimage.index', ['noresult'=>'No image matches your query. Try again . . .']);
			}
		}
		else{
			return view('Akimage.index', ['noresult'=>'No image matches your query. Try again . . .']);
		}
	}

// PLANS------------------------------------------------------------

	public function searchplans(Request $request)
	{
		list($plans,$num) = searchQuery($request,'App\Models\Plan');
		
		if( $num>1){
			return view('Plan.index', compact('plans'))->with('plan',$plans);
		}
		elseif($num == 1){
			$id = $plans[0]['plid'];
			$plans = $plans[0];	
			
			list($prevPage,$nextPage) = nextChapter('App\Models\Plan','plid',$plans->plid);

			return view('Plan.show', compact('plans'))->with('prevPage',$prevPage)->with('nextPage',$nextPage)->with('plan',$plans);
		}
		else{
			return view('Plan.index', ['noresult'=>'No plan matches your query. Try again . . .'])->with('plans',$num);	
		}
	}

// CHAPTERS------------------------------------------------------------

	public function searchchapters(Request $request)
	{
		list($chapter,$num) = searchQuery($request,'App\Models\Chapter');
			
		if( $num > 1){
			$bks = Book::get();
			return view('Chapter.index', compact('chapter'))->with('bks',$bks);
		}
		elseif($num == 1){
			$id = $chapter[0]['book_bkid'];
			$chaps = Chapter::where('book_bkid',$id)->get(); 
			$book = Book::where('bkid',$id)->get();
			$chapters = $chapter[0];

			list($prevPage,$nextPage) = nextChapter('App\Models\Chapter','chapid',$chapters->chapid);
        	list($prevChap,$nextChap) = nextBook('App\Models\Chapter','chapid',$chapters->chapid,'book_bkid',$chapters->book_bkid);

			return view('Chapter.show', compact('chapters'))->with('prevPage', $prevPage)->with('nextPage', $nextPage)
				->with('nextChap', $nextChap)->with('prevChap', $prevChap)->with('chapter',$chapters)->with('chaps',$chaps);
		}
		else{	 
			return view('Chapter.index', ['noresult'=>'No chapter matches your query. Try again . . .']);
		}
	}

// PEOPLE------------------------------------------------------------

	public function searchpeople(Request $request)
	{
		list($people,$num) = searchQuery($request,'App\Models\Person');

		if( $num>1){ 
			return view('Person.index', compact('people'))->with('person',$people);
		}
		elseif($num == 1){
			$ppid = $people[0]['ppid']; 
			$ppl = Person::orderBy('pptype')->orderBy('ppname')->orderBy('ppfirst_name')->get();
			list($prevPage,$nextPage) = nextChapter('App\Models\Person','ppid',$ppid);
			return view('Person.show', compact('people'))->with('person',$people[0])
				->with('ppl',$ppl)->with('prevPage',$prevPage)->with('nextPage',$nextPage);
		}
		else{	
			return view('Person.index', ['noresult'=>'No person matches your query. Try again . . .']);
		}
	}


// ASKNOXES------------------------------------------------------------

	public function SearchAsknox(Request $request)
	{
		list($asknoxes,$num) = searchQuery($request,'App\Models\Asknox');
			
		if( $num>1){
			
			return view('Asknox.index', compact('asknoxes'));
		}
		elseif($num == 1){
			$asknoxes = $asknoxes[0]['askid'];
			$asknox = Asknox::find($ask);
			
			list($prevPage,$nextPage) = nextChapter('App\Models\Asknox','askid',$askid);
    		// list($prevChap,$nextChap) = nextChapter('App\Models\Directory','dirid',$dir,'building_buildid',$directory->building_buildid);
		
			return view('Asknox.show', compact('asknoxes'))->with('asknox',$asknox)->with('prevPage', $prevPage)->with('nextPage', $nextPage);
		}
		else
		{
			return view('Asknox.index', ['noresult'=>'No result for your query. Try again . . .']);
		}
	}

	// BIOGRAPHIES------------------------------------------------------------

	public function searchBiographies(Request $request)
	{
		list($biographies,$num) = searchQuery($request,'App\Models\Biography');
			
		if( $num > 1 ){
			
			return view('Biography.index', compact('biographies'));
		}
		elseif($num == 1){
			$bio = $biography[0]['bioid'];
			$biographies = Biography::find($bio);
			
			list($prevPage,$nextPage) = nextChapter('App\Models\Biography','bioid',$bio);
    		// list($prevChap,$nextChap) = nextChapter('App\Models\Directory','dirid',$dir,'building_buildid',$directory->building_buildid);
		
			return view('Biography.show', compact('biography'))->with('biographies',$biographies)->with('prevPage', $prevPage)->with('nextPage', $nextPage);
		}
		else
		{
			return view('Biography.index', ['noresult'=>'No result for your query. Try again . . .']);
		}
	}

}