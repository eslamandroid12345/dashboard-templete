<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@lang('dashboard.Courses') | @lang('dashboard.Dashboard') | @yield('title')</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset("plugins/fontawesome-free/css/all.min.css")}}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("css/adminlte.css")}}">
    @if(app()->getLocale() == 'ar')
        <!-- Override RTL theme style -->
        <link rel="stylesheet" href="{{asset("css/adminlte-rtl.css")}}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@400;700&display=swap');

        body{
            font-family: 'Noto Sans Arabic', sans-serif;
        }

    </style>

    @endif
    @if(app()->getLocale() == 'en')

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @endif
    <!-- CSS addons -->
    @yield('css_addons')

    <style>
        .btn-add {
            width: 200px;
            background-color: #79edd2;
            border: none;
            outline: none;
            height: 49px;
            border-radius:12px;
            color: #fff;
            text-transform: uppercase;
            font-weight: 600;
            margin: 10px;
            cursor: pointer;
            transition: 0.5s;
            font-size: 20px;
        }
    </style>
</head>
