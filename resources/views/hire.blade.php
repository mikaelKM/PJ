@extends('layout.layout')

@section ('content')
<div class="jumbotron">
  <h1 class="display-4">Hello {{ auth()->user()->name }}</h1>
  <p class="lead">You Can Hire Mikael Developers to wotk on your project</p>
  <hr class="my-4">
  <p>I develop web applications using different web frameworks such as Laravel, Django and JavaServer Faces</p>
  I am therfore in a position of working on your project that involves the stated technologies.
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="/about" role="button">Learn more</a>
  </p>
</div>
<div class="jumbotron">
  <h1 class="display-6">SUBMIT THE PROJECT TO BE WORKED ON</h1>
  <p class="lead">Hire Mikael Developers</p>
  <hr class="my-4">
  <form method="POST" action="/hire" enctype="multipart/form-data">
  {{ csrf_field() }}
  @include('includes.errors')
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="project">Project</label>
      <input type="text" class="form-control" name="project" id="project" placeholder="Your Project">
    </div>
    <div class="form-group col-md-6">
      <label for="project_name">Project Name</label>
      <input type="text" class="form-control" name="project_name" id="project_Name" placeholder="Project name">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="project_type">Project Type</label>
    <select name="project_type" id="project_type" class="form-control">
        <option value="web Development" selected>Wed Development</option>
        <option value="Desktop Development">Desktop Development</option>
        <option value="Game Development">Game Development</option>
    </select>
    </div>
  <div class="form-group col-md-6">
    <label for="framework">Language/Framework</label>
    <select name="framework" id="framework" class="form-control">
        <option value="python" selected>Python</option>
        <option value="java">Java</option>
        <option value="php">Php</option>
        <option value="laravel">Laravel</option>
        <option value="jsf">JSF</option>
    </select>
</div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputnumber">Phone Number</label>
      <input name="phone" type="number" class="form-control" id="inputnumber">
    </div>
    <div class="form-group col-md-4">
      <label for="inputmode">Mode of Payment</label>
      <select name="mode" id="inputmode" class="form-control">
        <option value="Mpesa" selected>Mpesa</option>
        <option value="paypal" >PayPal</option>
        <option value="pesa_link" >Pesa Link</option>
      </select>
      <small id="passwordHelpBlock" class="form-text text-muted">
This Allow you to send money to the developer, Yor amount is refundable if desatified
</small>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Location</label>
      <input name="location" type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <label for="attachment">Example file input</label>
    <input type="file" name="attachment" class="form-control-file" id="attachment">
  </div>
  <div class = "form-group">
       <label for = "name">Description</label>
       <textarea  name="description" class = "form-control" rows = "3" placeholder = "Description"></textarea>
 </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck">
        I have read and understood the terms and conditions
      </label>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Submit Project</button>
</form>
  <p class="lead">
  <hr class="my-4">
  <div class='list-inline'>
                                      <ul>  <li class='list-inline-item'>
                                            <a class='social-icon text-xs-center' target='_blank' href='https://mobile.facebook.com/mikael.kasike'>
                                                <i class='fa fa-facebook' style="font-size:30px"></i>
                                            </a>
                                        </li>
                                        <li class='list-inline-item'>
                                            <a class='social-icon text-xs-center' target='_blank' href='https://twitter.com/MikaelKasike'>
                                                <i class='fa fa-twitter' style="font-size:30px"></i>
                                            </a>
                                        </li>
                                        <li class='list-inline-item'>
                                            <a class='social-icon text-xs-center' target='_blank' href='https://t.me/Mikaelkasike'>
                                                <i class='fa fa-telegram' style="font-size:30px"></i>
                                            </a>
                                        </li>
                                        <li class='list-inline-item'>
                                            <a class='social-icon text-xs-center' target='_blank' href='https://wa.me/+254772003344'>
                                                <i class='fa fa-whatsapp' style="font-size:30px"></i>
                                            </a>
                                        </li>
</ul>
</div>
  </p>
</div>
@endsection
