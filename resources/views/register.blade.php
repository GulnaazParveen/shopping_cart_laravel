@extends('layouts.layout')
@section('section')
<div class="container form-page">
    <div class="row">
        <div class="col-12 ">
           <div class="form-container " id="signup">
                <h1 class="form-title">Signup</h1>
                 <form action="{{URL::to('/registerUser')}}" method="POST">
                     @csrf
                    <input type="email" name="email" placeholder="Enter your email" class="form-ip" required>
                    <input type="password" name="password" placeholder="Enter your password" class="form-ip" required>
                    <input type="password" placeholder="Confirm your password" class="form-ip">
                    <input type="submit" name="submit" value="Signup" class="form-ip" id="login">
                 </form>
                  <h5 class="form-bottom">Already have an account? 
                    <a href="#" class="signup-link">Login</a>
                  </h5>
             </div>
        </div>
    </div>
</div>
@endsection