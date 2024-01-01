@php
if(!isset($block_id)){
    $block_id=rand(1000,9999);
}
$clock_id='count_' . $block_id;
@endphp

    <div class="container border-info" id="{{$clock_id}}">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-left">
                <img src="{{$logo}}" class="float-left mx-2 bg-white" style="height: 32px; border: 1px solid #ffffff" alt="">
                <a href="{{$url}}"><h2 class="text-white mt-0">{{$name}}</h2></a>
                <p class="text-white" style="font-size: .8em"><i class="fas fa-info-circle"></i> {{$description}}</p>
                <p class="text-white" style="font-size: .8em"><i class="fas fa-clock"></i> Company is based in <strong>{{$city}}</strong></p>
                @if(isset($explain_text))
                <p class="text-white" style="font-size: .8em"><i class="fas fa-rocket"></i> Best time: &quot;<a class="text-white" href="{{$explain_url}}">{{$explain_text}}</a>&quot;</p>
                @endif
                <p class="text-white" style="font-size: .8em"><i class="fas fa-globe-europe"></i> <a href="{{$traffic_url}}"><code class="text-white">{{$traffic_text}}</code></a></p>
            </div>
            <div class="col-lg-6 text-left">
                <p class="text-white-75 mb-4">
                    TIME ZONE: <strong>{{$tz}}</strong>
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

                    document.write("<br><i class=\"fas fa-clock\"></i> Time there now: " + tThere.toLocaleString(DateTime.TIME_SIMPLE) + "<br>");
                    document.write("<br><strong>BEST LAUNCH TIMES</strong>");
                    if(tLaunch1.diff(tThere).as('hours') > 4){
                        document.write("<br><i class=\"fas fa-calendar-day\"></i> Daily: " + tLaunch1.toLocaleString(DateTime.DATETIME_MED) + " (in " + tLaunch1.diff(tThere).as('hours').toFixed(1) + " hours)");
                    } else {
                        document.write("<br><i class=\"fas fa-calendar-day\"></i> Daily: " + tLaunch1.toLocaleString(DateTime.DATETIME_MED) + " (<span class='font-weight-bolder text-warning'><i class='fas fa-rocket'></i> in " + tLaunch1.diff(tThere).as('hours').toFixed(1) + " hours</span>!)");
                    }
                    document.write("<br><i class=\"fas fa-calendar-week\"></i> Weekly: " + tLaunch2.toLocaleString(DateTime.DATETIME_MED) + " (in " + tLaunch2.diff(tThere).as('days').toFixed(2) + " days)")
                </script>

                </p>
            </div>
        </div>
        <hr>
    </div>
