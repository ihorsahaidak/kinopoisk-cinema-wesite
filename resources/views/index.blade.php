<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Киномания</title>

    <link rel="shortcut icon" type="image/ico" href="{{asset("files/favicon.ico")}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel='stylesheet prefetch'
          href='{{asset("https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css")}}'>
    <link rel='stylesheet prefetch' href='{{asset("https://raw.githubusercontent.com/jaredreich/notie/master/dist/notie.css")}}'>
    <link rel='stylesheet prefetch'
          href='{{asset("https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.6/select2-bootstrap.min.css")}}'>
    <link rel='stylesheet prefetch' href='{{asset("https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css")}}'>

    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
{{--@extends('components.order')--}}
@if(session()->has('success'))
    <div id="divID" style="background: #ff5333;">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="text-align: center">
                    <h2 style="color: #fff">Дякуємо! Місця заброньовано.<br>
                        Памятайте, що бронь знімається за 30 хв до початку сеансу!
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <script>
        setTimeout(function(){
            $('#divID').remove();
        }, 8000);
    </script>
@endif


@extends('components.footer')

@extends('components.choose_movie')

@extends('components.content')


@extends('components.slider')
@extends('components.header')




<script src='{{asset("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js")}}'></script>
<script src='{{asset("https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js")}}'></script>
<script src='{{asset("js/raw.js")}}'></script>
<script src='{{asset("https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js")}}'></script>

<script src='{{asset("https://cdn.rawgit.com/gijsroge/tilt.js/38991dd7/dest/tilt.jquery.js")}}'></script>
<script src="{{asset('js/index.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>