<div class="form-group">
	{{ Form::label(trans('admin.'.$key), null, ['class' => 'control-label']) }} 
	<select name="{{ $key }}" class="form-control select2" id="">
		<option>...</option>
		@foreach (getMunicipality()->posts as $item)
		<option value="{{$item->id}}"  @if(isset($post->municipality) && ($item->id == $post->municipality)) selected @endif>{{$item->translate(app()->getlocale())->title}}</option>
		@endforeach
	</select>
</div>