<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Benomart application portal</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="assets2/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
    <script src="{{asset('js/jquery-2.1.3.min.js')}}"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                @if(Auth::user())
                <a class="navbar-brand" href="{{ url('/home') }}">
                    BENOMART APPLICATION PORTAL
                   </a>
                @else

                <a class="navbar-brand" href="{{ url('/') }}">
                    BENOMART APPLICATION PORTAL
                   </a>
                @endif
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Create account') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
           
            <div class="container">
                    <div class="row justify-content-center">
                
                        @if(auth::user())
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                   <h3> Navigation</h3>
                                    </div>

                                    <div id="menu">
                                    <div class="card card-default">
                                            <div class="card-body">
                                                <ul class="list-group">
                                               <li class="list-group-item"> <a href="{{route('home')}}" style="text-decoration:none;">HOME</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    <div class="card-body">

                                    <ul class="list-group">
                                   
                                         <li class="list-group-item ">
                                            <a href="{{route('applications.create')}}" class="list-link">POSITION</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="{{route('applications.personal-details')}}" class="list-link">PERSONAL DETAILS</a>
                                        </li>

                                        <li class="list-group-item">
                                        <a href="{{route('identifications.identification')}}" class="list-link">IDENTIFICATION</a>
                                            </li>

                                        <li class="list-group-item">
                                                <a href="{{route('pictures.image')}}" class="list-link">IMAGE UPLOAD</a>
                                            </li>

                                            
                                        <li class="list-group-item">
                                        <a href="{{route('educationals.create')}}" class="list-link">EDUCATIONAL QUALIFICATION</a>
                                            </li>

                                            <li class="list-group-item">
                                                    <a href="{{route('uploads.create')}}" class="list-link">DOCUMENT UPLOADS</a>
                                                        </li>

                                                        <li class="list-group-item">
                                                                <a href="{{route('summaries.summary')}}" class="list-link">SUMMARY</a>
                                                                    </li>
                                    </ul>
                                </div>
                            </div>
                            </div>

                           
                
                        </div>
                        @endif
                        
                        <div class="col-lg-6">
                                @yield('content')
                        </div>


                        @if(auth::user())

                        <div class="col-lg-2">

                               <div class="card">
                                <div class="card-body">

                                    @if($profileimage  == ! NULL)
                                    <img src= "{{asset($profileimage->profile_picture)}}" class="img-fluid ">

                                    @else
                                    <img src={{asset("/images/avatar.jpg")}} class="w-100">

                                    @endif

                                        

                                       

                                </div>
                               </div>
                        </div>

                        @endif
                    </div>
                </div>
        </main>
    </div>

   
   


   
    
<script src="{{asset('js/toastr.min.js')}}"></script>





<script>
    @if(Session::has('success'))
        toastr.success("{{Session::get('success')}}")
    @endif
</script>

<script>
        @if(Session::has('info'))
            toastr.info("{{Session::get('info')}}")
        @endif
    </script>

<script>
        @if(Session::has('warning'))
            toastr.warning("{{Session::get('warning')}}")
        @endif
    </script>
</body>
</html>
