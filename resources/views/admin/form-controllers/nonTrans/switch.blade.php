
<div class="button-container on">
    {{-- <div class="button"></div> --}}
    <div class="text">
        {{ Form::label(trans('admin.'.$key), null, ['class' => 'control-label']) }}
        <br>
        {{ Form::hidden($key, '0') }}
        {{ Form::checkbox($key, 1,  null, [
            'data-plugin' => 'switchery',
            'data-color'=>'#3bafda',
            'id' =>  $key
        ]) }}
    </div>
  </div>
