@if (isset($component))
    <div class="text_section section-pad relative text-left">
        @if ($component->image != '')
            <img src="/assets/img/Vector 1.png" alt="" class="w-full absolute left-0 line">
        @endif
        <div class="container">
            <div class="row">
                <div @if ($component->image != '') class="col-lg-6" @else class="col-lg-12" @endif>
                    <div class="info flex items-start justify-center column h-full">
                        @if($component->translate(app()->getlocale())->redirect_link != '')
                        <a href="{{ $component->translate(app()->getlocale())->redirect_link }}" @if ($component->target_blank == 1) target="_blank" @endif class="title green text-2xl  bold relative">
                            {{ $component->translate(app()->getlocale())->title }}
                        </a>
                        @else 
                        <p class="title green text-2xl  bold relative"> 
                            {{ $component->translate(app()->getlocale())->title }}
                        </p>
                        @endif
                        <div class="text regular text-lg black">
                            {!! $component->translate(app()->getlocale())->desc !!}
                        </div>
                    </div>
                </div>
                @if ($component->image != '')
                    <div class="col-lg-6">
                        <div class="image flex items-center justify-center hidden relative">
                        @if($component->translate(app()->getlocale())->redirect_link != '')
                             <a href="{{ $component->translate(app()->getlocale())->redirect_link }}">
                                <img src="/uploads/files/{{ $component->image }}"
                                    alt="{{ $component->translate(app()->getlocale())->title }}"
                                    class="w-full h-full cover">
                             </a>
                           @else
                           <img src="/uploads/files/{{ $component->image }}"
                                    alt="{{ $component->translate(app()->getlocale())->title }}"
                                    class="w-full h-full cover">
                        @endif

                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endif
