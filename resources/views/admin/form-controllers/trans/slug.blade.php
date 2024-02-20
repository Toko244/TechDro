<div class="form-group">
    {{ Form::label($key,  trans('admin.'.$key),  ['class' => 'control-label iconify', 'data-icon' => isset($field['data-icon']) ? $field['data-icon'] : '']) }}
    {{ Form::text($locale.'['.$key.']', $slug[$locale] ?? null, array_merge(['class' => 'form-control', $field['required'] ? $field['required'] : ''])) }}

 </div>
 <style>
    [data-icon]:before {
        float: right;
        color:red;
        font-size: 24px;
    }
 </style>
