<!-- Masthead-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-uppercase text-white font-weight-bold">@yield('page_title')</h1>
                <hr class="divider my-4" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 font-weight-light mb-5">@yield('page_subtitle','Page Subtitle')</p>
                @if(isset($button_text))
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{$button_url}}">{{$button_text}}</a>
                @endif
                <p class="font-weight-light text-white p-4">
                    <script>
                        tNow = DateTime.local();
                        document.write("Your local time is " + tNow.toLocaleString(DateTime.DATETIME_MED) + "<br>Your timezone is &quot;" + tNow.zoneName + "&quot;");
                    </script>
                </p>
            </div>
        </div>
    </div>
</header>
