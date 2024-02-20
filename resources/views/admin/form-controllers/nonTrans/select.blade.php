
{{-- {{dd(sections()['selected_posts'])}} --}}
{{-- @foreach (sections()['sections'] as $section)
{{dd($section->posts[0]->id)}}
@endforeach --}}
{{-- @if(sections()['selected_posts'] = $post->id)
{{dd($post->id)}}
@endif --}}
<div class="form-group">
	{{ Form::label(trans('admin.'.$key), null, ['class' => 'control-label']) }}
	<select  multiple="multiple" multiple class="form-control select2 select2-multiple  @error('type') danger @enderror " name="{{ $key }}[]" id="{{ $key }}">
		@foreach (sections()['sections'] as $section)
			<option value="{{$section->id}}" @if(isset($sections)) {{in_array($section->id, $sections) ? 'selected' : ''}} @endif >{{ $section->title }}</option>
		@endforeach
	</select>
</div>
