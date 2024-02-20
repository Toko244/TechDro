@if (isset($components) && count($components) > 0)
    <div class="testimonial w-full">
        <div class="container">
            <div class="title green text-2xl semibold mb-2">
                {{ $section->translate(app()->getlocale())->title }}
            </div>

            <div class="text medium text-lg black mb-2">
                {!! $section->translate(app()->getlocale())->desc !!}
            </div>

            <div class="row testimonial-slider">
                @foreach ($components as $key => $component)
                    <div class="col-xl-3">
                        <div class="testimonial-block"> 
                        @if($component->translate(app()->getlocale())->redirect_link != '')
                            <a href="{{ $component->translate(app()->getlocale())->redirect_link }}"
                            @if ($component->target_blank == 1) target="_blank" @endif
                                class="black transition-duration">
                        @else
                                <a href="javascript:void(0)"
                                    class="black transition-duration cursor-01">
                                @endif
                                <div class="image w-full flex items-center justify-center">
                                    <img src="/uploads/files/{{ $component->image }}" alt=""
                                        class="W-full h-full cover">
                                </div>

                                <div class="block-title black text-xl semibold">
                                    {{ $component->translate(app()->getlocale())->title }}
                                </div>

                                <div class="block-text medium text-lg">
                                    {!! $component->translate(app()->getlocale())->desc !!}
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
