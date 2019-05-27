<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', config('app.name'))</title>
        @include('question::layouts.partials.head')
    </head>
    <body>
    	@include('question::layouts.partials.navbar')
        @yield('content')
        @include('question::layouts.partials.footer')
        
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="{{Module::asset('question:js/bootstrap.bundle.min.js')}}"></script>
        @yield('footer')
    </body>
</html>
