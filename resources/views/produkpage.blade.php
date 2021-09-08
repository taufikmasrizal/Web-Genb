<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, viewport-fit=cover">
    <title>Produk dan Jasa | GenB Creative</title>
    <link rel="icon" href="{{ asset('frontend/img/icon.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="/">
            <img id="logo" src="{{ asset('frontend/img/logo.png') }}" width="150px" class="d-inline-block align-top"
                alt="logo">
        </a>
        <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
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
                    <a class="nav-link text-white d-inline-block px-4 float-right" id="btnHubungiKami"
                        href="/#hubungiKami">Hubungi Kami<img src="{{ asset('frontend/img/arrow.png') }}"
                            class="arrow-right" width="20" /></a>
                </li>
            </ul>
        </div>
    </nav>

    <header>
    @foreach($bannerproduk as $data)
        <div
            style="position: relative; background-image: url('{{ asset('thumb/' . $data->foto) }}'); height: calc(80vh - 91.9px); background-size: cover;">
            <div class="position-absolute" style="top: 10%; left: 5%;">
                <div class="container">
                    <a class="text-white" href="/"><img src="{{ asset('frontend/img/arrow.png') }}" class="arrow-left"
                            width="20" /> Kembali Ke Awal</a>
                </div>
            </div>
            <div class="position-absolute" style="bottom: 20%; left: 5%;">
                <div class="container">
                    <h1 class="font-weight-bold text-white invisible" id="title">Produk dan Jasa Kami</h1>
                </div>
            </div>
        </div>
        @endforeach
    </header>

    <section>
        <div class="container-fluid clearfix p-0">
            @foreach ($produksosialmedia as $data)
                <div class="float-left product">
                    <div class="container p-5 text-left invisible" id="socialmediaDeskripsi">
                        <h1 class="font-weight-bold mb-5">{{ $data->nama_produk_sosialmedia }}</h1>
                        <h4 class="font-weight-light">{{ $data->keterangan }}</h4>
                    </div>
                </div>
                <div class="float-right product shadow invisible" id="socialmediaFoto" style="background: url('{{ asset('thumb/' . $data->foto) }}') no-repeat; background-size: cover;"></div>
            @endforeach
            @foreach ($produkkontenmarketing as $data)
                <div class="float-right product">
                <div class="container p-5 text-right invisible" id="contentmarketingDeskripsi">
                    <h1 class="font-weight-bold mb-5">{{ $data->nama_produk_contentmarketing }}</h1>
                    <h4 class="font-weight-light">{{ $data->keterangan }}</h4>
                  </div>
                </div>
                <div class="float-left product shadow invisible" id="contentmarketingFoto" style="background: url('{{ asset('thumb/' . $data->foto) }}') no-repeat; background-size: cover;"></div>
            @endforeach
            @foreach ($produkbrandingdesign as $data)
                <div class="float-left product">
                <div class="container p-5 text-left invisible" id="brandingdesignDeskripsi">
                    <h1 class="font-weight-bold mb-5">{{ $data->nama_produk_brandingdesign }}</h1>
                    <h4 class="font-weight-light">{{ $data->keterangan }}</h4>
                  </div>
                </div>
                <div class="float-right product shadow invisible" id="brandingdesignFoto" style="background: url('{{ asset('thumb/' . $data->foto) }}') no-repeat; background-size: cover;"></div>
            @endforeach
            @foreach ($produkphotography as $data)
                <div class="float-right product">
                    <div class="container p-5 text-right invisible" id="photographyDeskripsi">
                        <h1 class="font-weight-bold mb-5">{{ $data->nama_produk_photography }}</h1>
                        <h4 class="font-weight-light">{{ $data->keterangan }}</h4>
                    </div>
                </div>
                <div class="float-left product shadow invisible" id="photographyFoto" style="background: url('{{ asset('thumb/' . $data->foto) }}') no-repeat; background-size: cover;"></div>
            @endforeach
            @foreach ($produkvideography as $data)
                <div class="float-left product">
                    <div class="container p-5 text-left invisible" id="videographyDeskripsi">
                        <h1 class="font-weight-bold mb-5">{{ $data->nama_produk_videography }}</h1>
                        <h4 class="font-weight-light">{{ $data->keterangan }}</h4>
                    </div>
                </div>
                <div class="float-right product shadow invisible" id="videographyFoto" style="background: url('{{ asset('thumb/' . $data->foto) }}') no-repeat; background-size: cover;"></div>
            @endforeach
            @foreach ($produkwebdevelopment as $data)
                <div class="float-right product">
                    <div class="container p-5 text-right invisible" id="webdevelopmentDeskripsi">
                        <h1 class="font-weight-bold mb-5">{{ $data->nama_produk_webdevelopment }}</h1>
                        <h4 class="font-weight-light">{{ $data->keterangan }}</h4>
                    </div>
                </div>
                <div class="float-left product shadow invisible" id="webdevelopmentFoto" style="background: url('{{ asset('thumb/' . $data->foto) }}') no-repeat; background-size: cover;"></div>
            @endforeach
        </div>
    </section>

    <footer style="background-color: #2C2C2C;">
        <div class="container-fluid pt-5">
            <div id="footer" class="row invisible">
                <div class="col-lg-3 text-center mb-5">
                    <a href="/"><img src="{{ asset('frontend/img/logo.png') }}" width="120px" alt=""></a>
                </div>
                <div class="col-lg-3 col-6 text-left text-white mb-5">
                    <h5 class="font-weight-bold">Ikuti Kami:</h5>
                    <a href="https://www.instagram.com/genb.creative/"><img src="{{ asset('frontend/img/instagram.png') }}" width="50px" alt=""></a>
                    <a href="https://www.linkedin.com/company/genb-creative/mycompany/"><img src="{{ asset('frontend/img/linkedin.png') }}" width="50px" alt=""></a>
                </div>
                @foreach ($kontak as $data)
                    <div class="col-lg-3 col-6 text-left text-white mb-5">
                        <h5 class="font-weight-bold">Kontak:</h5>
                        <p class="mb-0"><a class="text-white" href="tel:{{ $data->no_kontak }}" style="word-wrap: break-word">{{ $data->no_kontak }}</a></p>
                        <p><a class="text-white" href="mailto:{{ $data->email }}" style="word-wrap: break-word">{{ $data->email }}</a></p>
                    </div>
                    <div class="col-lg-3 text-left text-white mb-5">
                        <h5 class="font-weight-bold">Alamat Kami:</h5>
                        <p class="font-weight-light" style="word-wrap: break-word">{{ $data->alamat }}</p>
                    </div>
                @endforeach
            </div>
            <h6 class="text-center text-white py-3 mb-0" style="border-top: 1px solid rgb(255,255,255)">© 2021 GenB
                Creative. All Rights Reserved</h6>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-viewport-checker/1.8.8/jquery.viewportchecker.min.js" integrity="sha512-FRX6MYITclzDyyMmSQLgZoZTfE+GLzAQpjs15adVZMY6AqhsrBLx8UZwp4FoqrrRFWY9TiaPwja7EY5fk309vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
          $("#title").viewportChecker({
            classToAdd: 'animate__animated animate__fadeInLeft animate__faster',
            classToRemove: 'invisible'
          });
          $("#socialmediaDeskripsi").viewportChecker({
            classToAdd: 'animate__animated animate__fadeInLeft animate__faster',
            classToRemove: 'invisible'
          });
          $("#socialmediaFoto").viewportChecker({
            classToAdd: 'animate__animated animate__fadeInRight',
            classToRemove: 'invisible'
          });
          $("#contentmarketingDeskripsi").viewportChecker({
            classToAdd: 'animate__animated animate__fadeInRight animate__faster',
            classToRemove: 'invisible'
          });
          $("#contentmarketingFoto").viewportChecker({
            classToAdd: 'animate__animated animate__fadeInLeft',
            classToRemove: 'invisible'
          });
          $("#brandingdesignDeskripsi").viewportChecker({
            classToAdd: 'animate__animated animate__fadeInLeft animate__faster',
            classToRemove: 'invisible'
          });
          $("#brandingdesignFoto").viewportChecker({
            classToAdd: 'animate__animated animate__fadeInRight',
            classToRemove: 'invisible'
          });
          $("#photographyDeskripsi").viewportChecker({
            classToAdd: 'animate__animated animate__fadeInRight animate__faster',
            classToRemove: 'invisible'
          });
          $("#photographyFoto").viewportChecker({
            classToAdd: 'animate__animated animate__fadeInLeft',
            classToRemove: 'invisible'
          });
          $("#videographyDeskripsi").viewportChecker({
            classToAdd: 'animate__animated animate__fadeInLeft animate__faster',
            classToRemove: 'invisible'
          });
          $("#videographyFoto").viewportChecker({
            classToAdd: 'animate__animated animate__fadeInRight',
            classToRemove: 'invisible'
          });
          $("#webdevelopmentDeskripsi").viewportChecker({
            classToAdd: 'animate__animated animate__fadeInRight animate__faster',
            classToRemove: 'invisible'
          });
          $("#webdevelopmentFoto").viewportChecker({
            classToAdd: 'animate__animated animate__fadeInLeft',
            classToRemove: 'invisible'
          });
          $("#footer").viewportChecker({
            classToAdd: 'animate__animated animate__fadeIn',
            classToRemove: 'invisible'
          });
        });
    </script>
</body>

</html>
