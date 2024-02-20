<div class="form-group">
    {{-- <input type="hidden" id="locale" value="{{Config::get('app.locale')}}"> --}}
    {{ Form::label(trans('admin.'.$key), null, ['class' => 'control-label']) }}


    <div class="add-card">
        <button class="btn btn-primary waves-effect waves-light mr-1 add-video-card"
            style="margin: 15px 0px;">{{ trans('admin.add') }}</button>
        <div class="video-cards">
            @if (isset($post) && isset($post->translate($locale)->{$key}))
            @foreach ($post->translate($locale)->{$key} as $q => $item)
            <div  class="dfie">
            <a href="/uploads/files/{{ $item['file'] }}" download="{{ $item['name'] }}"><img
				src="https://img.icons8.com/ios/50/000000/pdf--v1.png" /> <span>{{ $item['name'] }}</span>
		    </a>

        <span class="deletefile" data-key="{{ $q }}" data-post_id="{{ $post->id }}" data-locale="{{$locale}}" data-token="{{ csrf_token() }}" data-file="{{$item['file']}}" style="cursor:pointer">X</span>
        </div>
            @endforeach
            @else
            <div class="video-card">
                <input type="file" name="{{ $locale }}[{{ $key }}][]">
                <button
                    class="btn btn-danger waves-effect waves-light mr-1 remove-video-card">{{ trans('admin.remove') }}</button>
            </div>
            @endif
        </div>
        <div class="hidden-video-card">
            <input type="file" name="{{ $locale }}[{{ $key }}][]">
            <button
                class="btn btn-danger waves-effect waves-light mr-1 remove-video-card">{{ trans('admin.remove') }}</button>
        </div>
    </div>
</div>
<script>
    $("body").on("click", ".deletefile", function(){

        var elem = $(this).closest('.dfie');
        var key = $(this).data("key");
        var post_id = $(this).data("post_id");
        var file = $(this).data("file");
        var TOKEN = $(this).data("token");
        var locale = $(this).data("locale");

        if (confirm("დოკუმენტის წაშლა!?")) {
            $.ajax({
                url: "file/"+key,
                type: 'delete',
                data: {_token: TOKEN, key: key, file: file, locale:locale, post_id:post_id},
                dataType: 'JSON',
                success: function(response) {
                    if(response.success){
                        elem.remove()
                    }
                }
            });
        }
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

