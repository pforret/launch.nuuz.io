@php
$websites=array();
$websites['ph']=array(
    'name'	=>	'Product Hunt',
    'description'   =>  'Product Hunt is a website that lets users share and discover new products',
    'url'	=>	'https://www.producthunt.com/',
    'logo'	=>	'https://assets.producthunt.com/assets/ph-ios-icon-e1733530a1bfc41080db8161823f1ef262cdbbc933800c0a2a706f70eb9c277a.png',
    'explain_text'  => 'Sunday turned out to be the day, between about midnight and 1 a.m.',
    'explain_url'   => 'https://popsters.com/blog/post/statistics-of-projects-at-product-hunt',
    'city'	=>	'San Francisco',
    'tz'	=>	'America/Los_Angeles',
    'best_time'	=>	'00:01',
    'best_day'	=>	'7',
);
$websites['hn']=array(
    'name'	=>	'Hacker News',
    'description'   =>  'Show HN is a way to share something that you\'ve made on Hacker News',
    'url'	=>	'https://news.ycombinator.com/',
    'logo'	=>	'https://news.ycombinator.com/favicon.ico',
    'explain_text'  => 'Publish on week-ends, around 12 pacific',
    'explain_url'   => 'https://towardsdatascience.com/how-to-get-upvoted-on-hacker-news-692360e85ef8',
    'city'	=>	'San Francisco',
    'tz'	=>	'America/Los_Angeles',
    'best_time'	=>	'00:01',
    'best_day'	=>	'7',
);
$websites['rd']=array(
    'name'	=>	'Reddit',
    'description'   =>  'Reddit is a network of communities based on people\'s interests',
    'url'	=>	'https://www.reddit.com/',
    'logo'	=>	'https://www.redditstatic.com/icon.png',
    'explain_text'  => 'Best Posting Times: Thursday at 9AM or 12PM, Saturday at 9AM',
    'explain_url'   => 'https://dashboard.laterforreddit.com/analysis/?subreddit=hackernews&threshold=5',
    'city'	=>	'San Franciso',
    'tz'	=>	'America/Los_Angeles',
    'best_time'	=>	'09:00',
    'best_day'	=>	'4',
);
$websites['bl']=array(
    'name'	=>	'BetaList',
    'description'   =>  'BetaList is the place for early adopters to discover upcoming and recently launched internet startups, and for startup founders to share their startup with the world and get early user feedback.',
    'url'	=>	'https://www.betalist.com/',
    'logo'	=>	'https://cdn.betalist.com/assets/touch-icon-precomposed-144-17f296ce8deb4690698a456051d05a372cd52fbab808b1999a600589beb01746.png',
    'explain_text'  => 'Choose a Monday or Tuesday',
    'explain_url'   => 'https://medium.com/startup-frontier/how-we-got-1-000-beta-signups-in-2-weeks-the-blueprint-eb794cf718f1',
    'city'	=>	'Eindhoven, Netherlands',
    'tz'	=>	'Europe/Amsterdam',
    'best_time'	=>	'09:00',
    'best_day'	=>	'1',
);

$websites['bp']=array(
    'name'	=>	'BetaPage',
    'description'   =>  'Betapage is a startup directory where you can discover, hunt and upvote the latest innovative startups',
    'url'	=>	'https://www.betapage.co/',
    'logo'	=>	'https://betapage.co/assets/img/logo.png',
    'explain_text'  => 'Choose a Monday or Tuesday',
    'explain_url'   => 'https://medium.com/startup-frontier/how-we-got-1-000-beta-signups-in-2-weeks-the-blueprint-eb794cf718f1',
    'city'	=>	'Indore, India',
    'tz'	=>	'Asia/Kolkata',
    'best_time'	=>	'09:00',
    'best_day'	=>	'1',
);

@endphp
<section class="page-section bg-primary" id="countdown">
@foreach($websites as $code => $website)
    @php($website['block_id']=substr(sha1($website['url']),0,8))
    @include('partials.website',$website)
@endforeach
</section>
