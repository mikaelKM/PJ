<!DOCTYPE html>
<html>
<head>

    <title>MIKAEL DOT COM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/app.css">
  <!--  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" type="image/jpg" href="storage/uploads/images/fev.png"/>

</head>
<header>
	@include('includes.nav')
</header>
<main>
	<div class="container">
    
    @if (Request :: is('/'))
    @include('includes.home')
    @endif
		<div class="row">
			<div class="col-12 col-md-8 lg-8">
				@yield('content')
			</div>
			<div class="col-12 col-md-4 lg-4">
            @if(!(auth()->check()) && (Request :: is('jobs')))

            @elseif(!(auth()->check()) && !(Request :: is('jobs')))
				@include('includes.side')
            @else
                @include('includes.sidenav')
            @endif
			</div>

		</div>
	</div>
</main>
@include('includes.footer')
@include('includes.bootstrap')
</html>

