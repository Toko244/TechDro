<div class="form-group">
    <input type="hidden" id="locale" value="{{Config::get('app.locale')}}">
    {{ Form::label(trans('admin.'.$key), null, ['class' => 'control-label']) }}

    <div class="add-card">

        <input type="file" name="{{ $locale }}[{{ $key }}][]">
        @foreach ($post->translate($locale)->{$key} as $q => $item)
        <a href="/uploads/files/{{ $item['file'] }}" download="{{ $item['name'] }}"><img
            src="https://img.icons8.com/ios/50/000000/pdf--v1.png" /> <span>{{ $item['name'] }}</span>
        </a>
        @endforeach
    </div>
</div>
