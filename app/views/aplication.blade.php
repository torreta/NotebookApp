
<!DOCTYPE html>
<html>
<head>
    <title>Notas Demo Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{HTML::style('http://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css')}}
    <style>
        body{
            padding-top: 70px;
            margin-left: 70px;
            margin-right: 70px;
        }
    </style>
</head>
<body>
<div class="page">
    <div class="container-fluid">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Demo de Laravel</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::check())
                        <li><a href="/logout">Log Out</a></li>
                        <li><a href="#">{{ Auth::user()->email }}</a></li>
                        @else
                        <li><a href="/login">Login</a></li>
                        <!-- <li><a href="/creategente">Sign Up</a></li> -->
                        @endif
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row">
            
               @if(Session::has('notice'))
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <p>{{ Session::get('notice') }}</p>
                    {{Session::forget('notice')}}
                  </div>
                @endif
                @if(Session::has('error'))
                  <div class="alert alert-error">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                     <p>{{ Session::get('error') }}</p>
                    {{Session::forget('error')}}
                  </div>
                @endif
                @if(Session::has('alert'))
                  <div class="alert">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <p>{{ Session::get('alert') }}</p>
                    {{Session::forget('alert')}}
                  </div>
                @endif
            
        </div>

    </div>
    @yield('content')
</div>
{{HTML::script('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js')}}
{{HTML::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js')}}
@show
</body>
</html>