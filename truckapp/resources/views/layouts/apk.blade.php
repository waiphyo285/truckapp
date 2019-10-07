<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href=" ../css/app.css" >
    <link rel="stylesheet" href=" ../css/bootstrap.min.css" />
    <link rel="stylesheet" href=" ../css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href=" ../css/main.css"/>
    <link rel="stylesheet" href=" ../fonts/awesome.css" />
    
    <script type="text/javascript" src=" ../js/main.js"> </script>
    <script type="text/javascript" src=" ../js/jquery.js"> </script>
    <script type="text/javascript" src=" ../js/bootstrap.min.js"> </script>

    <link rel="stylesheet" type="text/css" href=" ../css/admin.side.css">
    <script type="text/javascript" src=" ../js/admin.side.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/apkhome.css">
    <link rel="stylesheet" type="text/css" href="../css/edit.css">
    <link rel="stylesheet" type="text/css" href="../css/partnership.css">
    <link rel="stylesheet" type="text/css" href="../css/profitdetail.css">
    <link rel="stylesheet" type="text/css" href="../css/ownership.css">

    <link rel="stylesheet" type="text/css" href="../css/launch.css">

    <link rel="stylesheet" type="text/css" href="../css/checkpending.css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app" style="background:#f0f0f0;">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href=    "{{ url('/home')}}">
                         {{ config('app.name', 'Laravel') }}
                </a>
                        
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                           <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>-->
                        @endif
                    </ul>
                </div>
            
       

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
