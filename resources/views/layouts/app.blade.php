<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Teknik Sepeda Motor</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/ass.png') }}">


    <!-- Bootstrap Core CSS -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="/assets/css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="home">
    <div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <div class="navbar-brand"><h5>SMKASSALAAMBANDUNG</h5></div>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    @role('admin')
                        <li><a href="{{ url('/home') }}">Beranda</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kejuruan <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Alumni</a></li>
                            <li><a href="">Fasilitas</a></li>
                            <li><a href="">Kurikulum</a></li>
                            <li><a href="">Perusahaan</a></li>
                        </ul>
                        </li>
                        <li><a href="">Prestasi</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Akun <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ ('/akun/profile') }}">ubah password</a></li>
                            <li><a class="btn" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >logout</a></li>
                        </ul>
                        </li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endrole
                    @role('fasilitas')
                        <li><a href="{{ url('/home') }}">Beranda</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fasilitas <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Ruang Praktek</a></li>
                            <li><a href="">Gedung</a></li>
                            <li><a href="">Lingkungan</a></li>
                        </ul>
                        </li>
                        <li><a href="{{ url('akun/profile') }}">Akun</a></li>
                        <li><a class="btn" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >LOGOUT</a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endrole
                    @role('prestasi')
                        <li><a href="{{ ('/home') }}">Beranda</a></li>
                        <li><a href="">Prestasi</a></li>
                        <li><a href="{{ url('akun/profile') }}">Akun</a></li>
                        <li><a class="btn" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >LOGOUT</a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endrole
                    @role('alumni')
                        <li><a href="{{ ('/home') }}">Beranda</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Alumni <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="">2016</a></li>
                            <li><a href="">2015</a></li>
                        </ul>
                        </li>
                        <li><a class="btn" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >LOGOUT</a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endrole
                    @if (Auth::guest())
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sekolah <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/alumni') }}">Alumni</a></li>
                            <li class="page-scroll"><a href="#portfolio">Fasilitas</a></li>
                            <li class="page-scroll"><a href="#kurikulum">Kurikulum</a></li>
                            <li><a href="{{ url('/prestasi') }}">Prestasi</a></li>
                            <li><a href="{{ url('/perusahaan') }}">Perusahaan</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/kontak') }}">Kontak</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> 
    <!-- /.navbar -->
    
    @yield('content')
    
    <!-- Social links. @TODO: replace by link/instructions in template -->
    <section id="social">
        <div class="container">
            <div class="wrapper clearfix">
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_linkedin_counter"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                </div>
                <!-- AddThis Button END -->
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Jl. Situtarate Terusan Cibaduyut Bandung
                            <br><i class="glyphicon glyphicon-earphone"> (022) 51202240, 40256</p></i>
                            <a href="https://smkassalaambandung.sch.id"><i class="glyphicon glyphicon-envelope"> Info@smkassalaambandung</a></i>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Follow Us</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Instagram</span><i class="fa fa-fw fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Youtube</span><i class="fa fa-fw fa-youtube"></i></a>
                            </li>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Freelancer</h3>
                        <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; 2017, Mochammad Septa Arizky
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="/assets/js/jqBootstrapValidation.js"></script>
    <script src="/assets/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="/assets/js/freelancer.min.js"></script>
    @yield('scripts')
</body>
</html>