@if (isset($component) && $component != '')
<div class="slider-posts section-padding">
    <div class="container">
        <div class="title w-full flex items-center justify-between mb-3">
            <div class="green text-2xl bold ka-font-nino">
                {{$component->translate(app()->getlocale())->title}}
            </div>

            <div class="info flex items-center justify-end">
                @if($component->translate(app()->getlocale())->redirect_link != '')
                <div class="see-all">
                    <a href=" {{$component->translate(app()->getlocale())->redirect_link}}" @if($component->target_blank == 1) target="_blank" @endif"  class="black text-xl medium">
                        {{ trans('website.see_all') }}
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
    
    <div class="w-full hidden">
        <div class="container">
            <div class="post-slider" style="width: 130%;">
                @if(count($component->files) > 0)
                    @foreach($component->files as $key => $image)
                    <div class="slide">
                        <a href="@if($image->title != '') {{$image->title}} @else /uploads/img/{{$image->file}} @endif" class="block w-full h-full"  data-fancybox="photo">
                            <img src="/uploads/img/{{$image->file}}" alt="" class="w-full h-full cover">
                        </a>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endif
