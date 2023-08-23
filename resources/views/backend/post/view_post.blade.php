@extends('backend.layouts.master')
@section('content')

<div class="content-wrapper">
 
 <div class="content-header">
  <div class="container-fluid">
   <div class="row mb-2">
    <div class="col-sm-6">
     <h5 class="m-0">Manage Blog</h5>
    </div>
    <div class="col-sm-6">
     <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Blog</li>
     </ol>
    </div>
   </div>
  </div>
 </div>

 <!-- Main content -->
 <section class="content">
  <div class="container-fluid">
   <div class="row">
    <div class="col-12">

     <div class="card rounded-0">
      <div class="card-header">
       <h5>Blog List
        <a href="{{route('blog.add')}}" class=" btn btn-outline-primary btn-sm float-right rounded-0"> <i class="fa fa-plus-circle"></i> Add Blog </a>
       </h5>
      </div>
      
      <div class="card-body">
       <table id="example1" class="table table-bordered table-striped" style="width:100%;">     
        
        <thead>
         <tr align="center"> 
          <th><small><strong>SL</strong></small></th>
          <th><small><strong>Title</strong></small></th>
          <th style="max-width:40%;"><small><strong>Detalis</strong></small></th>
          <th><small><strong>Author</strong></small></th>
          <th><small><strong>Image</strong></small></th>
          <th><small><strong>Status</strong></small></th>
          <th><small><strong>Action</strong></small></th>
         </tr>
        </thead>

         <tbody>
          @foreach($alldata as $key => $blog)
           <tr> 

            <td>{{ $key+1 }}</td>
            <td>{{ $blog->title }}</td>
            <td>{!! $blog->detalis !!}</td>
            <td>{{ $blog['user']['name'] }}</td>
            <td align="center">
             <img src="{{ (!empty($blog->image))?url('upload/blog_image/'.$blog->image):url('upload/No-image.jpg') }}" style="width:70px; height:70px; border-radius:50%; border:1px solid #ccc;" >
            </td>
            <td align="center">
              @if($blog->status ==1)
               <a href="{{ route('blog.inactive',$blog->id) }}" class="btn btn-primary btn-sm rounded-0" > Publish </a>
              @else
               <a href="{{ route('blog.active',$blog->id) }}" class="btn btn-secondary rounded-0 btn-sm"  > Draft </a>
             @endif
            </td>
            <td align="center">
             <div class="dropdown ">
              <button class="btn btn-sm btn-outline-primary text-dark dropdown-toggle rounded-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <a class="dropdown-item" title="Edit" href="{{ route('blog.edit',$blog->id) }}">Edit</a>
               <a class="dropdown-item" title="Delete"  id="delete" href="{{ route('blog.delete',$blog->id) }}">Delete</a>
              </div>
             </div>
            </td>

           </tr>
          @endforeach
         </tbody>

       </table>
      </div>
     </div>  
    </div>
   </div>
  </div>
 </section>
</div>
  <!-- /.content-wrapper -->



@endsection
