@extends('admin.layouts.app')

@push('name')
    {{ trans('admin.components') }}
@endpush

@if(isset($errorMessage))
    <div class="alert alert-danger">
        {{ $errorMessage }}
    </div>
@endif

@section('content')
<div class="row">
  <div class="col-12">
      <div class="card-box">
        @if(isset($count))
            <h4> {{ trans('admin.count_components') }} : {{$count}}</h4>
        @endif
        <div style="display: flex; align-items:center; justify-content: space-between; padding:20px 0">
          <h4 class="mt-0 header-title float-left">{{ $component->name ?? '' }}</h4>
          @if (auth()->user()->isType('admin'))
            <a href="/{{ app()->getLocale() }}/admin/component/create" type="button" class="float-right btn btn-info waves-effect width-md waves-light">{{ trans('admin.add_component') }}</a>
          @endif
          </div>
        <div class="dd section-list">
          @include('admin.components.list-helper', ['components' => $components ?? ''])
        </div>

        @if (auth()->user()->isType('admin'))
			<div class="form-group text-right mb-0 " style="padding-top:10px">
			<button class=" btn btn-info waves-effect waves-light mr-1 btn-save btn-save-nestable" type="submit">
				{{ trans('admin.save') }}
			</button>

			</div>
        @endif
      </div>
  </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.css" integrity="sha512-WLnZn2zeYB0crLeiqeyqmdh7tqN5UfBiJv9cYWL9nkUoAUMG5flJnjWGeeKIs8eqy8nMGGbMvDdpwKajJAWZ3Q==" crossorigin="anonymous" />

<style>
  .dd{
    max-width: initial;
  }
  .dd-item{

    font-size: 18px;
  }
  .dd-handle {
    height: 50px;
    background-color: #71b6f9;
    border: 2px solid #71b6f9;
    font-size: 18px;
    padding: 12px 20px;
    color: white;
    transition-duration: 0.3s;
    align-items: center;

  }
  .dd-item:hover .dd-handle{
    cursor: grab;
    background-color: white;
    color: #71b6f9;
  }
  .dd-item{
    position: relative;
  }
  .dd-item .change-icons{
    position: absolute;
    right: 8px;
    z-index: 2;
    top: 5px;
  }
  .dd-item .fas, .dd-item .fa-eye, .dd-item .fa-envelope{
    color: white;
    padding: 10px 10px;
    transition-duration: 0.3s
  }
  .dd-item:hover .fa-trash-alt:hover{
    color: #ff5b5b;
  }
  .dd-item:hover .fa-pencil-alt:hover{
    color: #5b69bc;
  }
  .dd-item:hover .fa-envelope:hover{
    color: #5b69bc;
  }
  .dd-item:hover .fa-eye:hover{
    color: #f9c851;
  }
  .dd-collapse, .dd-expand{
    display: none
  }
  .dd-item:hover .fas, .dd-item:hover .fa-eye, .dd-item:hover .fa-envelope{
    color: #71b6f9
  }
  .dd-item > button.dd-collapse:before{
    display: none;
  }
</style>
@endpush
