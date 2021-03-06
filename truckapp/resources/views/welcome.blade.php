<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>truck job myanmar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="/css/app.css" >
        <link rel="stylesheet" href=" css/bootstrap.min.css" />
        <link rel="stylesheet" href=" css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href=" css/main.css"/>
        <link rel="stylesheet" href=" fonts/awesome.css" />
    
        <script type="text/javascript" src="js/main.js"> </script>
        <script type="text/javascript" src=" js/jquery.js"> </script>
        <script type="text/javascript" src=" js/bootstrap.min.js"> </script>

        <!-- Styles -->
        <style>
            html, body {
                background:url("images/en_all.jpg") no-repeat center center fixed;
                background-size:cover;
                color:#555;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                margin-top:-275px;
            }


            .links > a {
                color: #f0f0f0;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            a:hover{
                color:#555;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <h1>Truck Gate for Transportation </h1> 
                </div>

               <div class="links">
                    <a href='{{url("home")}}'>Home</a>
                    <a href='{{url("staff")}}'>Staffs</a>
                    <a href='{{url("partnership")}}'>Partnership</a>
                    <a href='{{url("achieve")}}'>Achievement</a>
                    <a href='{{url("location")}}'>Location</a>
                </div> 
            </div>
        </div>
    </body>
</html>
