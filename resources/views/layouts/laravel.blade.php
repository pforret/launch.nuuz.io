@include("data.websites")
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('page_title') &bull; @yield('site_title',env('SITE_TITLE'))</title>
<meta name="author" content="@yield('site_author',env('SITE_AUTHOR'))">
<meta name="description" content="@yield('site_description',env('SITE_DESCRIPTION'))">
<meta name="keywords" content="@yield('site_keywords',env('SITE_KEYWORDS'))">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-yrfSO0DBjS56u5M+SjWTyAHujrkiYVtRYh2dtB3yLQtUz3bodOeialO59u5lUCFF" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
<link href="/css/site.css" rel="stylesheet">
</head>
<body id="page-top">
@include('partials.nav')

<header class="masthead" >
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center" style="margin-top: 50px">
            <h1 class="title m-b-md">@yield('page_title')</h1>
        </div>
    </div>
</header>
<!-- Services-->
<section class="page-section" id="services">
    <div class="container">
        <h2 class="text-center mt-0">At Your Service</h2>
        <hr class="divider my-4" />
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                    <h3 class="h4 mb-2">Sturdy Themes</h3>
                    <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                    <h3 class="h4 mb-2">Up to Date</h3>
                    <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                    <h3 class="h4 mb-2">Ready to Publish</h3>
                    <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                    <h3 class="h4 mb-2">Made with Love</h3>
                    <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="flex-center position-ref full-height">
<div class="content">


@yield('page_body','Page Body')


</div>
@include('partials.footer')
</div>
</body>
</html>
