@extends('layouts.bootstrap')

@section('page_title','Product Launch Countdown')
@section('page_subtitle','What is the best day of the week and the best time of day to launch my project on Product Hunt, Hackernews, Betapage, Betalist, Launching Next, Reddit ...?')

@section('page_body')
    @include('partials.masthead',[
    'button_text'   =>  'What is the best launch time?',
    'button_url'    =>  '#countdown'
])

    @include('partials.websites')

    https://medium.com/swlh/product-hunt-101-how-to-launch-your-product-from-early-idea-to-revenue-c3f01864cdde

@endsection
