<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SMK Assalaam') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/gt.png') }}">

    <link rel="stylesheet" href="{{ asset('table/css/jquery.dataTables.css') }}">
    <link rel="stylesheet" href="{{ asset('table/css/dataTables.bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('css/selectize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/selectize.bootstrap3.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.css') }}" media="screen" >
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="home">
    <div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/images/smk.png') }}" alt="Smk Assalaam"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    @role('admin')
                        <li><a href="{{ url('/home') }}">Beranda</a></li>
                        <li><a href="{{ route('hak-akses.index') }}">Hak Akses</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sekolah <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Profil Sekolah</a></li>
                            <li><a href="">Kejuruan</a></li>
                            <li><a href="">Fasilitas</a></li>
                            <li><a href="">Ekstrakurikuler</a></li>
                        </ul>
                        </li>
                        <li><a href="">Prestasi</a></li>
                        <li><a href="{{ route('artikel.index') }}">Artikel</a></li>
                        <li><a href="{{ url('akun/profile') }}">Akun</a></li>
                        <li><a class="btn" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >LOGOUT</a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endrole
                    @role('kejuruan')
                        <li><a href="">Beranda</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kejuruan <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Rekayasa Perangkat Lunak</a></li>
                            <li><a href="">Teknik Sepeda Motor</a></li>
                            <li><a href="">Teknik Kendaraan Ringan</a></li>
                        </ul>
                        </li>
                        <li><a href="">Akun</a></li>
                        <li><a class="btn" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >LOGOUT</a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endrole
                    @role('ekskul')
                        <li><a href="">Beranda</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ekstrakurikuler <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Rekayasa Perangkat Lunak</a></li>
                            <li><a href="">Teknik Sepeda Motor</a></li>
                            <li><a href="">Teknik Kendaraan Ringan</a></li>
                        </ul>
                        </li>
                        <li><a href="{{ url('akun/profile') }}">Akun</a></li>
                        <li><a class="btn" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >LOGOUT</a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endrole
                    @role('fasilitas')
                        <li><a href="">Beranda</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fasilitas <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Gedung</a></li>
                            <li><a href="">Lingkungan</a></li>
                            <li><a href="">Ruang Praktek</a></li>
                        </ul>
                        </li>
                        <li><a href="{{ url('akun/profile') }}">Akun</a></li>
                        <li><a class="btn" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >LOGOUT</a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endrole
                    @role('artikel')
                        <li><a href="">Beranda</a></li>
                        <li><a href="{{ route('artikel.index') }}">Berita</a></li>
                        <li><a href="{{ url('akun/profile') }}">Akun</a></li>
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
                            <li><a href="{{ url('/profil') }}">Profil Sekolah</a></li>
                            <li><a href="{{ url('/kejuruan') }}">Kejuruan</a></li>
                            <li><a href="{{ url('/fasilitas') }}">Fasilitas</a></li>
                            <li><a href="{{ url('/ekstra') }}">Ekstrakurikuler</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/berita') }}">Berita</a></li>
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
Contact GitHub 