
@if (isset($components) && count($components) > 0)
    <div class="container">
        <div class="post-row-slider component-padding-100-120">
            @foreach ($components as $key => $component)
                <a @if($component->translate(app()->getlocale())->redirect_link != '') href="{{$component->translate(app()->getlocale())->redirect_link}}" @else href="javascript:void(0)" @endif @if($component->translate(app()->getlocale())->redirect_link != '' && $component->target_blank == 1) target="_blank" @endif>
                    <div class="post relative hover">
                        <img src="/uploads/files/{{$component->image}}" alt="" class="w-full h-full cover relative hover-image">
                        <img src="/assets/img/post-cover.png" alt="" class="post-cover w-full absolute bottom-0">

                        <div class="post_arrow flex items-center justify-start absolute">
                            <div class="flex items-center semibold white mr-1">
                                {{$component->translate(app()->getlocale())->title}}
                            </div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.172 8.77766L-5.92552e-07 8.77767L-7.67397e-07 6.77767L12.172 6.77766L6.808 1.41366L8.222 -0.000335013L16 7.77766L8.222 15.5557L6.808 14.1417L12.172 8.77766Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endif