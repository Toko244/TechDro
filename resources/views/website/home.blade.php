@extends('website.master', ['home' => true])
@section('master')
       @if(isset($section) && ($section->component()))
       @foreach ($section->component() as $key => $item)
       <section>
        <x-dynamic-component :component="$item" :sectionId="$key"/>
       </section>
       @endforeach
       @endif
@endsection
