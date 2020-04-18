@php
    if(!isset($block_id)){
        $block_id=rand(1000,9999);
    }
@endphp
<div class="container">
        <div class="row justify-content-center my-4">
            <div class="col-lg-12 text-left">
                <h2 class="text-primary mt-0">{{$block_title}}</h2>
                <hr class="divider light my-4" />
                <p class="text-secondary mb-4"><?= $block_text ?></p>
                @if(isset($button_text))
                <a class="btn btn-light btn-xl js-scroll-trigger" href="{{$button_url}}">{{$button_text}}</a>
                @endif
            </div>
        </div>
    </div>
</section>
