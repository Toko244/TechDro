@extends('website.master')
@section('master')
    @if (isset($section))

        <div class="photo-gallery section-pad">
            <div class="container">
                <div class="list-section-title flex items-center justify-start mb-1">
                    <h1 class="lemon-medium green ka-font-nino" style="font-size: 26px; line-height: 35px;">{{ $section->title }}</h1>
                </div>

                <div class="text text-xl medium">
                    {!! $section->desc !!}
                </div>

                <div class="content">
                    <div class="tab flex items-center justify-center wrap">
                        <button class="tablinks bold text-xl active" onclick="openCity(event, 'London')">{{ trans('website.all') }}</button>
                        @if (count($section->posts) > 0)
                            @foreach ($section->posts as $key => $post)
                                <button class="tablinks bold text-xl"
                                    onclick="openCity(event, '{{ $post->translate(app()->getlocale())->slug }}')">{{ $post->translate(app()->getlocale())->title }}</button>
                            @endforeach
                        @endif
                    </div>

                    <div id="London" class="tabcontent" style="display:block">
                        <div class="row">
                            @if(count($files) > 0)
                            @foreach ($files as $key => $sectionfile)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                <div class="photo hidden w-full hover relative" style="border-radius: 8px;">
                                    <a href="@if($sectionfile->title != '') {{$sectionfile->title}} @else /uploads/img/{{$sectionfile->file}} @endif" data-fancybox="photo">
                                        <img src="/uploads/img/{{$sectionfile->file}}" alt="" class="w-full h-full cover hover-image relative">
                                        @if($sectionfile->title != '')
                                        <img src="/assets/img/youtubeicon.png" alt="" class="youtubeicon">
                                        @endif
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            {{$files->links()}}
                            @endif
                        </div>
                    </div>

                    @if (count($section->posts) > 0)
                        @foreach ($section->posts as $key => $post)
                            <div id="{{ $post->translate(app()->getlocale())->slug }}" class="tabcontent">
                                <div class="row">
                                    @if (count($post->files) > 0)
                                        @foreach ($post->files as $key => $image)
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                            <div class="photo hidden w-full hover relative" style="border-radius: 8px;">
                                                <a href="@if($image->title != '') {{$image->title}} @else/uploads/img/{{$image->file}} @endif" data-fancybox="photo">
                                                    <img src="/uploads/img/{{$image->file}}" alt="" class="w-full h-full cover hover-image relative">
                                                    @if($image->title != '')
                                                    <img src="/assets/img/youtubeicon.png" alt="" class="youtubeicon">
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        </div>
        @if ($section->components()->count() > 0)
            @foreach ($section->components() as $key => $item)
                <section>
                    <x-dynamic-component :component="$item" :sectionId="$key" />
                </section>
            @endforeach
        @endif
    @endif
@endsection
