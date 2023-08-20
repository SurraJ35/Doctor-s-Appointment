@section('title','Login')
@extends('Doctor.Layout.Auth.Doctor')
{{-- @yield('title')='Login'; --}}
@section('content')
<div class="card">
    <div class="card-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Login </h1>
    </div>
    <div class="card-body">
        <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('doctor.registration')}}">Create new Account</a>
          </form>
    </div>
</div>

@endsection