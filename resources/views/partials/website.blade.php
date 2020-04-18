@php
if(!isset($block_id)){
    $block_id=rand(1000,9999);
}
$clock_id='count_' . $block_id;
@endphp

    <div class="container border-info" id="{{$clock_id}}">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-left">
                <img src="{{$logo}}" class="float-left mx-2 bg-white" style="height: 32px; border: 1px solid #ffffff">
                <a href="{{$url}}"><h2 class="text-white mt-0">{{$name}}</h2></a>
                <p class="text-white">{{$description}}</p>
                <p class="text-white-75" style="font-size: .8em"><i class="fas fa-clock"></i> <code class="text-white-75">{{$tz}}</code> is the time zone for {{$city}}</p>
                <p class="text-white"><i class="fas fa-hand-point-right"></i> &quot;{{$explain_text}}&quot;<br />
                    <a href="{{$explain_url}}"><small class="text-white-75">{{$explain_url}}</small></a>
                </p>
            </div>
            <div class="col-lg-4 text-left">
                <p class="text-white-50 mb-4">
                <div id="{{"count_" . $block_id}}"></div>
                <script>
                    tzName='{{$tz}}';
                    tHere = DateTime.local();
                    tThere = DateTime.fromObject({zone: tzName});
                    tLaunch1=DateTime.fromSQL(tHere.toISODate() + " " + "{{$best_time}}", { zone: tzName });
                    if(tLaunch1<tThere){
                        tLaunch1=tLaunch1.plus({ days: 1 });
                    }
                    diffDays={{$best_day}} - tThere.toFormat('c');
                    tLaunch2=DateTime.fromSQL(tHere.toISODate() + " " + "{{$best_time}}", { zone: tzName }).plus({days: diffDays});
                    if(tLaunch2<tThere){
                        tLaunch2=tLaunch2.plus({ days: 7 });
                    }

                    document.write("<br><i class=\"fas fa-clock\"></i> Time in " + tzName + ": " + tThere.toLocaleString(DateTime.TIME_SIMPLE));
                    document.write("<br><strong>BEST LAUNCH TIMES</strong>");
                    document.write("<br><i class=\"fas fa-calendar-day\"></i> Daily: " + tLaunch1.toLocaleString(DateTime.DATETIME_MED) + " (in " + tLaunch1.diff(tThere).as('hours').toFixed(1) + " hours)");
                    document.write("<br><i class=\"fas fa-calendar-week\"></i> Weekly: " + tLaunch2.toLocaleString(DateTime.DATETIME_MED) + " (in " + tLaunch2.diff(tThere).as('days').toFixed(2) + " days)")
                </script>

                </p>
            </div>
        </div>
        <hr>
    </div>
