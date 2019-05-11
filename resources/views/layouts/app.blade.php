<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
</head>
<body>
<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand mb-3 mt-3">
                <a href="#">
                    <img src="{{asset('images/Spotify_Logo_CMYK_White.png')}}" alt="" style="width: 150px;padding-top: 15px;padding-bottom: 15px">
                </a>
            </li>
            {{--<li>--}}
                {{--<a  href="#"><i class="fas fa-search mr-2"></i>Buscar</a>--}}
            {{--</li>--}}
            <li>
                <a  href="{{url('/cancione')}}"><i class="fas fa-align-left mr-2"></i>Biblioteca</a>
            </li>
            <li>
                <a  href="{{url('/artista')}}"><i class="fas fa-users mr-2"></i>Artistas</a>
            </li>
            <li>
                <a  href="{{url('/genero')}}"><i class="fas fa-drum mr-2"></i>Generos</a>
            </li>

        </ul>
    </div>
    <div class="content pl-5" style="height: 1600px;">
        <div class="pt-4 ml-4">
            <form class="form-inline" method="POST"  action="{{url('cancione/buscar')}}">
                @csrf
                <div class="form-group mr-2 mb-2">
                    <input style="width: 250px;" name="buscar" type="text" class="form-control" id="inputPassword2" placeholder="Buscar..">
                </div>
                <button type="submit" class="btn btn-dark  mb-2">Buscar</button>
            </form>

        </div>

        @yield('content')
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->

    <!-- /#page-content-wrapper -->

</div>

<!-- /#page-content-wrapper -->

</div>
</body>
<script>
    $("#wrapper").toggleClass("toggled");
    // $("#menu-toggle").click(function (e) {
    //     e.preventDefault();
    //     $("#wrapper").toggleClass("toggled");
    // });
</script>
</html>
