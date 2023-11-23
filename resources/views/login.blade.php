@extends('layouts.layout')
@section('section')
<div class="container form-page">
    <div class="row">
        <div class="col-12 ">
           <div class="form-container " id="signup">
                <h1 class="form-title">login here</h1>
                  @if(session()->has('success'))
                    <div class="alert alert-success">
                        <p>{{session()->get('success')}}</p>
                    </div>
                  @endif
                  @if(session()->has('error'))
                    <div class="alert alert-danger">
                        <p>{{session()->get('error')}}</p>
                    </div>
                  @endif
                 <form action="{{URL::to('/loginUser')}}" method="POST">
                    @csrf
                    <input type="email" name="email"  placeholder="Enter your email" class="form-ip">
                    <input type="password" name="password" placeholder="Enter your password" class="form-ip">
                    <input type="submit" value="Login" class="form-ip" id="login">
                 </form>
                  <h5 class="form-bottom">Dont't have an account? 
                    <a href="#" class="signup-link">Signup</a>
                  </h5>
             </div>
        </div>
    </div>
</div>
@endsection