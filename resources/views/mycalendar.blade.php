<!doctype html>

<html lang="en">

<head>

    <script src="{{ asset('js/app.js') }}" type="text/js"></script>

    <script src="{{ asset('js/jquery.js') }}" type="text/js"></script>

    <script src="{{asset('js/fullcalendar.min.js')}}"></script>

    <script src="{{asset('js/moment.min.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/fullcalendar.min.css')}}"/>

</head>

<body>

<div class="container">

    <div class="panel panel-primary">

        <div class="panel-heading">

            MY Calendar    

        </div>

        <div class="panel-body" >

            {!! $calendar->calendar() !!}

            {!! $calendar->script() !!}

        </div>

    </div>

</div>

</body>

</html>