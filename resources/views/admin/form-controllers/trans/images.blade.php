<div class="form-group mt-20">
    <label>{{ trans('admin.' . $key) }}</label> <br>
    <input type="file" name="{{ $locale }}[files][{{ $key }}][]" multiple>
    @if (isset($post) && isset($post->translate($locale)['files']['images']))
        <div class="upload-component">
            <ul>
                @foreach ($post->translate($locale)['files']['images'] as $fileInfo)
                    @if ($fileInfo != '')
                        <li data-image-id="{{ $fileInfo['id'] }}">
                            <img src="{{ '/' . config('config.image_path') . config('config.thumb_path') . $fileInfo['file_name'] ?? '' }}"
                                class="slide_image">
                            <button class="delete-image" data-img-id="{{ $fileInfo['id'] }}" data-id="{{ $post->id }}"
                                data-file="{{ $fileInfo['file_name'] }}" data-token="{{ csrf_token() }}"
                                data-lang="{{ $locale }}"
                                data-route="{{ route('delete-image-multiple', [app()->getLocale(), $post->id ?? '']) }}">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    @endif
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $('.delete-image').on('click', function(e) {
            e.preventDefault();
            const id = $(this).data('id');
            const imageName = $(this).data('file');
            const Url = $(this).data('route');
            const TOKEN = $(this).data('token');
            const image_id = $(this).data('img-id');
            const lang = $(this).data('lang');
            const liElement = $('li[data-image-id="' + image_id +
                '"]'); // Find the <li> by data attribute

            if (confirm("დოკუმენტის წაშლა!?")) {
                $.ajax({
                    url: Url,
                    method: 'DELETE',
                    data: {
                        file: imageName,
                        image_id: image_id,
                        id: id,
                        _token: TOKEN,
                        lang: lang
                    },
                    success: function(response) {
                        console.log(response);
                        // Handle success, remove the image and related elements from the DOM
                        liElement.remove(); // Remove the <li> with the specific image ID
                    },
                    error: function(error) {
                        console.error('Error deleting image:', error);
                    }
                });
            }
        });
    });
</script>
<style>
    .delete-image {
        top: 0;
        right: -30px;
        color: red;
        background-color: transparent;
        border: none;
        cursor: pointer;
        font-size: 15px;
    }

    .upload-component {
        width: 100%;
        padding: 0.5% 0.5%;
        border: 1px dashed #666666;
        min-height: 100px;
        margin-top: 10px;
    }

    .upload-component.active {
        border-color: red;
    }

    .upload-component ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .upload-component li {
        display: inline-block;
        padding: 4px;
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        transition: border 0.2s ease-in-out;
        position: relative;
        vertical-align: top;
        position: relative;
        width: 10%;
        margin: 0.5%;
    }

    .upload-component li.active {
        border-color: red;
    }

    .upload-component li .close-it {
        background-color: #666666;
        position: absolute;
        line-height: 30px;
        width: 30px;
        border-radius: 15px;
        cursor: pointer;
        text-align: center;
        top: -10px;
        right: -10px;
    }

    .upload-component li .close-it::before {
        content: "X";
        color: #ffffff;
    }

    .upload-component li img {
        width: 100%;
    }

    .upload-component li.uploading {
        height: 0;
        padding-top: 0;
        padding-bottom: 10%;
        padding-bottom: calc(10% - 2px);
    }

    .upload-component li .progress-wrap {
        width: 100%;
        position: absolute;
        height: 20px;
        margin: auto;
        top: 0;
        bottom: 0;
        left: 0;
        padding-left: 10px;
        padding-right: 10px;
    }

    .upload-component-gallery {
        width: 100%;
        padding: 0.5% 0.5%;
        border: 1px dashed #666666;
        min-height: 100px;
    }

    .upload-component-gallery.active {
        border-color: red;
    }

    .upload-component-gallery ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .upload-component-gallery li {
        display: inline-block;
        padding: 4px;
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        transition: border 0.2s ease-in-out;
        position: relative;
        vertical-align: top;
        position: relative;
        width: 100%;
        margin: 0.5%;
    }

    .upload-component-gallery li.active {
        border-color: red;
    }

    .upload-component-gallery li .close-it {
        background-color: #666666;
        position: absolute;
        line-height: 30px;
        width: 30px;
        border-radius: 15px;
        cursor: pointer;
        text-align: center;
        top: -10px;
        right: -10px;
    }

    .upload-component-gallery li .close-it::before {
        content: "X";
        color: #ffffff;
    }

    .upload-component-gallery li img {
        width: 30%;
        float: left;
    }

    .upload-component-gallery li textarea.form-control {
        float: right;
        width: 65%;
        height: 200px;
        margin-top: 20px;
    }

    .upload-component-gallery li.uploading {
        height: 0;
        padding-top: 0;
        padding-bottom: 10%;
        padding-bottom: calc(10% - 2px);
    }

    .upload-component-gallery li .progress-wrap {
        width: 100%;
        position: absolute;
        height: 20px;
        margin: auto;
        top: 0;
        bottom: 0;
        left: 0;
        padding-left: 10px;
        padding-right: 10px;
    }

    .delete-image:hover {
        color: darkred;
    }
</style>
