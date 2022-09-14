@extends('main-admin.layouts.header')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
@endsection
<div class="fluid-container login-page" style="display: flex">
         
       
        
       <div class="left-side">
        <div class="image-input">
          <h2>The <span>FUTURE</span> of jewell is here</h2>
          <p>With an all in one platform for the buying jewell world</p>
        </div>
        <img src="{{asset('images/login-photo.jpg')}}" class="img-fluid rounded-top" alt="">
       </div>

       <div class="right-side">
        <h1>Login to your account</h1>
        <p>Please enter the org code and your mobile number to continue</p>
        <div class="mb-3">
            <label for="orgcode" class="form-label"><b>Org Code</b></label>
            <input type="text" class="form-control" id="orgcode" placeholder="Enter org code">
          </div>
          <label for="mobile-number" class="form-label"><b>Your Mobile number</b></label>
          <div class="input-group">
            
            <div class="input-group-text">+91</div>
            <input type="text" class="form-control" id="mobile-number" placeholder="Your Mobile Number">
          </div>

          <button type="button" class="btn btn-primary login-btn">Proceed Securely</button><br>

          <span> By continuing, you agree to the <a href="#"> terms and conditions</a></span>
       </div>

  </div>
@include('main-admin.layouts.footer')