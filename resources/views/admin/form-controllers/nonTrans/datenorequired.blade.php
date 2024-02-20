<div class="form-group col-lg-6 ">
    <div class="row">
        {{ Form::label($key,  trans('admin.'.$key),  ['class' => 'control-label iconify']) }}
        {{ Form::text($key, null, array_merge(['class' => 'form-control datepicker-autoclose',  'placeholder' => "yyyy/mm/dd",  'autocomplete'=>"off"])) }}
    </div>
</div>
