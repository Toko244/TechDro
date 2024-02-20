@extends('website.master')
@section('master')
    @if (isset($section))

        @if ($section->post())
            <div class="contact-page w-full">
                <div class="contact-cover w-full background-green relative">

                    <div class="contact-image absolute top-0 right-0 h-full w-3_5 contact-resp-none">
                        <img src="/uploads/files/{{ $section->post()->image }}" alt="" class="w-full h-full cover">
                        <div class="tringle background-green absolute top-0 left-0 z-10 h-full left-1_px"
                            style="clip-path: polygon(0 0, 0% 100%, 100% 0); width: 250px;"></div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="info">
                                    <div class="title lemon-medium text-2xl white mb-1">
                                        {{ $section->post()->translate(app()->getlocale())->title }}
                                    </div>

                                    <div class="text medium white text-lg">
                                        {!! $section->post()->translate(app()->getlocale())->desc !!}
                                    </div>

                                    <div class="contact-info flex column justify-between    ">
                                        <div class="flex items-center justify-start">
                                            <svg width="20" height="41" viewBox="0 0 20 41" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.75373 29.2641L12.7625 27.922C13.4 27.7512 14.0295 27.9607 14.4431 28.4111C15.7513 29.8785 17.3167 31.1672 19.1209 32.2089C19.9148 32.6672 20.1893 33.6917 19.731 34.4856L16.8143 39.5374C16.356 40.3312 15.3314 40.6058 14.5376 40.1474C0.984282 32.3224 -3.65814 14.9967 4.16686 1.44338C4.6252 0.649519 5.64971 0.374999 6.44357 0.833333L11.481 3.74167C12.2748 4.2 12.5493 5.22452 12.091 6.01838C11.0577 7.80816 10.338 9.72131 9.93872 11.6462C9.82026 12.2514 9.35702 12.7538 8.74231 12.9185L3.73355 14.2606C3.46811 19.5536 4.86897 24.8273 7.75373 29.2641Z"
                                                    fill="white" />
                                            </svg>
                                            <a href="tel:{{ $section->post()->mobile }}" class="medium text-lg white medium phone transition-duration">
                                                {{ $section->post()->mobile }}
                                            </a>
                                        </div>

                                        <div class="flex items-center justify-start">
                                            <svg width="30" height="24" viewBox="0 0 30 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M26.25 0H3.75C2.75576 0.00106354 1.80256 0.396493 1.09952 1.09952C0.396493 1.80256 0.00106354 2.75576 0 3.75V19.8214C0.00106354 20.8157 0.396493 21.7689 1.09952 22.4719C1.80256 23.1749 2.75576 23.5704 3.75 23.5714H26.25C27.2442 23.5704 28.1974 23.1749 28.9005 22.4719C29.6035 21.7689 29.9989 20.8157 30 19.8214V3.75C29.9989 2.75576 29.6035 1.80256 28.9005 1.09952C28.1974 0.396493 27.2442 0.00106354 26.25 0ZM25.3004 6.2029L15.6576 13.7029C15.4696 13.8491 15.2382 13.9284 15 13.9284C14.7618 13.9284 14.5304 13.8491 14.3424 13.7029L4.69955 6.2029C4.58626 6.11734 4.4911 6.01012 4.4196 5.88747C4.3481 5.76482 4.30169 5.62918 4.28307 5.48843C4.26445 5.34769 4.27398 5.20465 4.31112 5.06762C4.34825 4.93059 4.41225 4.80231 4.4994 4.69023C4.58654 4.57815 4.69509 4.48451 4.81874 4.41475C4.94238 4.34498 5.07866 4.30049 5.21965 4.28384C5.36065 4.2672 5.50354 4.27875 5.64003 4.31781C5.77652 4.35687 5.90389 4.42267 6.01473 4.51138L15 11.4998L23.9853 4.51138C24.2099 4.34171 24.4924 4.26729 24.7715 4.30423C25.0506 4.34116 25.304 4.48647 25.4768 4.70874C25.6496 4.93101 25.728 5.21237 25.695 5.49198C25.662 5.77159 25.5203 6.02697 25.3004 6.2029Z"
                                                    fill="white" />
                                            </svg>
                                            <a href="mailto:{{$section->post()->email}}" class="medium text-lg white medium transition-duration">
                                                {{ $section->post()->email }}
                                            </a>
                                        </div>

                                        <div class="flex items-center justify-start">
                                            <svg width="30" height="37" viewBox="0 0 30 37" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15 18.75C16.0312 18.75 16.9144 18.3825 17.6494 17.6475C18.3831 16.9137 18.75 16.0312 18.75 15C18.75 13.9688 18.3831 13.0856 17.6494 12.3506C16.9144 11.6169 16.0312 11.25 15 11.25C13.9688 11.25 13.0863 11.6169 12.3525 12.3506C11.6175 13.0856 11.25 13.9688 11.25 15C11.25 16.0312 11.6175 16.9137 12.3525 17.6475C13.0863 18.3825 13.9688 18.75 15 18.75ZM15 36.7969C14.75 36.7969 14.5 36.75 14.25 36.6562C14 36.5625 13.7812 36.4375 13.5938 36.2812C9.03125 32.25 5.625 28.5081 3.375 25.0556C1.125 21.6019 0 18.375 0 15.375C0 10.6875 1.50813 6.95312 4.52437 4.17188C7.53938 1.39062 11.0312 0 15 0C18.9688 0 22.4606 1.39062 25.4756 4.17188C28.4919 6.95312 30 10.6875 30 15.375C30 18.375 28.875 21.6019 26.625 25.0556C24.375 28.5081 20.9688 32.25 16.4062 36.2812C16.2188 36.4375 16 36.5625 15.75 36.6562C15.5 36.75 15.25 36.7969 15 36.7969Z"
                                                    fill="white" />
                                            </svg>
                                            <span class="medium text-lg white medium">
                                                {{ $section->post()->translate(app()->getlocale())->address }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="contact-image w-full contact-resp-on">
                        <img src="/assets/img/contacr-cover.png" alt="" class="w-full h-full cover">
                    </div>
                </div>

                <div class="contact-form section-pad" style="background: #F3F5F6;">
                    <div class="container">
                        <div class="form-info">
                            <div class="title bold black text-2xl mb-1">
                                {{ trans('website.contact_form') }}
                            </div>

                            <div class="text medium black text-lg">
                                {{ trans('website.contact_description') }}
                            </div>
                        </div>

                        <div class="form">
                            <form method="post">
                                {{ csrf_field() }}
                                <div class="row">
                                    <input type="hidden" class="w-full pl-1" style="height: 50px;" name="post_id" value="{{ $section->post()->id }}">
                                    <div class="col-xl-6 flex wrap">
                                        <div class="flex column items-start w-1_2 pr-1">
                                            <label for="" class="semibold text-lg mb-1 required"
                                                style="color: #656C69;">{{ trans('website.name') }}</label>
                                            <input type="text" class="w-full pl-1" style="height: 50px;" name="name" required>
                                        </div>

                                        <div class="flex column items-start w-1_2 pl-1">
                                            <label for="" class="semibold text-lg mb-1 required"
                                                style="color: #656C69;">{{ trans('website.email') }}</label>
                                            <input type="email" class="w-full pl-1" style="height: 50px;" name="email" required>
                                        </div>

                                        <div class="flex column items-start w-1_2 pr-1">
                                            <label for="" class="semibold text-lg mb-1"
                                                style="color: #656C69;">{{ trans('website.phone') }}</label>
                                            <input type="text" class="w-full pl-1" style="height: 50px;" name="phone">
                                        </div>

                                        <div class="flex column items-start w-1_2 pl-1">
                                            <label for="" class="semibold text-lg mb-1"
                                                style="color: #656C69;">{{ trans('website.subject') }}</label>
                                            <input type="text" class="w-full pl-1" style="height: 50px;" name="subject" >
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="textarea w-full h-full pl-1 pad-l-contact_01">
                                            <label for="" class="semibold text-lg required"
                                                style="color: #656C69;">{{ trans('website.text') }}</label>
                                            <textarea name="text" id="" cols="30" rows="10" class="w-full mt-1 pt-1 pl-1 pr-1 pb-1" required></textarea>
                                        </div>
                                    </div>

                                    <div class="w-full flex items-center justify-end">
                                        <button type="submit"
                                            class="flex items-center justify-center white bold text-lg submit-button transition-duration  ka-font-nino">{{ trans('website.send') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="contact-map w-full flex items-center justify-center">
                    @if(settings('address_link') != '')
                    <a href="{{settings('address_link')}}" target="_blank">
                        <img src="/assets/img/map.png" alt="" class="w-full h-full cover">
                    </a>
                    @else
                    <img src="/assets/img/map.png" alt="" class="w-full h-full cover">
                    @endif
                </div>
            </div>
        @endif
        @if ($section->components()->count() > 0)
            @foreach ($section->components() as $key => $item)
                <section>
                    <x-dynamic-component :component="$item" :sectionId="$key" />
                </section>
            @endforeach
        @endif
    @endif
@endsection


@if(Session::has('message'))
    <div class="w-full h-full flex items-center justify-center fixed top-0 left-0 contact-alert-message">
        <div class="background-green white flex items-center justify-center semibold text-2xl">
            {{session('message')}}
        </div>
    </div>
@endif
