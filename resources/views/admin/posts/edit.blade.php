@extends('admin.layouts.app')

@push('name')
    @isset($section)
    {{ $section->title }}
    @endisset
@endpush

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card-box">






            <h4 class="header-title mt-0 mb-3">{{ trans('admin.edit_post') }}</h4>
            {!! Form::model($post, ['route' => ['post.update', app()->getLocale(), $post->id], "enctype" => "multipart/form-data"]) !!}
                @include('admin.posts.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

@push('styles')
    <link href="{{ asset('/admin/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Plugins css -->
    <link href="{{ asset('/admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" />
    <link href="{{ asset('/admin/libs/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('/admin/libs/multiselect/multi-select.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('/admin/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/admin/libs/switchery/switchery.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('/admin/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/libs/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">




    <style>
        .danger{
            border: 1px solid rgb(239, 83, 80) !important;
        }

        .ck.ck-editor__main>.ck-editor__editable{
            min-height: 200px
        }
    </style>
@endpush

@push('scripts')

    <!-- Validation js (Parsleyjs) -->
    <script src="{{ asset('admin/libs/parsleyjs/parsley.min.js') }}"></script>

    <!-- validation init -->
    <script src="{{ asset('admin/js/pages/form-validation.init.js') }}"></script>


    <!-- init js -->
    {{-- <script src="{{ asset('admin/js/pages/form-editor.init.js') }}"></script> --}}


    <!-- Plugins Js -->
    <script src="{{ asset('/admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/multiselect/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('/admin/libs/jquery-quicksearch/jquery.quicksearch.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/select2/select2.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/jquery-mask-plugin/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('/admin/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/admin/libs/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('/admin/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>



    <!-- Init js-->
    <script src="{{ asset('/admin/js/pages/form-advanced.init.js') }}"></script>

    <script>
        $(document).ready(function() {
            $(document).on('click', 'button[name="save"]', function() {
                var danj = $(".danger");
                for (var i = 0; i < danj.length; i++) {
                    var cl3s = danj[i].classList;
                    cl3s.remove("danger");
                }
            });
            $.listen('parsley:field:error', function(parsleyField) {
                var ewes = $("input[name='" + parsleyField.$element.attr('name') + "']").closest(
                    '.tab-pane').attr('id');
                var els = document.querySelectorAll("a[href='" + '#' + ewes + "']");
                for (var i = 0; i < els.length; i++) {
                    var classes = els[i].classList;
                    classes.add("danger");
                }
            });
            $("input").on("input", function() {
                if ($(this).val().length > 0) {
                    var ewes = $(this).closest('.tab-pane').attr('id');
                    var els = document.querySelectorAll("a[href='" + '#' + ewes + "']");
                    for (var i = 0; i < els.length; i++) {
                        var classes = els[i].classList;
                        classes.remove("danger");
                    }
                }
            });
        });
    </script>
@endpush
