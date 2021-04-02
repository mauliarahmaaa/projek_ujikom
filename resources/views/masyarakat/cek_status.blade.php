<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PeMas | Pengaduan Masyarakat</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('template-user/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('template-user/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('template-user/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('template-user/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('template-user/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('template-user/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('template-user/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('template-user/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('template-user/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('template-user/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander - v2.3.1
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="/"><span>PeMas | Pengaduan Masyarakat</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="#">Tentang Kami</a></li>
          <li class="active"><a href="/form_pengaduan">Ajukan Pengaduan</a></li>
          <li><a href="#features">Profil</a></li>
          <li><a href="/logout">Logout</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
  <div class="container">
      <div class="row">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          
          </div>
        </div>
       
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <!-- <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g> -->
    </svg>
  </section><!-- End Hero -->

  <main id="main">

<br>

  <div class="table-responsive">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Foto</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($status as $item)
    <tr>
      <td>{{$item->masyarakat->nama}}</td>
      <td>{{$item->tgl_pengaduan}}</td>
      <td><img src="{{asset('image1617380483_FOTO.jpeg/'. $item->foto)}}" height="100px" alt=""></td>
      @if($item->status == '0')
            <td><span class="btn btn-warning btn-sm">Belum Diproses</span></td>
        @elseif($item->status == 'proses')
            <td><span class="btn btn-warning btn-sm">Diproses</span></td>
        @else
            <td><span class="btn btn-success btn-sm">Selesai</span></td>
        @endif
      </td>
      <td>
        <a href="" class="btn btn-primary btn-sm">Detail</a>
      </td>
    </tr>
    @endforeach
  </tbody>
  </table>
</div>

  </main><!-- End #main -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('template-user/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('template-user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template-user/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('template-user/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('template-user/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('template-user/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('template-user/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('template-user/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('template-user/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('template-user/assets/js/main.js')}}"></script>

</body>



</html>