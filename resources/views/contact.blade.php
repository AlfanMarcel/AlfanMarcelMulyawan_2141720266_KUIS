<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Blast fast website blog with new laravel cms blog using lava web apps.">
    <meta name="author" content="https://lavapos.vercel.app/">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <title>New Laravel Blog CMS with LAVA web apps</title>
    <link rel="icon" href="https://mesinkasironline.web.app/img/createwebsitelaravel.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/clean-blog.min.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-danger shadow border-bottom" id="mainNav">
        <div class="container"> <a class="navbar-brand text-white" href="/">{{ env('APP_NAME') }}</a> <button class="navbar-toggler navbar-toggler-right text-white" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> Menu <i class="fas fa-bars"></i> </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="ml-auto navbar-nav text-white">
                    <li class="nav-item"> <a class="nav-link text-white" href="/"><i class="fas fa-heading"></i>ome</a></li>
                    <li class="nav-item"> <a class="nav-link text-white" href="{{ url('blog') }}"><i class="fab fa-blogger-b"></i>log</a></li>
                    <li class="nav-item"> <a class="nav-link text-white" href="{{ url('about') }}"><i class="fab fa-amazon"></i>bout</a></li>
                    <li class="nav-item"> <a class="nav-link text-white" href="{{ url('contact') }}"><i class="fab fa-cuttlefish"></i>ontact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid lead">
        <div class="row">
            <div class="col-12 col-md-12 p-3 p-md-5 text-center"> <img src="{{URL::asset('/uploads/rvs1.png')}}" class="img-fluid animate__animated animate__bounceInDown" />
                <div class="p-3 p-md-5 ">
                    <h1>Contact Us</h1>
                    <h3>Develope custom design with application</h3>
                    <p> If you need a custom design, contact us, we will help design the website including restaurant cashier application and invoice until the android APK is ready to use with the all in one web app.</p>
                    <p> WhatsApp : ------------</p>
                    <p>Call Us : ------------</p>
                    <p>Email : uwu@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 text-center">
            <div class="copyright text-center my-auto" style="font-size: 1em;"> <strong>Copyright &copy; @php echo date('Y'); @endphp <a href="https://lavapos.vercel.app/" class="text-danger">LAVA</a>.</strong> All rights reserved.</div>
        </div>
    </div>
    <div class="col-12 text-center border-top"> develope by Alfan Marcel M</div>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src='https://mesinkasir.github.io/larapos/pos/gallerya.js'></script>
    <script src="{{ asset('js/clean-blog.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/js/uikit-icons.min.js"></script>
    <script src="https://bstp.sourceforge.io/calulators.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>