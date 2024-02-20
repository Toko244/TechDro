@extends('admin.layouts.app')
@push('name')
    {{ trans('admin.sections') }}
@endpush
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card-box">
                <h4 class="header-title mt-0 mb-3">{{ trans('admin.edit_section') }}</h4>
                <form action="/{{ app()->getLocale() }}/admin/sections/edit/{{ $section->id }}" method="post"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    <ul class="nav nav-tabs">
                        @foreach (config('app.locales') as $locale)
                            <li class="nav-item ">
                                <a href="#locale-{{ $locale }}" data-toggle="tab" aria-expanded="false"
                                    class="nav-link @if ($locale == app()->getLocale()) active @endif">
                                    <span class="d-none d-sm-block">{{ trans('admin.locale_' . $locale) }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content">
                        @foreach (config('app.locales') as $locale)
                            <div role="tabpanel" class="tab-pane fade @if ($locale == app()->getLocale()) active show @endif "
                                id="locale-{{ $locale }}">

                                <div class="form-group">
                                    <label for="{{ $locale }}-title">{{ trans('admin.title') }}</label>
                                    @error('name')
                                        <small
                                            style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.title_is_required') }}</small>
                                    @enderror
                                    <input type="text" name="{{ $locale }}[title]"
                                        value="{{ $section->translate($locale)->title ?? '' }}" parsley-trigger="change"
                                        class="@error('title') danger @enderror form-control"
                                        id="{{ $locale }}-title" Required>
                                </div>
                                <div class="form-group">
                                    <label for="{{ $locale }}-slug">{{ trans('admin.slug') }}</label>
                                    @error('slug')
                                        <small
                                            style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.slug_is_required') }}</small>
                                    @enderror
                                    <input type="text" name="{{ $locale }}[slug]" parsley-trigger="change"
                                        class="@error('slug') danger @enderror form-control"
                                        value="{{ $section->slug($locale) }}" id="{{ $locale }}-slug" Required>
                                </div>
                                <div class="form-group">
                                    <label for="{{ $locale }}-desc">{{ trans('admin.desc') }}</label>
                                    <textarea id="{{ $locale }}-desc" name="{{ $locale }}[desc]" class="form-control ckeditor">{{ $section->translate($locale)->desc ?? '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="{{ $locale }}-active">{{ trans('admin.active') }}</label>
                                    @error('active')
                                        <small
                                            style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.title_is_required') }}</small>
                                    @enderror
                                    <br>
                                    <input type="hidden" name="{{ $locale }}[active]" value="0" />

                                    <input type="checkbox" name="{{ $locale }}[active]"
                                        id="{{ $locale }}-active"
                                        @if ($section->translate($locale) !== null) {{ $section->translate($locale)->active == 1 ? 'checked' : '' }} @endif
                                        value="1" data-plugin="switchery" data-color="#3bafda" />
                                </div>


                            </div>
                        @endforeach
                    </div>
                    <div style="padding-top:20px">


                        <div class="form-group">
                            <label for="type">{{ trans('admin.type') }}</label>
                            @error('active')
                                <small
                                    style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.type_is_required') }}</small>
                            @enderror
                            <select class="form-control  @error('type') danger @enderror " name="type_id"
                                id="typeselect">

                                @foreach ($sectionTypes as $key => $type)
                                    <option value="{{ $type['id'] }}"
                                        {{ $type['id'] == $section->type_id ? 'selected' : '' }}>
                                        {{ trans('sectionTypes.' . $key) }}</option>
                                @endforeach
                            </select>
                        </div>



                        <div class="form-group">
                            <label for="parent">{{ trans('admin.parent') }}</label>
                            <select class="form-control" name="parent_id" id="parent">

                                <option value="">{{ trans('admin.parent') }}</option>
                                @foreach ($sections as $key => $sec)
                                    <option value="{{ $sec->id }}"
                                        {{ $sec->id == $section->parent_id ? 'selected' : '' }}>{{ $sec->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        @foreach (menuTypes() as $key => $menuType)
                            <div class="checkbox checkbox-primary">
                                <input type="checkbox" name="menu_types[]"
                                    @if (isMenuType($section, $menuType)) checked @endif id="type_{{ $key }}"
                                    value="{{ $key }}">
                                <label for="type_{{ $key }}">
                                    {{ trans('menuTypes.' . $menuType) }}
                                </label>
                            </div>
                        @endforeach

                    </div>
                    <div class="form-group text-right mb-0">
                        <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                            {{ trans('admin.save') }}
                        </button>
                    </div>

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
@endpush
