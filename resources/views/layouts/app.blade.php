<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Conit') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/r-2.2.2/sc-1.5.0/datatables.min.css"/>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/r-2.2.2/sc-1.5.0/datatables.min.js"></script>
    <style>
    section {
        padding: 60px 0;
    }

    section .section-title {
        text-align: center;
        color: #007b5e;
        margin-bottom: 50px;
        text-transform: uppercase;
    }
    #footer {
        margin-top:25px;
        background: #012245 !important;
    }
    #footer h5{
        padding-left: 10px;
        border-left: 3px solid #eeeeee;
        padding-bottom: 6px;
        margin-bottom: 20px;
        color:#ffffff;
    }
    #footer a {
        color: #ffffff;
        text-decoration: none !important;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }
    #footer ul.social li{
        padding: 3px 0;
    }
    #footer ul.social li a i {
        margin-right: 5px;
        font-size:25px;
        -webkit-transition: .5s all ease;
        -moz-transition: .5s all ease;
        transition: .5s all ease;
    }
    #footer ul.social li:hover a i {
        font-size:30px;
        margin-top:-10px;
    }
    #footer ul.social li a,
    #footer ul.quick-links li a{
        color:#ffffff;
    }
    #footer ul.social li a:hover{
        color:#eeeeee;
    }
    #footer ul.quick-links li{
        padding: 3px 0;
        -webkit-transition: .5s all ease;
        -moz-transition: .5s all ease;
        transition: .5s all ease;
    }
    #footer ul.quick-links li:hover{
        padding: 3px 0;
        margin-left:5px;
        font-weight:700;
    }
    #footer ul.quick-links li a i{
        margin-right: 5px;
    }
    #footer ul.quick-links li:hover a i {
        font-weight: 700;
    }

    #searchbar{
        background-color:#063B73;
        border-color:#012245;
        color:white;
    }

    #searchbar::placeholder{
        color:#5685B5;
    }

    #searchbar:focus{
        outline: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        background-color: #ECEFF1;
        color:black;
    }

    @media (max-width:767px){
        #footer h5 {
            padding-left: 0;
            border-left: transparent;
            padding-bottom: 0px;
            margin-bottom: 10px;
        }
    }
    
    body {
        background-color: #ECEFF1
    }
    </style>

    @yield('style')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel" style="background-color: #012245">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Conit') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form class="form-inline" id="search_seller_input">
                    <input class="form-control mr-sm-2 form-control-sm" id="searchbar" type="search" placeholder="Search Seller's Name" aria-label="Search" style="">
                </form>

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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                        <li class="nav-item {{{ (Request::is('feed') ? 'active' : '') }}}">
                          <a class="nav-link" href="{{ route('page.feed') }}">Feed <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item {{{ (Request::is('message') ? 'active' : '') }}}">
                          <a class="nav-link" href="{{ route('page.message') }}">Message</a>
                        </li>
                        <li class="nav-item {{{ (Request::is('home') ? 'active' : '') }}}">
                          <a class="nav-link" href="{{ route('page.home') }}">Company</a>
                        </li>
                        <li class="nav-item {{{ (Request::is('product') ? 'active' : '') }}}">
                          <a class="nav-link" href="{{ route('page.product') }}">Manage Product</a>
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-sw" aria-labelledby="navbarDropdown" role="menu">
                                        <a class="dropdown-item" href="newcompany">Usaha Anda</a>
                                    <a class="dropdown-item" href="newcompany">Create Company</a>
                                    <div class="dropdown-divider"></div>
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
    </div>
    <main>
        @yield('content')
    </main>
    <!-- Footer -->
    <!--<footer class="" style="margin-top:60px;background-color:#212529;">
      <div class="col-md-12 row" style="padding:10px;">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="row justify-content-center">
            <h4 style="color:white;" class="text-center">ConIt</h4>
          </div>
          <div class="row justify-content-center">
            <h6 style="color:white;" class="text-center">ConIt is a free website made for the purpose of creative community. We aim to help creative people share their work and product so their sales can go up and their marketing effort can be reduced.</h6>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
      <div class="col-md-12 row justify-content-center" style="padding:10px;">
        <span style="font-size:12px;color:white;">Copyright @2018 Vedici</span>
      </div>
    </footer>-->
    <!-- Footer -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				<hr>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="https://conit.azurewebsites.net">ConIt</a></u> is made for competition purpose and marketing purpose</p>
					<p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://vedici.me" target="_blank">Vedici</a></p>
				</div>
				<hr>
			</div>
		</div>
	</section>
    <!-- ./Footer -->
    <script>
        $(function() {
            $("#search_seller_input").submit(function(event) {
                alert('Enter');
                event.preventDefault();
            });
        });
    </script>
    @yield('script')
</body>
</html>
