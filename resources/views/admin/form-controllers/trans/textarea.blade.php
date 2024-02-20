@if (isset($section) && $section->type_id == 11)
<div class="form-group">
    {{ Form::label($key,  trans('admin.answer'),  ['class' => 'control-label iconify', 'data-icon' => $field['data-icon']]) }}
    {{ Form::textarea($locale.'['.$key.']', null, [
        'class' => 'form-control ckeditor',  $field['required']
    ]) }}
</div>
@else
<div class="form-group">
    {{ Form::label($key,  trans('admin.'.$key),  ['class' => 'control-label iconify', 'data-icon' => $field['data-icon']]) }}
    {{ Form::textarea($locale.'['.$key.']', null, [
        'class' => 'form-control ckeditor',  $field['required']
    ]) }}
</div>
@endif
