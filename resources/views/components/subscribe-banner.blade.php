
@if(isset($component))
<div class="subscribe-section w-full background-green section-m-100 relative">
    <div class="subscribe-cover absolute right-0 top-0">
        <img src="/assets/img/right-img-01.png" alt="" class="w-full h-full cover">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="subscribe-info flex column items-start justify-center">
                    <div class="title semibold white text-2xl">
                        {{$component->translate(app()->getlocale())->title}}
                    </div>
                    
                    <div class="text medium white"> 
                        {!! $component->translate(app()->getlocale())->desc !!}
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="subscribe-form w-full flex items-center">
                    <form class="w-full relative"  method="POST" action="/{{app()->getLocale()}}/subscribe">
                        @csrf
                        <input type="email" class="w-full medium green" placeholder="{{ trans('website.email') }}" name="email" required>
                        <button type="submit" class="semibold text-lg" style="color: #006838">{{ trans('website.subscribe') }}</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="subscribe-logo flex items-center justify-center relative">
                    <img src="/assets/img/footerlogo.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


@if(Session::has('message'))
    <div class="w-full h-full flex items-center justify-center fixed top-0 left-0 contact-alert-message">
        <div class="background-green white flex items-center justify-center semibold text-2xl">
            {{session('message')}}
        </div>
    </div>
@endif  
@endif