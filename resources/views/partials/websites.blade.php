@php
$websites=array();
$websites['rd']=array(
    'name'	=>	'Reddit',
    'description'   =>  'Reddit is a network of communities based on people\'s interests',
    'url'	=>	'https://www.reddit.com/',
    'logo'	=>	'/assets/logo/reddit.png',
    'explain_text'  => 'Thursday at 9AM or 12PM, Saturday at 9AM',
    'explain_url'   => 'https://dashboard.laterforreddit.com/analysis/?subreddit=hackernews&threshold=5',
    'city'	=>	'San Francisco',
    'tz'	=>	'America/Los_Angeles',
    'best_time'	=>	'09:00',
    'best_day'	=>	'4',
    'traffic_text'  => '1.9B visitors/month, 50% USA, 7% UK, 7% Canada, 4% Australia',
    'traffic_url'   => 'https://www.similarweb.com/website/reddit.com'
);
$websites['hn']=array(
    'name'	=>	'Hacker News',
    'description'   =>  'Show HN is a way to share something that you\'ve made on Hacker News',
    'url'	=>	'https://news.ycombinator.com/',
    'logo'	=>	'/assets/logo/hackernews.png',
    'explain_text'  => 'Publish on week-ends, around 12 pacific',
    'explain_url'   => 'https://towardsdatascience.com/how-to-get-upvoted-on-hacker-news-692360e85ef8',
    'city'	=>	'San Francisco',
    'tz'	=>	'America/Los_Angeles',
    'best_time'	=>	'00:01',
    'best_day'	=>	'7',
    'traffic_text'  => '10.7M visitors/month, 42% USA, 6% China, 5% UK, 5% Canada',
    'traffic_url'   => 'https://www.similarweb.com/website/news.ycombinator.com'
);
$websites['at']=array(
    'name'	=>	'AlternativeTo',
    'description'   =>  'helping you find the right software for your computer, mobile phone or tablet',
    'url'	=>	'https://alternativeto.net/',
    'logo'	=>	'/assets/logo/alternativeto.png',
    //'explain_text'  => 'Choose a Monday or Tuesday',
    //'explain_url'   => 'https://medium.com/startup-frontier/how-we-got-1-000-beta-signups-in-2-weeks-the-blueprint-eb794cf718f1',
    'city'	=>	'Stockholm, Sweden',
    'tz'	=>	'Europe/Stockholm',
    'best_time'	=>	'09:00',
    'best_day'	=>	'1',
    'traffic_text'  => '5.3M visitors/month, 18% USA, 5% Germany, 5% France, 5% India',
    'traffic_url'   => 'https://www.similarweb.com/website/alternativeto.net'
);
$websites['ph']=array(
    'name'	=>	'Product Hunt',
    'description'   =>  'Product Hunt is a website that lets users share and discover new products',
    'url'	=>	'https://www.producthunt.com/',
    'logo'	=>	'/assets/logo/producthunt.png',
    'explain_text'  => 'Sunday turned out to be the day, between about midnight and 1 a.m.',
    'explain_url'   => 'https://popsters.com/blog/post/statistics-of-projects-at-product-hunt',
    'city'	=>	'San Francisco',
    'tz'	=>	'America/Los_Angeles',
    'best_time'	=>	'00:01',
    'best_day'	=>	'7',
    'traffic_text'  => '4.4M visitors/month, 28% USA, 6% India, 6% China, 5% UK',
    'traffic_url'   => 'https://www.similarweb.com/website/producthunt.com'
);
$websites['bl']=array(
    'name'	=>	'BetaList',
    'description'   =>  'BetaList is the place for early adopters to discover upcoming internet startups.',
    'url'	=>	'https://www.betalist.com/',
    'logo'	=>	'/assets/logo/betalist.png',
    'explain_text'  => 'Choose a Monday or Tuesday',
    'explain_url'   => 'https://medium.com/startup-frontier/how-we-got-1-000-beta-signups-in-2-weeks-the-blueprint-eb794cf718f1',
    'city'	=>	'Eindhoven, Netherlands',
    'tz'	=>	'Europe/Amsterdam',
    'best_time'	=>	'09:00',
    'best_day'	=>	'1',
    'traffic_text'  => '161K visitors/month, 21% USA, 9% India, 8% UK, 5% Italy',
    'traffic_url'   => 'https://www.similarweb.com/website/betalist.com'
);

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
    'best_day'	=>	'2',
    'traffic_text'  => '45K visitors/month, 18% India, 13% USA, 6% France, 5% Brasil',
    'traffic_url'   => 'https://www.similarweb.com/website/launchingnext.com/'
);

$websites['bp']=array(
    'name'	=>	'PitchWall',
    'description'   =>  'PitchWall is a startup directory where you can discover, hunt and upvote the latest  startups',
    'url'	=>	'https://pitchwall.co/',
    'logo'	=>	'/assets/logo/pitchwall.png',
    //'explain_text'  => 'Choose a Monday or Tuesday',
    //'explain_url'   => 'https://medium.com/startup-frontier/how-we-got-1-000-beta-signups-in-2-weeks-the-blueprint-eb794cf718f1',
    'city'	=>	'Indore, India',
    'tz'	=>	'Asia/Kolkata',
    'best_time'	=>	'09:00',
    'best_day'	=>	'2',
    'traffic_text'  => '27K visitors/month, 18% India, 13% USA, 6% France, 5% Brasil',
    'traffic_url'   => 'https://www.similarweb.com/website/pitchwall.co/'
);


@endphp
<section class="page-section bg-primary" id="sites">
@foreach($websites as $code => $website)
    @php($website['block_id']=substr(sha1($website['url']),0,8))
    @include('partials.website',$website)
@endforeach
</section>
