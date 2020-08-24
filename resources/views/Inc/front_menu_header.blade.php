<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RaVo</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/font-awesome-animation.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{url('js/app.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url('css/frontend_css.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/ee7cf20964.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shotcut icon" href="{{url('uploads/images.png')}}">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: black">
        <div class="container">
            <a class="navbar-brand faa-shake animated-hover" href="{{url('/')}}" id="ravo">Earl's Donut</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="padding:1px 5px;font-size:18px;line-height:0.3;background-color:#fff;">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" >
                    <li class="nav-item active" style="padding-left:80px;">
                        <a class="nav-link" href="{{url('/')}}" id="navmenu">Home</a>
                    </li>
                    <li class="nav-item" style="padding-left:80px;">
                        <a class="nav-link" href="{{url('/menu')}}" id="navmenu">Menu</a>
                    </li>
                    <li class="nav-item" style="padding-left:80px;">
                        <a class="nav-link" href="{{url('/contact')}}" id="navmenu">Contact</a>
                    </li>
                    <li class="nav-item" style="padding-left:80px;">
                        <a href=" {{url('/shopping_cart')}} " class="nav-link" style="color:white; font-size:20px;">
                            <i class="fas fa-shopping-cart faa-spin animated-hover" id="navmenu"></i>
                            <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                        </a>
                    </li>
                    <li class="nav-item" style="padding-left:80px;">
                        <a href="" class="nav-link" style="color:white; font-size:20px;"><i class="fas fa-search faa-shake animated-hover" id="navmenu"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
{{--<script>--}}
{{--    $(window).on("scroll",function () {--}}
{{--        if($(window).scrollTop()){--}}
{{--            $('nav').removeClass('black');--}}
{{--        }else{--}}
{{--            $('nav').removeClass('black');--}}
{{--        }--}}
{{--    })--}}
{{--</script>--}}
