<div class="form-group">
    {{ Form::label(trans('admin.' . $key), null, ['class' => 'control-label']) }}
    <select name="{{ $key }}" class="form-control select" id="">
        @foreach (selectDirectory()->directory as $directory)
            <option value="{{ $directory->id }}" @if (isset($post) && isset($post['additional']['team_type']) && $post['additional']['team_type'] == $directory->id) selected @endif>

                {{ $directory->translate()->title }}
            </option>
        @endforeach
    </select>
</div>
