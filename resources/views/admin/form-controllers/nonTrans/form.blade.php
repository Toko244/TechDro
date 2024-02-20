<div class="form-group">
    {{ Form::label(trans('admin.'.$key), null, ['class' => 'control-label']) }}
    <select name="{{ $key }}" class="form-control select2" id="" >

        @foreach (getForm()->form as $key => $item)

        <option value="{{ $item->id }}" @if(isset($post->form_id) &&

            ($item->id == $post->form_id)) selected

            @endif>{{$item->title}}</option>
        @endforeach
    </select>
</div>
