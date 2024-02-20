
@extends('website.master')
@section('master')


<div class="search-page">
   <div class="search-cover w-full flex items-center justify-center relative">
       <img src="/assets/img/search201.png" alt="" class="absolute w-full h-full top-0 left-0 cover">
       <div class="search-form relative">
        <form action="{{ route('search', app()->getLocale()) }}" method="POST">
            @csrf
           <input type="text" placeholder="{{ trans('website.search') }}" class="semibold green" name="que" value="{{$searchText}}">

           <button type="submit" class="flex items-center">
               <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M8.86088 0C13.7521 0 17.7218 3.96968 17.7218 8.86088C17.7218 13.7521 13.7521 17.7218 8.86088 17.7218C3.96968 17.7218 0 13.7521 0 8.86088C0 3.96968 3.96968 0 8.86088 0ZM8.86088 15.7527C12.6681 15.7527 15.7527 12.6681 15.7527 8.86088C15.7527 5.05267 12.6681 1.96909 8.86088 1.96909C5.05267 1.96909 1.96909 5.05267 1.96909 8.86088C1.96909 12.6681 5.05267 15.7527 8.86088 15.7527ZM17.2147 15.8226L20 18.6069L18.6069 20L15.8226 17.2147L17.2147 15.8226Z" fill="#006838"/>
               </svg>
           </button>
        </form>
       </div>
   </div>
   <div class="search-result mt-1">
       <div class="container">
           <div class="result w-full flex items-start semibold text-xl" style="color: #656C69;">
            {{ trans('website.search') }}: {{count($data)}}
           </div>

           <div class="result-list w-full flex column">
                @if(count($data) > 0)
                @foreach($data as $key => $value)
                <div class="result-block">
                   <div class="title">
                       <a href="{{$value['slug']}}" class="green text-2xl semibold transition-duration">
                           {{$value['title']}}
                       </a>
                   </div>

                   <div class="text text-lg medium">
                    {{$value['desc']}}
                   </div>

                   <div class="section-name flex items-center justify-between">
                       <a href="{{ $value['slug'] }}" class="semibold text-xl" style="color: #656C69;">
                        {{ $value['section'] }}
                       </a>

                       <a href="{{ $value['slug'] }}">
                           <svg width="73" height="16" viewBox="0 0 73 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <line x1="-8.74227e-08" y1="7.77832" x2="57" y2="7.77832" stroke="#006838" stroke-width="2"/>
                               <path d="M69.172 8.778L57 8.778L57 6.778L69.172 6.778L63.808 1.414L65.222 -3.39987e-07L73 7.778L65.222 15.556L63.808 14.142L69.172 8.778Z" fill="#006838"/>
                           </svg>
                       </a>
                   </div>
               </div>
               @endforeach
               @endif
           </div>
       </div>
   </div>
</div>

@endsection
