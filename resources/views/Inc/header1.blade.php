<!doctype html>
<html lang="en">
<head>
    <title>Earl's Donut</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <script src="https://kit.fontawesome.com/ee7cf20964.js" crossorigin="anonymous"></script>
    <link rel="shotcut icon" href="{{url('uploads/images.png')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('3e101a1de8782f3bea5e', {
            cluster: 'us2'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            alert(JSON.stringify(data));
        });
    </script>
</head>
<body>

<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
            </button>
        </div>
        <div class="img bg-wrap text-center py-4" style="background-image: url('../uploads/donut.jpg');height: 10vh;">
            <div class="user-logo">
                <a id="navbarDropdown" href="/food" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre class="nav-link" style="color:White;font-weight: bold;">
                    {{ Auth::user()->name }} <span></span>
                </a>
            </div>
        </div>
        <ul class="list-unstyled components mb-5">
            <li class="active">
                <a href="{{url('/Drink')}}"> Drink</a>
            </li>
            <li class="active">
                <a href="{{url('/Donut')}}"> Donuts</a>
            </li>
            <li class="active">
                <a href="{{url('/FancyDonut')}}"> Fancy Donut</a>
            </li>
            <li class="active">
                <a href="{{url('/SandWich')}}"> SandWich</a>
            </li>
            <li class="active">
                <a href="{{url('/Croissant')}}"> Croissant/Bagels</a>
            </li>
            <li class="active">
                <a href="{{url('/Pastries')}}"> Pastries</a>
            </li>
            <li class="active">
                <a href="{{url('/Order')}}"> Order</a>
            </li>
            <li class="active">
                <a href="{{url('/FeedBack')}}"> FeedBack</a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                    @csrf
                </form>
            </li>
        </ul>

    </nav>
