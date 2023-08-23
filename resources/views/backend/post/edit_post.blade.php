@extends('backend.layouts.master')
@section('content')

 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
     <h5 class="m-0">Manage  blog</h5>
     </div>
      <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">blog</li>
       </ol>
      </div>
     </div>
    </div>
  </div>

 <!-- Main content -->
 <section class="content">
  <div class="container-fluid">
   <div class="row justify-content-center">
    <div class="col-7 rounded-0">
     <div class="card rounded-0">
      
      <div class="card-header">
       <h5> Add blog
        <a href="{{ route('blog.view') }}" class=" btn btn-outline-primary btn-sm float-right rounded-0">
         <i class="fa fa-list"></i> blog List</a>
       </h5>
      </div>
              
      <div class="card-body">
       <form method="POST" action="{{route('blog.update',$editdata->id)}}"  enctype="multipart/form-data" id="myForm">
       @csrf
        <div class="form-row">

         <div class="form-group col-md-12">
          <label for="title"><small>title</small> <span style="color:red;">*</span></label>
          <input type="text" name="title" class="form-control form-control-sm" placeholder="Blog Title" value="{{ $editdata->title }}">
          <font style="color:red">{{ ($errors->has('title'))?($errors->first('title')):'' }}</font>
         </div>

         <div class="form-group col-md-12">
          <label for="detalis"><small>Detalis</small> <span style="color:red;">*</span></label>
          <textarea name="detalis" class="form-control form-control-sm" id="summernote">{!! $editdata->detalis !!}</textarea>
          <font style="color:red">{{ ($errors->has('detalis'))?($errors->first('detalis')):'' }}</font>
         </div>

         <div class="form-group col-md-8">
          <label for="image"> Image <span style="color:red;">*</span></label>
          <input type="file" name="image" class="form-control" id="image">
          <font style="color:red">{{ ($errors->has('image'))?($errors->first('image')):'' }}</font>
         </div>

         <div class="form-group col-md-4">
          <img id="showImage" src="{{ !empty($editdata->image)?url('upload/blog_image/'.$editdata->image):url('upload/No-image.jpg') }}" style="width:120px; height:100px; border:1px solid #ccc; float:right">
         </div>

         <div class="form-group col-md-12">
          <label for="status"> <small>Status</small> <span style="color:red;">*</span> </label>
          <select name="status" class="form-control form-control-sm">
           <option value=""> Select Status </option>
           <option value="1" {{ $editdata->status=="1"?"selected":"" }}> Publish </option>
           <option value="0" {{ $editdata->status=="0"?"selected":"" }}> Unpublish </option>
          </select>
          <font style="color:red">{{ ($errors->has('status'))?($errors->first('status')):'' }}</font>
         </div>

         <div class="form-group col-md-12">
          <input type="submit" value="submit"  class="btn btn-primary btn-md rounded-0">
         </div>

        </div>
       </form>
      </div>

     </div>
    </div>
   </div>
  </div>
 </section>

</div>


<script>
 $(function () {
  $('#myForm').validate({
    rules: {
    title: {
     required: true,
    },
    detalis: {
     required: true,
    },
    status: {
     required: true,
    },
   },

    messages: {
    },

    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>

@endsection
