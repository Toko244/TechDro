@extends('website.master')
@section('master')
    @if (isset($section) && isset($post))
        <div class="text_section section-pad relative">
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
                            <div class="text regular text-lg black">
                                @if ($post->translation != '')
                                    {!! $post->translate(app()->getlocale())->desc !!}
                                @else
                                    {{ trans('website.no_content_acailable') }}
                                @endif
                            </div>

                            <div class="sharethis-inline-share-buttons">
                                <h2>Share in:</h2>
                                <div class="share-icons-010">
                                    <div class="addthis_inline_share_toolbox"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (isset($post->files) && count($post->files) > 0)
                        <div class="col-lg-6">
                            <div class="relative" style="border-radius: 12px; overflow: hidden;">
                                <div class="text-section-slider">
                                    @if(isset($post->thumb))
                                    <div class="image flex items-center justify-center hidden relative">
                                        <img src="/uploads/img/{{  $post->thumb }}" alt="{{  $post->thumb }}" class="w-full h-full cover">
                                    </div>
                                    @endif
                                    @foreach($post->files as $file)
                                    @if($file->file != $post->thumb)
                                        <div class="image flex items-center justify-center hidden relative">
                                            <img src="/uploads/img/{{ $file->file }}" alt="{{ $post->title }}" class="w-full h-full cover">
                                        </div>
                                        @endif
                                    @endforeach
                                </div>
                                @if(count($post->files) > 1)
                                <div class="text-slider-arrows w-full flex items-center justify-end absolute bottom-0">
                                    <div class="prev text-prev background-green">
                                        <svg width="34" height="20" viewBox="0 0 34 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.87034 8.71432L34 8.71432L34 11.2857L4.87034 11.2857L11.6949 18.1821L9.89589 20L2.22735e-08 10L9.89589 2.26179e-08L11.6949 1.81795L4.87034 8.71432Z" fill="white"/>
                                        </svg>
                                    </div>

                                    <div class="next text-next background-green">
                                        <svg width="34" height="20" viewBox="0 0 34 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M29.1297 11.2857L4.55712e-06 11.2857L4.77619e-06 8.71432L29.1297 8.71432L22.3051 1.81795L24.1041 1.0196e-06L34 10L24.1041 20L22.3051 18.1821L29.1297 11.2857Z" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                                @endif

                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @if($section->components()->count() > 0)
            <div class="guideline relative">
                <div class="container">
                    <div class="guideline-list">
                        <div class="title semibold text-2xl mb-3 w-full white">
                            {{ trans('website.page_guideline') }}
                        </div>
                    </div>
                </div>
                <div class="fixed-guidline">
                    <div class="guidline-icon" id="guideline">
                        <svg width="68" height="71" viewBox="0 0 68 71" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M-1 0H58C63.5228 0 68 4.47715 68 10V61C68 66.5229 63.5229 71 58 71H-1V0Z"
                                fill="#3F9752" />
                            <rect x="14" y="21" width="37" height="4" rx="2"
                                fill="white" />
                            <rect x="14" y="33" width="28" height="4" rx="2"
                                fill="white" />
                            <rect x="14" y="45" width="37" height="4" rx="2"
                                fill="white" />
                        </svg>
                    </div>

                    <div class="fixed-guidline-list flex column">

                        <div class="title semibold text-2xl mb-3 w-full white">
                            {{ trans('website.page_guideline') }}
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($section->components() as $key => $item)
                <section id="{{ $key }}">
                    <x-dynamic-component :component="$item" :sectionId="$key" />
                </section>
            @endforeach
        @endif
    @endif
@endsection
