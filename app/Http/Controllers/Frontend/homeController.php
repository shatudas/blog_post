<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\post;
use Auth;
use Str;

class homeController extends Controller
{
  
  public function homepage()
  {
  	 $data['alldata'] = post::where('status',1)->paginate(6);
 	 return view ('frontend.home',$data);
  }

  public function searchmethod(Request $request){
			$data = $request->search;
			$searchdata = post::where('title', 'like', '%' . $data . '%')->where('status', 1)->get();
		return view('frontend.search',compact('searchdata'));
	}


  public function single_page($slug){
     $data['alldata'] = post::where('status',1)->get();
  	 $data['single_post']=post::where('slug',$slug)->first();
  	 return view('frontend.single_page',$data);
  }

}
