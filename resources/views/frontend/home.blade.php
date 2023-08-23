@extends('frontend.index')
@section('home_page')


<!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">

          <form action="{{route('search')}}" method="get" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
           @csrf
            <input type="text" name="search" class="form-control" placeholder="Search Blog">
            <button type="submit" class="btn btn-primary">Search</button>
          </form>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="{{ asset('frontend') }}/assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>
      </div>
    </div>
  </section>


 <!-- ======= Services Section ======= -->
  <section id="service" class="services pt-0" style="background-color:#FFFBF5;">
   <div class="container-fluid px-4" data-aos="fade-up">

    <div class="section-header">
     <span>Our Blog</span>
     <h2>Our Blog</h2>
    </div>

    <div class="row gy-4">

     @foreach($alldata as $value )

     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
      <div class="card p-1">
       <div class="card-img">
        <img src="{{url('upload/blog_image/'.$value->image)}}" alt="" class="img-fluid" width="100%" style="height:200px;">
       </div>

       <div>
        <i class="fa fa-user" aria-hidden="true"></i> {{ $value['user']['name'] }}
        <a style="float:right;">
         <i class="fa fa-calendar" aria-hidden="true"></i>
         {{date('d-M-Y',strtotime($value->created_at))}}
        </a>
       </div>
        
       <h5 class="py-2">
        <a  href="{{ route('single_page',$value->slug) }}" class="stretched-link ">{{ $value->title }}</a>
       </h5>

       @php
        
        

        $blogDetailsData = strip_tags($value->detalis);
        $replaceData = str_replace('&nbsp;', ' ', $blogDetailsData);
        $mainDetails =substr($replaceData,0,100);
        //dd($taglessBody);
       @endphp
  

       <p class="px-2">{!! $mainDetails !!}</p>
        <div>
       </div>
      </div>
     </div>

     @endforeach
         
    </div>

    <div class="row">
     <div class="col-lg-12 mt-5">
      {{ $alldata->links() }}
     </div>
    </div>

   </div>
  </section>

@endsection