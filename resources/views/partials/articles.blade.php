@php
$articles=Array();
$articles[]=[
    'title' => 'Product Hunt 101: How To Launch Your Product From Early Idea To Revenue',
    'url'   =>  'https://medium.com/swlh/product-hunt-101-how-to-launch-your-product-from-early-idea-to-revenue-c3f01864cdde'
];
$articles[]=[
    'title' => '(Relatively No-frills) Product Hunt Launch Checklist',
    'url'   =>  'https://docs.google.com/spreadsheets/d/11Db_mfeUocbPSIN52y8heHyCI2S5b3EP6HFxyWmovLk/edit#gid=6338822'
];
$articles[]=[
    'title' => '5 Tips From MeetNotes Launch On Product Hunt & Hacker News',
    'url'   =>  'https://medium.com/@Meetnotesco/5-tips-from-meetnotes-launch-on-product-hunt-hacker-news-8836e9ddab4f'
];



@endphp

<div class="container" id="articles">
        <div class="row justify-content-center my-4">
            <div class="col-lg-12 text-left">
                <h2 class="text-secondary mt-0">Articles to read</h2>
                <hr class="divider light my-4" />
                @foreach($articles as $article)
                <p class="text-secondary mb-2">&bull; <a href='{{$article['url']}}'>{{$article['title']}}</a></p>
                    @endforeach
            </div>
        </div>
    </div>
</section>
