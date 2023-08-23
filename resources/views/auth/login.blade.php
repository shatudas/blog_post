<!DOCTYPE html>
<html>
 <head>

  <title>Login</title>

  <link rel="icon" type="image/x-icon" href="{{ asset('login_data/favicon.png') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 </head>
<body>


 <style type="text/css">
  .h-custom{
   background-color:#FFFBF5; 
  }
  
  .h-custom {
    height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
    .h-custom {
    height: 100%;
    }
   }

  .form-div{
   border-radius:20px 0px;
   box-shadow: -1px 1px 5px 0px rgba(51,48,48,0.63);
  -webkit-box-shadow: -1px 1px 5px 0px rgba(51,48,48,0.63);
  -moz-box-shadow: -1px 1px 5px 0px rgba(51,48,48,0.63);
   }
 </style>


  <div class="container-fluid h-custom vh-100">
   <div class="row d-flex justify-content-center align-items-center h-100">
      
    <div class="col-md-6 col-lg-4 col-xl-4">
     <img src="{{ asset('login_data/cover_image.png') }}" class="img-fluid" alt="Cover Imaeg">
    </div>

    <div class="col-md-6 col-lg-4 col-xl-4 offset-xl-1 bg-white p-4 form-div">
     <form method="POST" action="{{ route('login') }}">
      @csrf

       @if($errors->any())
        <div class="alert alert-danger alert-dismissible">
         <button type="button" class="close" data-dismiss="alert">&times;</button>
         @foreach($errors->all() as $error)
          <strong>{{$error}}</strong><br>
         @endforeach
        </div>
       @endif
          
      <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
       <h3 class=" pb-2">Login</h3>
      </div>

      <div class="form-outline mb-4">
       <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Enter email address">
       <label class="form-label py-2" for="form3Example3">Email Address</label>
      </div>
       
      <div class="form-outline mb-2">
       <input type="password" id="password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Enter password" autocomplete="current-password"  required>
       <label class="form-label py-2" for="form3Example4">Password</label>
      </div>

      <div class="d-flex justify-content-between align-items-center">
       <div class="form-check mb-0">
        <input class="form-check-input me-2" onclick="myFunction()" type="checkbox" >
        <label class="form-check-label" for=""> Remember me</label>
       </div>
       <a class="text-body">Forgot password?</a>
      </div>

      <div class="text-center text-lg-start mt-4 pt-2">
       <button type="submit" class="btn btn-primary" style="padding-left: 2.5rem; padding-right: 2.5rem; border-radius:0px;">Login</button>
      </div>

     </form>
    </div>

   </div>
  </div>


  <script type="text/javascript">
  function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  </script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>