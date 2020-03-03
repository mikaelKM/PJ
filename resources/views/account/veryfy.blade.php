@extends('layout.layout')

@section ('content')
<div class="card border-primary mb-3" style="max-width: auto">
  <div class="card-header border-primary">
   Verify Number
  </div>
  <div class="card-body">
    <h3 class="card-title">Verify Number</h3>

    @include('includes.errors')
    @include('includes.success')
    <form method="POST" action="/verify">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="Password">Enter the 6 digit number send to your phone</label>
    <input type="number" name="code" class="form-control" id="code" placeholder="000000" required>
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
