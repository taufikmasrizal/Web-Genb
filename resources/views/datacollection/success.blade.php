<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GenB Data Collection</title>
    <link rel="icon" href="{{ asset('frontend/img/logoyellow.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body{
            font-family: 'Poppins';
        }
        section{
            background: linear-gradient(137.23deg, rgba(20, 20, 20, 0.9) 25%, #000000 75%);
            color: white;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <section id="finishpage">
        <div class="container d-flex align-items-center justify-content-center flex-column" style="padding: 50px 25px 50px 25px">
            <img src="{{ asset('frontend/img/logo.png') }}" class="mb-5" width="200" alt="">
            <div class="progress w-100 mb-5">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="p-4">
                        <p class="mb-5">Kami ucapkan Terima Kasih bagi teman-teman yang telah bersedia meluangkan waktu untuk mengisi survei yang Broaden Creative Agency adakan. Semoga kamu salah satu dari responden yang beruntung mendapatkan hadiah ,See ya ~</p>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-3">
                                <a href="{{ route('datacollection.create') }}" class="btn w-100 btn-outline-info">Ulang Survey</a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="btn w-100 btn-warning" href="https://www.broadencreative.com">Check Website Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <img src="{{ asset('frontend/img/finish.jpg') }}" style="border-radius: 20px;" width="100%" alt="">
                </div>
            </div>
        </div>
    </section>

    <footer style="background-color: #2C2C2C;">
        <h6 class="text-center text-white py-3 mb-0" style="border-top: 1px solid rgb(255,255,255)">© 2021 GenB
            Creative. All Rights Reserved</h6>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>