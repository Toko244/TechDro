@if(isset($components) && count($components) > 0)
    <div class="home-slider resp-slider-none">
        @foreach ($components as $key => $component)
            <div class="home-banner w-full relative background-green home-banner-responsive @if($component->only_image) active-hidden-slider @endif" @if($component->only_image) data-slider="false" @endif>
                <div class="home-slider-slide w-full h-full flex items-center home-slider-responsive01">
                    <div class="container container-hide_01">
                        <div class="row">
                            <div class="green-side-width green-side-width-responsive">
                                <div class="info">
                                    <div class="title white bold text-3xl">
                                        {{$component->translate(app()->getlocale())->title}}
                                    </div>
                                    <div class="text text-xl white medium">
                                        {!! $component->translate(app()->getlocale())->desc !!}
                                    </div>
                                    <a href="{{$component->translate(app()->getlocale())->redirect_link}}" @if($component->target_blank == 1) target="_blank" @endif" class="book-button-2 text-lg bold green background-white transition-duration  ka-font-nino" style="line-height: 32px;">
                                        {{ trans('website.book_meeting') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image absolute z-1 top-0 right-0 h-full image-side-width image-side-width-responsive ">
                        <div class="image-slider w-full h-full">
                            @if(count($component->files) > 0)
                                @foreach($component->files as $key => $image)
                                <div class="img w-full h-full">
                                    <img src="/uploads/img/{{$image->file}}" alt="" class="w-full h-full cover">
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
