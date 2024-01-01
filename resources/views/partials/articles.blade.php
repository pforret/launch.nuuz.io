@php
$articles=Array();
$articles[]=[
    'title' => 'this repository is a non-exhaustive list of awesome places for developer-first products',
    'url'   =>  'https://github.com/fmerian/awesome-developer-first-channels',
    'icon' => '<i class="fab fa-github"></i>',
    'date' =>  '2023-11-28'
];
$articles[]=[
    'title' => '150+ places to launch your product',
    'url'   =>  'https://www.linkedin.com/pulse/150-places-launch-your-product-pascal-unger/',
    'date' =>  '2023-05-15',
    'icon' => '<i class="fas fa-rocket"></i>',
];
$articles[]=[
    'title' => 'A Step-By-Step Guide On How To Get 1000 Users',
    'url'   =>  'https://userbooster.co/blog/get-1000-first-users-startup/',
    'icon' => '<i class="fas fa-rocket"></i>',
    'date' =>  '2022-06-03'
];
$articles[]=[
    'title' => 'Launching on Product Hunt (coda.io)',
    'url'   =>  'https://coda.io/@colleenmbrady/launching-on-product-hunt',
    'icon' => '<i class="fab fa-product-hunt"></i>',
    'date' =>  '2021-11-11'
];
$articles[]=[
    'title' => 'How to launch on Product Hunt, a detailed Guide',
    'url'   =>  'https://www.indiehackers.com/post/how-to-launch-on-product-hunt-a-detailed-guide-569166376a',
    'icon' => '<i class="fab fa-product-hunt"></i>',
    'date' =>  '2021-10-06'
];
$articles[]=[
    'title' => 'How to get upvoted on Hacker News',
    'url'   =>  'https://towardsdatascience.com/how-to-get-upvoted-on-hacker-news-692360e85ef8',
    'icon' => '<i class="fab fa-hacker-news"></i>',
    'date' =>  '2019-11-17'
];
$articles[]=[
    'title' => '(Relatively No-frills) Product Hunt Launch Checklist (Google Sheet)',
    'url'   =>  'https://docs.google.com/spreadsheets/d/11Db_mfeUocbPSIN52y8heHyCI2S5b3EP6HFxyWmovLk/edit#gid=6338822',
    'icon' => '<i class="fab fa-product-hunt"></i>',
    'date' =>  '2019-08-18'
];
$articles[]=[
    'title' => 'Product Hunt 101: How To Launch Your Product From Early Idea To Revenue',
    'url'   =>  'https://medium.com/swlh/product-hunt-101-how-to-launch-your-product-from-early-idea-to-revenue-c3f01864cdde',
    'icon' => '<i class="fab fa-product-hunt"></i>',
    'date' =>  '2018-11-19'
];
$articles[]=[
    'title' => '5 Tips From MeetNotes Launch On Product Hunt & Hacker News',
    'url'   =>  'https://medium.com/@Meetnotesco/5-tips-from-meetnotes-launch-on-product-hunt-hacker-news-8836e9ddab4f',
    'icon' => '<i class="fab fa-product-hunt"></i><i class="fab fa-hacker-news"></i>',
    'date' =>  '2017-04-19'
];
$articles[]=[
    'title' => 'How to post on Hacker News',
    'url'   =>  'https://wiredcraft.com/blog/how-to-post-on-hacker-news/',
    'icon' => '<i class="fab fa-hacker-news"></i>',
    'date' =>  '2015-03-06'
];
$articles[]=[
    'title' => 'Launching On Betalist – 50 Entrepreneurs Share All',
    'url'   =>  'https://smash.vc/betalist/',
    'icon' => '<img src="/assets/logo/betalist.png" style="max-width: 16px">',
];

@endphp

<div class="container" id="articles">
        <div class="row justify-content-center my-4">
            <div class="col-lg-12 text-left">
                <h2 class="text-secondary mt-0">Articles to read</h2>
                <hr class="divider light my-4" />
                @foreach($articles as $article)
                <p class="text-secondary mb-2">&bull; {!! $article['icon'] ?? "" !!} <a href='{{$article['url']}}'>{{$article['title']}}</a> <small>{{$article['date'] ?? ""}}</small></p>
                    @endforeach
            </div>
        </div>
    </div>
</section>
