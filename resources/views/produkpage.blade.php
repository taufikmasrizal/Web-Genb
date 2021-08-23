<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, viewport-fit=cover">
    <title>Produk dan Jasa | GenB Creative</title>
    <link rel="icon" href="{{ asset('frontend/img/logo.ico') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap/css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="/">
            <img src="{{ asset('frontend/img/logo.png') }}" width="150px" class="d-inline-block align-top" alt="logo">
        </a>
        <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <img src="{{ asset('frontend/img/hamburger.png') }}" width="30px" alt="hamburger">
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item align-right">
                <a class="nav-link text-white float-right" href="/portofoliopage">Portofolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white float-right" href="/produkpage">Produk dan Jasa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white float-right" href="/tentangpage">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white d-inline-block px-4 float-right" id="btnHubungiKami" href="/">Hubungi Kami<img src="{{ asset('frontend/img/arrow.png') }}" class="arrow-right" width="20"/></a>
              </li>
            </ul>
        </div>
    </nav>

    <header>
    <div style="position: relative; background-image: url('frontend/img/temporary.jpg'); height: calc(80vh - 91.9px); background-size: cover;">
        <div class="position-absolute" style="top: 10%; left: 5%;">
          <div class="container">
            <a class="text-white" href="/"><img src="{{ asset('frontend/img/arrow.png') }}" class="arrow-left" width="20" /> Kembali Ke Awal</a>
          </div>
        </div>
        <div class="position-absolute" style="bottom: 20%; left: 5%;">
          <div class="container">
            <h1 class="font-weight-bold text-white">Produk dan Jasa Kami</h1>
          </div>
        </div>
      </div>
    </header>

    <section>
    
        <div class="container-fluid clearfix p-0">
        
        <div class="row">
        @foreach ($produksosialmedia as $data)
            <div class="float-right product" > <img src="{{ asset('thumb/'.$data->foto) }}" width="450px" height="500px" class="rounded mb-5" alt=""></div>
                <div class="container p-5 text-right">
                  <h1 class="font-weight-bold mb-5">{{$data->nama_produk_sosialmedia}}</h1>
                  <h4 class="font-weight-light">{{$data->keterangan}}</h4>
                  @endforeach
                </div>
            </div>
</div>
 <div class="row">
   @foreach($produkkontenmarketing as $data)
        <div class="float-left product" ><img src="{{ asset('thumb/'.$data->foto) }}" width="450px" height="500px" class="rounded mb-5" alt=""> </div>
                <div class="container p-5 text-left">
                  <h1 class="font-weight-bold mb-5">{{$data->nama_produk_contentmarketing}}</h1>
                  <h4 class="font-weight-light">{{$data->keterangan}}</h4>
                @endforeach
                </div>
          
        
 </div>
 <div class="row">
 @foreach ($produkbrandingdesign as $data)
        <div class="float-right product"><img src="{{ asset('thumb/'.$data->foto) }}" width="450px" height="500px" class="rounded mb-5" alt="">
            <div class="container p-5 text-right">
              <h1 class="font-weight-bold mb-5">{{$data->nama_produk_brandingdesign}}</h1>
              <h4 class="font-weight-light">{{$data->keterangan}}</h4>
              @endforeach
            </div>
        </div>
</div>
<div class="row">
@foreach ($produkphotography as $data)
        <div class="float-left product"> <img src="{{ asset('thumb/'.$data->foto) }}" width="450px" height="500px" class="rounded mb-5" alt=""></div>
          <div class="float-left product">
                <div class="container p-5 text-left">
                  <h1 class="font-weight-bold mb-5">{{$data->nama_produk_photography}}</h1>
                  <h4 class="font-weight-light">{{$data->keterangan}}</h4>
                </div>
          </div>
        </div>
        @endforeach
 </div>
            
       
</div>
        
    </section>
   

    <footer style="background-color: #2C2C2C;">
      <div class="container-fluid pt-5">
        <div class="row">
          <div class="col-lg-3 text-center mb-5">
            <a href="index.html"><img src="img/logo.png" width="120px" alt=""></a>
          </div>
          <div class="col-lg-3 col-6 text-left text-white mb-5">
            <h5 class="font-weight-bold">Ikuti Kami:</h5>
            <a href="#"><img src="{{ asset('frontend/img/facebook.png') }}" width="50px" alt=""></a>
            <a href="#"><img src="{{ asset('frontend/img/instagram.png') }}" width="50px" alt=""></a>
            <a href="#"><img src="{{ asset('frontend/img/linkedin.png') }}" width="50px" alt=""></a>
          </div>
          @foreach ($kontak as $data)
          <div class="col-lg-3 col-6 text-left text-white mb-5">
            <h5 class="font-weight-bold">Kontak:</h5>
            <p class="mb-0"><a class="text-white" href="tel:081234567890">{{ $data->no_kontak }}</a></p>
            <p><a class="text-white" href="mailto:sample@mail.com">{{ $data->email }}</a></p>
          </div>
          <div class="col-lg-3 text-left text-white mb-5">
            <h5 class="font-weight-bold">Alamat Kami:</h5>
            <p class="font-weight-light">{{ $data->alamat }}</p>
          </div>
          @endforeach
        </div>
        <h6 class="text-center text-white py-3 mb-0" style="border-top: 1px solid rgb(255,255,255)">© 2021 GenB Creative. All Rights Reserved</h6>
      </div>
    </footer>

    <script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>