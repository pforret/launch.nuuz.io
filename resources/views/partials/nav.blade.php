@php
$links=[];
$links[]=[
    'name'  =>  'About',
    'url'  =>  '#about'
];
$links[]=[
    'name'  =>  'Launch sites',
    'url'  =>  '#websites'
];
@endphp

<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">@yield('site_title',env('SITE_TITLE'))</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                @foreach($links as $link)
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo $link["url"] ?>">{{$link["name"]}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
