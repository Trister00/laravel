<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Jamal Eddine Naji
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('Front/css/material-kit.css') }}" rel="stylesheet" /> 
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<style>
  .pagination
  {
    justify-content: center; !important
  }
  </style>
<body class="index-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{ route('index') }}">
          Jamal Eddine Naji </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.index') }}" onclick="scrollToDownload()">
              <i class="material-icons">format_align_justify</i> Articles
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('livres.index') }}" onclick="scrollToDownload()">
              <i class="material-icons">library_books</i> Livres
            </a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                  <i class="material-icons">mic</i> Interviw
                </a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                  <i class="material-icons">notes</i> Poemes
                </a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                  <i class="material-icons">image</i> Galerie
                </a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter clear-filter " data-parallax="true" style="background-image: url('{{ asset('img/img1.jpg') }}');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1>Jamal Eddine Naji</h1>
            <h3>Auteur | Journaliste | Professeur | Chercheur</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="section section-basic">
      <div class="container">
            @yield('content')
          </div>
          
        </div>
      </div>
    </div>
 

  
  <footer class="footer" data-background-color="black">
    
  </footer>
  <!--   Core JS Files   -->
  <script src="{{ asset('Front/js/core/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('Front/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('Front/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('Front/js/plugins/moment.min.js')}}"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{ asset('Front/js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('Front/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('Front/js/material-kit.js')}}" type="text/javascript"></script>
  
</body>

</html>
