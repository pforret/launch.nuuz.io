@php
$websites=array();
$websites['rd']=array(
    'name'	=>	'Reddit',
    'description'   =>  'Reddit is a network of communities based on people\'s interests',
    'url'	=>	'https://www.reddit.com/',
    'logo'	=>	'https://www.redditstatic.com/icon.png',
    'explain_text'  => 'Thursday at 9AM or 12PM, Saturday at 9AM',
    'explain_url'   => 'https://dashboard.laterforreddit.com/analysis/?subreddit=hackernews&threshold=5',
    'city'	=>	'San Francisco',
    'tz'	=>	'America/Los_Angeles',
    'best_time'	=>	'09:00',
    'best_day'	=>	'4',
    'traffic_text'  => '240M visitors/month, 50% USA, 7% UK, 7% Canada, 4% Australia',
    'traffic_url'   => 'https://www.similarweb.com/website/reddit.com'
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
    'traffic_text'  => '1.6M visitors/month, 42% USA, 6% China, 5% UK, 5% Canada',
    'traffic_url'   => 'https://www.similarweb.com/website/news.ycombinator.com'
);
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
    'traffic_text'  => '960K visitors/month, 28% USA, 6% India, 6% China, 5% UK',
    'traffic_url'   => 'https://www.similarweb.com/website/producthunt.com'
);
$websites['at']=array(
    'name'	=>	'AlternativeTo',
    'description'   =>  'helping you find the right software for your computer, mobile phone or tablet',
    'url'	=>	'https://alternativeto.net/',
    'logo'	=>	'https://alternativeto.net/apple-touch-icon.png',
    //'explain_text'  => 'Choose a Monday or Tuesday',
    //'explain_url'   => 'https://medium.com/startup-frontier/how-we-got-1-000-beta-signups-in-2-weeks-the-blueprint-eb794cf718f1',
    'city'	=>	'Stockholm, Sweden',
    'tz'	=>	'Europe/Stockholm',
    'best_time'	=>	'09:00',
    'best_day'	=>	'1',
    'traffic_text'  => '950K visitors/month, 18% USA, 5% Germany, 5% France, 5% India',
    'traffic_url'   => 'https://www.similarweb.com/website/alternativeto.net'
);
$websites['bl']=array(
    'name'	=>	'BetaList',
    'description'   =>  'BetaList is the place for early adopters to discover upcoming internet startups.',
    'url'	=>	'https://www.betalist.com/',
    'logo'	=>	'https://cdn.betalist.com/assets/touch-icon-precomposed-144-17f296ce8deb4690698a456051d05a372cd52fbab808b1999a600589beb01746.png',
    'explain_text'  => 'Choose a Monday or Tuesday',
    'explain_url'   => 'https://medium.com/startup-frontier/how-we-got-1-000-beta-signups-in-2-weeks-the-blueprint-eb794cf718f1',
    'city'	=>	'Eindhoven, Netherlands',
    'tz'	=>	'Europe/Amsterdam',
    'best_time'	=>	'09:00',
    'best_day'	=>	'1',
    'traffic_text'  => '20K visitors/month, 21% USA, 9% India, 8% UK, 5% Italy',
    'traffic_url'   => 'https://www.similarweb.com/website/betalist.com'
);

$websites['bp']=array(
    'name'	=>	'BetaPage',
    'description'   =>  'Betapage is a startup directory where you can discover, hunt and upvote the latest  startups',
    'url'	=>	'https://www.betapage.co/',
    'logo'	=>	'https://betapage.co/assets/img/logo.png',
    //'explain_text'  => 'Choose a Monday or Tuesday',
    //'explain_url'   => 'https://medium.com/startup-frontier/how-we-got-1-000-beta-signups-in-2-weeks-the-blueprint-eb794cf718f1',
    'city'	=>	'Indore, India',
    'tz'	=>	'Asia/Kolkata',
    'best_time'	=>	'09:00',
    'best_day'	=>	'1',
    'traffic_text'  => '8K visitors/month, 18% India, 13% USA, 6% France, 5% Brasil',
    'traffic_url'   => 'https://www.similarweb.com/website/betapage.co'
);

/*
$websites['ln']=array(
    'name'	=>	'LaunchingNext',
    'description'   =>  'Launching Next is home to more than 5,000 new startups, startup ideas and great business ideas. They showcase startups to their thousands of readers',
    'url'	=>	'https://www.launchingnext.com/',
    'logo'	=>	'https://www.launchingnext.com/images/favicon.ico',
    'explain_text'  => 'Choose a Monday or Tuesday',
    'explain_url'   => 'https://medium.com/startup-frontier/how-we-got-1-000-beta-signups-in-2-weeks-the-blueprint-eb794cf718f1',
    'city'	=>	'Indore, India',
    'tz'	=>	'Asia/Kolkata',
    'best_time'	=>	'09:00',
    'best_day'	=>	'1',
);
*/



@endphp
<section class="page-section bg-primary" id="sites">
@foreach($websites as $code => $website)
    @php($website['block_id']=substr(sha1($website['url']),0,8))
    @include('partials.website',$website)
@endforeach
</section>
