@extends('frontend.index')
@section('home_page')

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


	 <section id="service-details" class="service-details" style="background-color:#FFFBF5; ">
	  <div class="container" data-aos="fade-up">
	   <div class="row gy-4">
	    
	    

	    <div class="col-lg-8 services-list bg-white" >

	     <center><img src="{{url('upload/blog_image/'.$single_post->image)}}" alt="" class="img-fluid services-img" ></center>
	      <div class="pb-4 pt-3">
        <i class="fa fa-user" aria-hidden="true"></i> {{ $single_post['user']['name'] }}
        <a style="float:right;">
         <i class="fa fa-calendar" aria-hidden="true"></i>
         {{date('d-M-Y',strtotime($single_post->created_at))}}
        </a>
       </div>
	     <h3>{{ $single_post->title }}</h3>
	     <p>{!! $single_post->detalis !!}</p>  
	    </div>

	    <div class="col-lg-4">
	     <div class="services-list bg-white">
	      @foreach($alldata as $data)
	      <a href="{{ route('single_page',$data->slug) }}">{{ $data->title }}</a>
	      @endforeach
	     </div>
	    </div>

	   </div>
	  </div>
  </section>

@endsection