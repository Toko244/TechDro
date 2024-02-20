@extends('admin.layouts.app')

@push('name')
    {{ trans('admin.components') }}
@endpush

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card-box">
                <form action="/{{ app()->getLocale() }}/admin/component/{{ $component->id }}/edit" method="POST">
                    <div style="padding-top:20px">
                        <div class="form-group">
                            <label for="componentselect">{{ trans('admin.type_titles') }}</label>
                            @error('active')
                                <small
                                    style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.component_is_required') }}</small>
                            @enderror
                            <select class="form-control  @error('type') danger @enderror " name="type_id"
                                id="componentypeselect">
                                @foreach (componentsType() as $key => $type)
                                    @if ($type['type'] == $component->type_id)
                                        <option value="{{ $type['type'] }}" selected>
                                            {{ trans('componentTypes.' . $key) }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="type">{{ trans('admin.component_title') }}</label>

                            <div class="flex" style="display: flex;">
                                <select class="form-control  @error('parent_id') danger @enderror" id="titleselect">

                                    <option value="{{ $component->id }}" selected>
                                        {{ $component->name }}
                                    </option>

                                </select>

                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-lg-12 d-flex">
                                <div class="col-lg-5 form-check form-check-custom form-check-solid form-check-lg">
                                    <input class="form-check-input" type="radio" name="component_data_type" value="manual"
                                        id="component_data_type_manual"
                                        @if ($component->component_data_type == 'manual') checked @else disabled @endif>
                                    <label class="form-check-label fw-medium fs-3 text-gray-900"
                                        for="component_data_type_manual">
                                        {{ trans('admin.manual') }}
                                    </label>
                                </div>
                                <div class="col-lg-5 form-check form-check-custom form-check-solid form-check-lg">
                                    <input class="form-check-input" type="radio" name="component_data_type"
                                        value="connected" id="component_data_type_connected"
                                        @if ($component->component_data_type == 'connected') checked @else disabled @endif>
                                    <label class="form-check-label fw-medium fs-3 text-gray-900"
                                        for="component_data_type_connected">
                                        {{ trans('admin.Automatic') }}
                                    </label>
                                </div>

                            </div>
                        </div>
                        @if (isset($section))
                            <div class="form-group">
                                <label for="componentselect">{{ trans('admin.sections') }}</label>

                                <select class="form-control @error('type') danger @enderror" name="section_id"
                                    id="sectionselect">

                                    <option value="{{ $section->id ?? '' }}" id="sectionoption"
                                        data-section-type="{{ $section->type_id ?? '' }}">
                                        {{ $section->title ?? '' }}
                                    </option>

                                </select>
                            </div>
                        @endif
                        @if (!empty($selectOptions) && $component->component_data_type == 'connected')
                            <div class="form-group">
                                <div class="col-lg-12 d-flex">
                                    <div class="col-lg-5 form-check form-check-custom form-check-solid form-check-lg">
                                        <input class="form-check-input" type="radio" name="section_data_type_manual" value="manual"
                                            id="section_data_type_manual"
                                            @if ($component->section_data_type == 'manual') checked @else disabled @endif>
                                        <label class="form-check-label fw-medium fs-3 text-gray-900"
                                            for="section_data_type_manual">
                                            {{ trans('admin.manual') }}
                                        </label>
                                    </div>
                                    <div class="col-lg-5 form-check form-check-custom form-check-solid form-check-lg">
                                        <input class="form-check-input" type="radio" name="section_data_type_connected"
                                            value="connected" id="section_data_type_connected"
                                            @if ($component->section_data_type == 'automate') checked @else disabled @endif>
                                        <label class="form-check-label fw-medium fs-3 text-gray-900"
                                            for="section_data_type_connected">
                                            {{ trans('admin.Automatic') }}
                                        </label>
                                    </div>

                                </div>
                            </div>
                            @if ($component->section_data_type == 'manual')
                                <div class="form-group">
                                    <label for="postselect">{{ trans('admin.posts') }}</label>
                                    <select class="form-control select2 @error('post_id') danger @enderror" name="post_id[]"
                                        id="postselect" multiple>
                                        @foreach ($selectOptions as $option)
                                            <option value="{{ $option['value'] }}"
                                                @if ($option['selected']) selected @endif>
                                                {{ $option['text'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif
                        @endif
                    </div>
                    @csrf
                    <ul class="nav nav-tabs">
                        @foreach (config('app.locales') as $locale)
                            <li class="nav-item">
                                <a href="#locale-{{ $locale }}" data-toggle="tab" aria-expanded="false"
                                    class="nav-link @if ($locale == app()->getLocale()) active @endif">
                                    <span class="d-none d-sm-block">{{ trans('admin.locale_' . $locale) }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content">
                        {{-- {{ dd($component) }} --}}
                        @foreach (config('app.locales') as $locale)
                            <div role="tabpanel" class="tab-pane fade @if ($locale == app()->getLocale()) active show @endif"
                                id="locale-{{ $locale }}">

                                <div class="form-group" id="addPageFormGroup">
                                    <label for="{{ $locale }}-title">{{ trans('admin.title') }}</label>
                                    @error('name')
                                        <small
                                            style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.title_is_required') }}</small>
                                    @enderror
                                    <input type="text" name="{{ $locale }}[title]" parsley-trigger="change"
                                        value="{{ $component->translate($locale)->title ?? '' }}"
                                        class="@error('title') danger @enderror form-control inputparsley"
                                        onchange="myFunction()" id="{{ $locale }}-title">
                                </div>

                                @error('active')
                                    <small
                                        style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.title_is_required') }}</small>
                                @enderror
                                <br>
                                <input type="hidden" name="{{ $locale }}[active]" value="0" />
                                <input type="checkbox" name="{{ $locale }}[active]"
                                    id="{{ $locale }}-active" checked value="1" data-plugin="switchery"
                                    data-color="#3bafda" />
                            </div>
                        @endforeach
                        <div class="form-group text-right mb-0">
                            <button class="btn btn-primary waves-effect waves-light mr-1 save-component-fields"
                                type="submit" name="save">
                                {{ trans('admin.save') }}
                            </button>
                        </div>
                    </div>


            </div>
            <input type="hidden" name="section_id" value="{{ $section->id ?? '' }}">
            <input type="hidden" name="name" value="{{ $component->name }}">



            </form>
        </div>
    </div>
    </div>
@endsection

@push('styles')
    <link href="{{ asset('/admin/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Plugins css -->
    <link href="{{ asset('/admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" />
    <link href="{{ asset('/admin/libs/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('/admin/libs/multiselect/multi-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/admin/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/admin/libs/switchery/switchery.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('/admin/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/libs/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">


    <style>
        .danger {
            border: 1px solid rgb(239, 83, 80) !important;
        }

        .imagePreview {
            margin-top: 10px;
            max-height: 200px;
            max-width: 200px;
            height: auto;
            box-sizing: border-box;
            border-style: solid;
            border-radius: 2%;
            position: relative;
            padding: 5px;
        }

        .deletefile {
            position: absolute;
            top: 0;
            right: -30px;
            color: red;
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-size: 15px;
        }

        .imagePreview img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 2%;
            box-sizing: border-box;
            object-fit: cover;
        }

        .deletefile:hover {
            color: darkred;
        }

        .danger {
            border: 1px solid rgb(239, 83, 80) !important;
        }
    </style>
@endpush

@push('scripts')
    <!-- Validation js (Parsleyjs) -->
    <script src="{{ asset('admin/libs/parsleyjs/parsley.min.js') }}"></script>

    <!-- validation init -->
    <script src="{{ asset('admin/js/pages/form-validation.init.js') }}"></script>


    <!-- init js -->
    <script src="{{ asset('admin/js/pages/form-editor.init.js') }}"></script>


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
    <script>
        $(document).ready(function() {
            $('.save-btn-component').click(function(event) {
                event.preventDefault(); // Prevent the default form submission behavior

                // Extract the values from the form
                var name = $('input[name="name"]').val();
                var type_id = $('#componentselect').val();
                var type = $('#componentselect option:selected').text();
                var section_id = $('#sectionselect').val();
                var section = $('#sectionselect option:selected').text();

                // Assign the extracted values to specific elements on the page
                $('#titleselect').html('<option value="' + name +
                    '" selected>' + name + '</option>');
                $('#componentypeselect').html('<option value="' + type_id +
                    '" selected>' + type + '</option>');

                // Close the modal
                $('#newComponentModal').modal('hide');
            });
        });
    </script>
    <script>
        $("body").on("click", ".deletefile", function(e) {
            e.preventDefault();
            var elem = $(this).closest('.dfile');
            var que = $(this).data("id");
            var lang = $(this).data("lang");
            var Url = $(this).data('route');
            var TOKEN = $(this).data("token");
            if (confirm("დოკუმენტის წაშლა!?")) {
                $.ajax({
                    url: Url,
                    type: 'POST',
                    data: {
                        _token: TOKEN,
                        que: que,
                        lang: lang
                    },
                    dataType: 'JSON',
                    success: function(response) {
                        console.log(response);
                        if (response.success) {
                            elem.remove()
                        }
                    },
                });
            }
        });
    </script>
@endpush
