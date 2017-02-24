<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Job yes</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{url('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{url('css/creative.min.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                   <li><a href="{{ url('/Jabatan') }}">Jabatan</a></li>
                      <li><a href="{{ url('/Golongan') }}">Golongan</a></li>
                       <li><a href="{{ url('/Kategori') }}">Kategori Lembur</a></li>
                        <li><a href="{{ url('/Lembur') }}">Lembur Pegawai</a></li>
                         <li><a href="{{ url('/Pegawai') }}">Pegawai</a></li>
                          <li><a href="{{ url('/Tunjangan') }}">Tunjangan</a></li>
                           <li><a href="{{ url('/TunjanganP') }}">Tunjangan Pegawai</a></li>
                         <li><a href="{{ url('/Penggajians') }}">Penggajian</a></li>

                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                      
                        @else
                            <li class="dropdown">
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
                               
                            </li>
                        @endif
                    </ul>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        
        <!-- /.container-fluid -->
    </nav>
  <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Selamat datang di Aplikasi Penggajian</h1>
                <hr>
                <p>Dengan Bekerja kita akan mendapatkan hidupyang lebih baik, tunjangan disediakan dan terdapat berbagai lembur </p>
               
            </div>
        </div>
    </header>

 @yield('content')
    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                
            </div>
        </div>
    </section>

   
    <!-- jQuery -->
    <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{url('vendor/scrollreveal/scrollreveal.min.js')}}"></script>
    <script src="{{url('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Theme JavaScript -->
    <script src="{{url('js/creative.min.js')}}"></script>

</body>

</html>
