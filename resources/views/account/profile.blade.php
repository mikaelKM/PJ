@extends('layout.layout')

@section ('content')
<div class="card text-center">
  <div class="card-header">
  <h1>Your Profile</h1>
  </div>
  <div class="card-body">
<img class="rounded-circle" src="storage/uploads/user/{{ auth()->user()->image }}" style="height:100px; width:100px;"/><br>
User Name: {{ auth()->user()->name }} <br>
Name: {{ auth()->user()->fname }}
{{ auth()->user()->sname }}<br>
Email: {{ auth()->user()->email }}<br>
  </div>
  <div class="card-footer text-muted">
    User Profile
  </div>
</div>

@endsection


