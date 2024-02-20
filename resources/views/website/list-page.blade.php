@extends('website.master')
@section('master')
    @if (isset($section) && isset($post))
        <div class="text_section section-pad relative">
            @if ($post->thumb != '')
                <img src="/assets/img/Vector 1.png" alt="" class="w-full absolute left-0 line">
            @endif
            <div class="container">
                <div class="row">
                    <div @if ($post->thumb != '') class="col-lg-6" @else class="col-lg-12" @endif>
                        <div class="info flex items-start justify-center column h-full">
                            @if ($post->translation != '')
                                <a href="javascript:void(0)"
                                    class="title green text-2xl bold relative cursor-none">
                                    {{ $post->translate(app()->getlocale())->title }}
                                </a>
                            @endif
                            <div class="text medium text-lg black">
                                @if ($post->translation != '')
                                    {!! $post->translate(app()->getlocale())->desc !!}
                                @else
                                    {{ trans('website.no_content_acailable') }}
                                @endif
                            </div>
                        </div>
                    </div>
                    @if ($post->thumb != '')
                        <div class="col-lg-6">
                            <div class="image flex items-center justify-center hidden relative">
                                <img src="/uploads/img/{{ $post->thumb }}" alt="{{ $post->title }}"
                                    class="w-full h-full cover">
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @if(count($components) > 0)
            @foreach ($components as $key => $item)
                <section>
                    <x-dynamic-component :component="componentTypes($item->type_id)" :sectionId="$item->id" />
                </section>
            @endforeach
            @if($components->links())
            {{$components->links()}}
            @endif
        @endif
    @endif
@endsection
