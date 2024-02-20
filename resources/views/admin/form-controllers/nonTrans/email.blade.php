<div class="form-group">
    {{ Form::label(trans('admin.' . $key), null, ['class' => 'control-label']) }}
    {{ Form::email($key, null, ['class' => 'form-control']) }}
</div>
