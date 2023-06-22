<!DOCTYPE html>
<html>
<head>
<title>school </title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
        <!-- <link href="../css/font-awesome.css" type="text/css" rel="stylesheet">
        <link href="../css/my_style.css" type="text/css" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
           
<link rel="stylesheet" href="{{asset('css/log.css')}}">
</head>
<body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
       
         
        <form  class="form" action="{{ url('loginstore') }}" method="post">
          @csrf
          <div class="divider d-flex align-items-center my-4">
            <h1><p class="text-center fw-bold mx-3 mb-0">Online School</p></h1>
          </div>
          

          <!-- Email input -->
          <div class="form-outline mb-4">
           <input type="email"  class="form-control form-control-lg"  name="email" placeholder="Enter a valid email address" />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg" name="password"   placeholder="Enter password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          
          
          <div class="text-center text-lg-start mt-4 pt-2">
   <input type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="submit" value="login">
   
            <h4><p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account?
              
            <a href="#!" class="link-danger"><a href="{{URL::to('signup')}}">Register</a></p></h4>
          </div>
          </form>
        
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      
    </div>
    <!-- Copyright -->

    <!-- Right -->
    
    <!-- Right -->
  </div>
</section>
</body>
</html>