@if(isset($component))
<div class="text_section flex column section-pad text-top">
    <div class="container">
        @if($component->translate(app()->getlocale())->redirect_link != '')
        <a  href="{{$component->translate(app()->getlocale())->redirect_link}}" @if($component->target_blank == 1) target="_blank" @endif class="title green text-2xl  bold relative">
            {{$component->translate(app()->getlocale())->title}}
        </a>
        @else
        <div class="title green text-2xl bold relative">
            {{ $component->translate(app()->getlocale())->title }}
        </div>
        @endif
        @if(isset($component->translate(app()->getlocale())->desc))
        <div class="text-seemore flex items-center justify-between">
            <div class="text regular text-lg black">
                {!! $component->translate(app()->getlocale())->desc !!}
            </div>
        </div>
        @endif
        @if($component->image != '')
        @if($component->translate(app()->getlocale())->redirect_link != '')
        <a href="{{ $component->translate(app()->getlocale())->redirect_link }}">
            <div class="image mt-2 image-height-resp_01">
                <img src="/uploads/files/{{$component->image}}" alt="{{$component->translate(app()->getlocale())->title}}" class="w-full h-full cover response-delete-cover">
            </div>
        </a>
        @else
        <div class="image mt-2 image-height-resp_01">
                <img src="/uploads/files/{{$component->image}}" alt="{{$component->translate(app()->getlocale())->title}}" class="w-full h-full cover response-delete-cover">
            </div>
        @endif
        @endif
    </div>
</div>
@endif