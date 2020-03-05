@extends('layout.layout')
@section ('content')

@if((auth()->check()) && (Request :: is('jobs')))
<h3>Hello {{ auth()->user()->name }}, You are not allowed to view this page</h3>
@else
@include('includes.success')
@include('includes.errors')
<h3>The uploaded Tasks</h3>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Name</th>
      <th scope="col">Project</th>
      <th scope="col">Project Name</th>
      <th scope="col">Project Type</th>
      <th scope="col">Framework</th>
      <th scope="col">Phone</th>
      <th scope="col">Mode</th>
      <th scope="col">location</th>
      <th scope="col">Attachment</th>
      <th scope="col">Description</th>
      <th scope="col">Time created</th>
      <th scope="col">Approve</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach( $hires as $row )
  <tr>
      <th scope="row">{{ $row['id'] }}</th>
      <td>{{ $row['user'] }}</td>
      <td>{{ $row['project'] }}</td>
      <td>{{ $row['project_name'] }}</td>
      <td>{{ $row['type'] }}</td>
      <td>{{ $row['framework'] }}</td>
      <td>{{ $row['phone'] }}</td>
      <td>{{ $row['mode'] }}</td>
      <td>{{ $row['location'] }}</td>
      <td>{{ $row['attachment'] }}</td>
      <td>{{ $row['Description'] }}</td>
      <td>{{ $row['created_at'] }}</td>
      <td>
     
     <a href=><form method="POST" class="approve_form" action="{{ action('hiresController@approve', $row['id']) }}"> 
      {{csrf_field()}} 
     <input type="hidden" name="_method" value="GET">
      <button type="submit" class='btn btn-primary' onclick="return confirm('Approve this project for completion')">Approve</button></form></a>
      </td>

      <td>
      <a href=><form method="POST" class="delete_form" action="{{ action('hiresController@delete',$row['id']) }}">
      {{csrf_field()}}
   <input type="hidden" name="_method" value="DELETE" >
      <button type="submit" class="btn btn-danger" onclick="return confirm('Confirm to delete?')">Delete</button>
     </form></a>
     </td>
    </tr>
    
  @endforeach
  </tbody>
  <tfoot>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Name</th>
      <th scope="col">Project</th>
      <th scope="col">Project Name</th>
      <th scope="col">Project Type</th>
      <th scope="col">Framework</th>
      <th scope="col">Phone</th>
      <th scope="col">Mode</th>
      <th scope="col">location</th>
      <th scope="col">Attachment</th>
      <th scope="col">Description</th>
      <th scope="col">Time created</th>
      <th scope="col">Approve</th>
      <th scope="col">Delete</th>
    </tr>
  </tfoot>
</table>
<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Are you sure you want to delete it?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>
@endif
@endsection
