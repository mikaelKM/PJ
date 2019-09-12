@extends('layout.layout')

@section ('content')
<div class="card border-primary mb-3" style="max-width: auto">
  <div class="card-header border-primary">
    Account Register
  </div>
  @include('includes.errors')
  <div class="card-body">
    <h5 class="card-title">Fill in Your details correctly</h5>
    <form method="POST" action="/register" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
    <div class="row">
    <div class="col-md-6">
    <label for="fname">First Name</label>
    <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name">
    </div>
    <div class="col-md-6">
    <label for="sname">Second Name</label>
    <input type="text" name="sname" class="form-control" id="sname" placeholder="Second Name">
    </div>
    </div>
  </div>
  <div class="form-group">
    <label for="Password">Username</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="Email">Email address</label>
    <input type="email" name="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="avatar" class="form-label">{{ __('Avatar (optional)') }}</label>
    <div class="col-md-12">
        <input id="avatar" type="file" class="form-control" name="image">
    </div>
</div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" name="password" class="form-control" id="password1" placeholder="Password">
  </div>
  <div class="form-group">
            <label for="password_confirmation">Password Confirmation:</label>
            <input type="password" class="form-control" id="password_confirmation"
                   name="password_confirmation">
        </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Keep Logged In</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
  <div class="text-right">Do not have an account?<a href="/log"> Click Here</a></div>
  <div class="card-footer text-muted border-primary">
   welcome
  </div>
</div>
@endsection
