@extends('layout.layout')

@section ('content')
<div class="card border-primary mb-3" style="max-width: auto">
  <div class="card-header border-primary">
    Account
  </div>
  <div class="card-body">
    <h3 class="card-title">Log In</h3>
    
    @include('includes.success')
    @include('includes.errors')
    <form method="POST" action="/log">
    {{ csrf_field() }}
    <div class="form-group">
    <label for="Email">Email address</label>
    <input type="email" name="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" name="password" class="form-control" id="password1" placeholder="Password" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
  <div class="text-right">Do not have an account?<a href="/register"> Click Here</a></div>
  <div class="card-footer text-muted border-primary">
   welcome
  </div>
</div>
@endsection
