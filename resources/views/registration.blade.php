<!DOCTYPE html>
<html>
<head>
<title>WorldTrack GPS- User Registration</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--Bootsrap 4 CDN-->
<link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/bootstrap.min.css')}}" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/admin_main_style.css')}}">
</head>
<body>
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
			  <div class="px-30 py-10">
			<h1 class="h3 font-w700 mt-30 mb-10">User Registration</h1>
			</div>
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Please register here...</h3>
               
			   <form action="{{url('post-registration')}}" method="POST" id="regForm">
                 {{ csrf_field() }}
				 
                <div class="form-label-group">
                  <input type="text" id="inputName" name="name" class="form-control" placeholder="Full name" autofocus>
                  <label for="inputName">Name</label>
				  
                  @if ($errors->has('name'))
                  <span class="error">{{ $errors->first('name') }}</span>
                  @endif       
                </div> 
                <div class="form-label-group">
                  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" >
                  <label for="inputEmail">Email address</label>

                  @if ($errors->has('email'))
                  <span class="error">{{ $errors->first('email') }}</span>
                  @endif    
                </div> 
                <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                  <label for="inputPassword">Password</label>
                  
                  @if ($errors->has('password'))
                  <span class="error">{{ $errors->first('password') }}</span>
                  @endif  
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign Up</button>
                <div class="text-center">If you have an account?
                  <a class="small" href="{{url('login')}}">Sign In</a></div>
              </form>
			  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
</body>
</html>