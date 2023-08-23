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



    <div class="row gy-4">

     @foreach($searchdata as $value)

     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
      <div class="card p-1">
       <div class="card-img">
        <img src="{{ asset('frontend') }}/assets/img/storage-service.jpg" alt="" class="img-fluid">
       </div>
       <div>
        <a href="" class=""> <i class="fa fa-user" aria-hidden="true"></i> {{ $value['user']['name'] }}</a>
        <a href="" class="" style="float:right;">
         <i class="fa fa-calendar" aria-hidden="true"></i>
         {{date('d-M-Y',strtotime($value->created_at))}}
        </a>
       </div>
        
       <h5>
        <a href="{{ route('single_page',$value->slug) }}" class="stretched-link">{{ $value->title }}</a>
       </h5>

       <p class="px-2">Cumque eos in qui numquam. Aut aspernatur perferendis sed atque quia voluptas quisquam repellendus temporibus itaqueofficiis odit</p>
        <div>
       </div>
      </div>
     </div>

     @endforeach

     {{-- {{ $value->links() }} --}}
    

    
         
    </div>
   </div>
  </section>

@endsection