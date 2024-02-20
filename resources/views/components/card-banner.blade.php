
@if(isset($section) && isset($components) && count($components) > 0)    
    <div class="front-card-banner section-padding">
        <div class="container">
            <div class=" title green text-2xl bold  mb-3">
                {{$section->translate(app()->getlocale())->title}}
            </div>
            <div class="row row-resp-slider">
                @foreach ($components as $key => $post)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card flex items-center justify-center relative w-full hidden mb-2 @if($post->translate(app()->getlocale())->redirect_link != '') shadow @endif transition-duration">
                        @if($post->translate(app()->getlocale())->redirect_link != '')
                        <a href="{{ $post->translate(app()->getlocale())->redirect_link }}" @if ($post->target_blank == 1) target="_blank" @endif class="w-full h-full relative flex items-center justify-center">                                
                            <img src="/assets/img/card-brown.png" alt="" class="w-full h-full cover absolute top-0 left-0 brown">
                            <img src="/assets/img/card-white.png" alt="" class="w-full h-full cover absolute top-0 left-0 white">
                            <div class="relative z-10 text-xl card-title pl-2 pr-3 bold ka-font-nino">
                                {{$post->translate(app()->getlocale())->title}}
                            </div>
                        </a>
                        @else
                        <div class="w-full h-full relative flex items-center justify-center">                     
                            <img src="/assets/img/card-brown.png" alt="" class="w-full h-full cover absolute top-0 left-0 brown">
                            <img src="/assets/img/card-white.png" alt="" class="w-full h-full cover absolute top-0 left-0 white">
                            <div class="relative z-10 text-xl card-title pl-2 pr-3 bold ka-font-nino">
                                {{$post->translate(app()->getlocale())->title}}
                            </div>
                        </div>
                        @endif           
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endif