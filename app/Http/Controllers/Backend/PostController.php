<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\post;
use Auth;
use Str;

class PostController extends Controller
{
  
  //------add------//
  public function view(){
    $data['alldata'] = post::all();
   return view('backend.post.view_post',$data);
  }


  //------add------//
  public function add(){
   return view('backend.post.add_post');
  }


  //------store-------//
 public function store(Request $request)
 {
  $this->validate($request,[
  'title'     =>'required|unique:posts,title',
  'detalis'   =>'required',
  'status'    =>'required',
  ]);

  $data = new post();
  $data->title        =$request->title;
  $data->detalis      =$request->detalis;
  $data->status       =$request->status;
  $data->slug         = Str::slug($request->title);
  $data->created_by   = Auth::user()->id;

   if($request->file('image'))
   {
    $file = $request->file('image');
    $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
    $file->move(public_path('upload/blog_image'),$filename);
    $data['image'] = $filename;
   }

  $data->save();
  return redirect()->route('blog.view')->with('success','Data Insert Successfully');
 }


  //------inactive------//
  public function inactive($id)
   {
    post::find($id)->where('id',$id)->update(['status'=>0]);
    return redirect()->back();
   }


  //----------active------//
  public function active($id)
   {
    post::find($id)->where('id',$id)->update(['status'=>1]);
    return redirect()->back();
   }


   //-----delete------//
   public function delete($id)
   {
    $user = post::find($id);
    if(file_exists('upload/blog_image/' .$user->image) AND !empty($user->image))
     {
      @unlink('upload/blog_image/' .$user->image);
     }
    $user->delete();
    return redirect()->route('blog.view')->with('success','Data Deleted Successfully');
   }


   //------edit-----//
   public function edit($id)
    {
     $data['editdata']=post::find($id);
     return view('backend.post.edit_post',$data);
    }



  //-----update------//
   public function update(Request $request,$id)
   {

    $this->validate($request,[
    'title'     =>'required',
    'detalis'   =>'required',
    'status'    =>'required',
    ]);
 
    $data = post::find($id);
    $data->title        =$request->title;
    $data->detalis      =$request->detalis;
    $data->status       =$request->status;
    $data->slug         = Str::slug($request->title);
    $data->created_by   = Auth::user()->id;

    if($request->file('image'))
    {
     $file = $request->file('image');
     @unlink(public_path('upload/blog_image/'.$data->image));
     $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
     $file->move(public_path('upload/blog_image'),$filename);
     $data['image']=$filename;
    }

    $data->save();
    return redirect()->route('blog.view')->with('success','Date Update Successfully');
  }










}
