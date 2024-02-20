<div class="form-group mt-20">
    <label class="radiocontrol-label">{{trans('admin.please_select_component_style')}}: </label>
    <div>
    <input type="radio" id="text_image_right" name="component_style" value="text_component_image_right" @if(isset($post) && isset($post->component_style) && ($post->component_style == 'text_component_image_right')) checked @endif>
    <label for="text_image_right">{{trans('admin.text_image_right')}}</label><br>
    <input type="radio" id="text_image_left" name="component_style" value="text_component_image_left" @if(isset($post) && isset($post->component_style) && ($post->component_style == 'text_component_image_left')) checked @endif>
    <label for="text_image_left">{{trans('admin.text_image_left')}}</label><br>
    <input type="radio" id="text_image_bottom" name="component_style" value="text_component_image_bottom" @if(isset($post) && isset($post->component_style) && ($post->component_style == 'text_component_image_bottom')) checked @endif>
    <label for="text_image_bottom">{{trans('admin.text_image_bottom')}}</label><br>
    <input type="radio" id="text_video_left" name="component_style" value="text_component_video" @if(isset($post) && isset($post->component_style) && ($post->component_style == 'text_component_video')) checked @endif>
    <label for="text_video_left">{{trans('admin.text_video_left')}}</label>
    </div>
</div>
