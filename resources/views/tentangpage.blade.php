<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, viewport-fit=cover">
    <title>Tentang | GenB Creative</title>
    <link rel="icon" href="{{ asset('frontend/img/logo.ico') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap/css/style.css') }}">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css" rel="stylesheet" />
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
            <h1 class="font-weight-bold text-white">Tentang Kami</h1>
          </div>
        </div>
      </div>
    </header>

    <section style="min-height: 650px; background-color: rgb(20,20,20)">
        <div class="container-fluid py-5 text-white">
            <h1 class="text-center font-weight-bold">GenB Creative</h1>
            <div class="row" style="margin-top: 50px;">
                <div class="col-lg-6 px-5 mb-5">
                    <h4 class="font-weight-light">
                        GenB Creative Agency adalah perusahaan yang hadir di era digital untuk fokus membantu meningkatkan penjualan pasar bisnis UMKM di Indonesia.
                    </h4><br/>
                    <h4 class="font-weight-light">
                        Kami mampu membantu meningkatkan jangkauan bisnis anda melalui sosial media atau platform online lainnya secara maksimal dengan menggunakan strategi digital yang tepat dan kemampuan profesional tim GenB!
                    </h4>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center px-5">
                    <img src="{{ asset('frontend/img/temporary.jpg') }}" class="rounded" width="100%" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="min-height: 600px;">
        <div class="container text-center py-5">
            <h1>Lokasi Kami</h1>
            <div id="map">
            
            </div>
        </div>
    </section>

    <footer style="background-color: #2C2C2C;">
      <div class="container-fluid pt-5">
        <div class="row">
          <div class="col-lg-3 text-center mb-5">
            <a href="index.html"><img src="{{ asset('frontend/img/logo.png') }}" width="120px" alt=""></a>
          </div>
          <div class="col-lg-3 col-6 text-left text-white mb-5">
            <h5 class="font-weight-bold">Ikuti Kami:</h5>
            <a href="#"><img src="{{ asset('frontend/img/facebook.png') }}" width="50px" alt=""></a>
            <a href="#"><img src="{{ asset('frontend/img/instagram.png') }}" width="50px" alt=""></a>
            <a href="#"><img src="{{ asset('frontend/img/linkedin.png') }}" width="50px" alt=""></a>
          </div>
          <div class="col-lg-3 col-6 text-left text-white mb-5">
            <h5 class="font-weight-bold">Kontak:</h5>
            <p class="mb-0"><a class="text-white" href="tel:081234567890">081234567890</a></p>
            <p><a class="text-white" href="mailto:sample@mail.com">sample@mail.com</a></p>
          </div>
          <div class="col-lg-3 text-left text-white mb-5">
            <h5 class="font-weight-bold">Alamat Kami:</h5>
            <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl feugiat tortor, nisi fusce potenti.</p>
          </div>
        </div>
        <h6 class="text-center text-white py-3 mb-0" style="border-top: 1px solid rgb(255,255,255)">© 2021 GenB Creative. All Rights Reserved</h6>
      </div>
    </footer>

    <script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoibHVpc2xpdiIsImEiOiJja3M0a203amExOWJuMnlvNG0zODNvdzU4In0.tszhBEgD3XZHrrqIE4YcWQ';
        var map = new mapboxgl.Map({
            container: 'map',
            center: [106.820804, -6.183859],
            zoom: 9,
            style: 'mapbox://styles/mapbox/streets-v11'
        });
        map.addControl(new mapboxgl.NavigationControl());
        map.scrollZoom.disable();
        const marker = new mapboxgl.Marker({
            color: "#db382c",
            draggable: false
        }).setLngLat([106.820804, -6.183859]).addTo(map);
    </script>
</body>
</html>