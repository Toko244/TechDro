@extends('admin.layouts.app')
@push('name')
    {{ trans('admin.components') }}
@endpush
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card-box">
                <form action="/{{ app()->getLocale() }}/admin/component/create" method="POST" enctype="multipart/form-data"
                    data-parsley-validate novalidate>
                    @csrf
                    <h4 class="header-title mt-0 mb-3">{{ trans('admin.add_component') }}</h4>
                    <div style="padding:20px">
                        <div class="form-group">
                            <label data-icon="-" for="name">{{ trans('admin.Name') }}</label>
                            @error('name')
                                <small style="display:block; color:rgb(239, 83, 80)">
                                    @if ($message == 'validation.unique')
                                        {{ trans('admin.name_should_be_unique') }}
                                    @else
                                        {{ $message }}
                                    @endif
                                </small>
                            @enderror
                            <input type="text" name="name" parsley-trigger="change"
                                class="@error('title') danger @enderror form-control unique-name inputparsley"
                                onchange="myFunction()" Required>
                            <div class="print-error-msg">
                                <ul></ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label data-icon="-" for="componentselect">{{ trans('admin.type_titles') }}</label>
                            @error('active')
                                <small
                                    style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.component_is_required') }}</small>
                            @enderror
                            <select class="form-control componentGroup @error('type') danger @enderror" name="type_id"
                                id="componentselect" onchange="showInputFields()">
                                <option value="">{{ trans('admin.choose_component') }}</option>
                                @foreach (componentsType() as $key => $type)
                                    <option value="{{ $type['id'] }}" data-manual="{{ $type['manual'] }}"
                                        data-sectionType="{{ isset($type['sectionTypes']['id']) ? $type['sectionTypes']['id'] : '' }}"
                                        data-section="{{ $type['section'] }}">
                                        {{ trans('componentTypes.' . $key) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" id="singleImageUploadFormGroup" style="display:none">
                            <label for="Image_Upload">{{ trans('admin.image_upload') }}</label>
                            <input type="file" name="image" class="form-control inputparsley">
                        </div>
                        <div class="form-group" id="componentDataSection">
                            <div class="col-lg-12 d-flex">
                                <div class="col-lg-5 form-check form-check-custom form-check-solid form-check-lg">
                                    <input class="form-check-input" type="radio" name="component_data_type" value="manual"
                                        id="component_data_type_manual" disabled>
                                    <label class="form-check-label fw-medium fs-3 text-gray-900"
                                        for="component_data_type_manual">
                                        {{ trans('admin.manual') }}
                                    </label>
                                </div>
                                <div class="col-lg-5 form-check form-check-custom form-check-solid form-check-lg">
                                    <input class="form-check-input" type="radio" name="component_data_type"
                                        value="connected" id="component_data_type_connected" disabled>

                                    <label class="form-check-label fw-medium fs-3 text-gray-900"
                                        for="component_data_type_connected">
                                        {{ trans('admin.Automatic') }}
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group" id="sectionGroup" style="display:none">
                            <label for="componentselect">{{ trans('admin.sections') }}</label>

                            <select class="form-control @error('type') danger @enderror" name="section_id"
                                id="sectionselect">

                                <option value="">{{ trans('admin.choose_section') }}</option>

                                @foreach ($sections as $key => $section)
                                    <option value="{{ $section->id }}" id="sectionoption"
                                        data-section-type="{{ $section->type_id }}">
                                        {{ $section->title ?? '' }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group" id="radioFormGroup" style="display: none;">
                            <div class="col-lg-12 d-flex">
                                <div class="col-lg-5 form-check form-check-custom form-check-solid form-check-lg">
                                    <input class="form-check-input" type="radio" name="section_data_type" value="manual"
                                        id="section_data_type_manual">
                                    <label class="form-check-label fw-medium fs-3 text-gray-900"
                                        for="section_data_type_manual">
                                        {{ trans('admin.manual') }}
                                    </label>
                                </div>
                                <div class="col-lg-5 form-check form-check-custom form-check-solid form-check-lg">
                                    <input class="form-check-input" type="radio" name="section_data_type" value="automate"
                                        id="section_data_type_automate">
                                    <label class="form-check-label fw-medium fs-3 text-gray-900"
                                        for="section_data_type_automate">
                                        {{ trans('admin.Automatic') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="postGroup" style="display: none;">
                            <label for="postselect">{{ trans('admin.posts') }}</label>
                            <select data-route="/{{ app()->getLocale() }}/admin/section/fetching-posts"
                                class="form-control select2 @error('post_id') danger @enderror" name="post_id[]"
                                id="postselect" multiple>

                                <!-- Populate the options dynamically based on the selected section -->
                            </select>
                        </div>
                    </div>
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
                        @foreach (config('app.locales') as $locale)
                            <div role="tabpanel"
                                class="tab-pane fade @if ($locale == app()->getLocale()) active show @endif"
                                id="locale-{{ $locale }}">

                                <div class="form-group">
                                    <label for="{{ $locale }}-title">{{ trans('admin.title') }}</label>
                                    <input type="text" name="{{ $locale }}[title]" parsley-trigger="change"
                                        class="@error('title') danger @enderror form-control inputparsley"
                                        id="{{ $locale }}-title">
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
                                        id="{{ $locale }}-active" checked value="1" data-plugin="switchery"
                                        data-color="#3bafda" />
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @if (isset($errorMessage))
                        <div class="alert alert-danger">
                            {{ $errorMessage }}
                        </div>
                    @endif
                    <div class="form-group text-right mb-0">
                        <button class="btn btn-primary waves-effect waves-light mr-1 save-component-fields" type="submit"
                            id="submit-button" name="save">
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

        [data-icon]:before {
            float: right;
            color: red;
            font-size: 24px;
        }
    </style>
@endpush

@push('scripts')
    <script>
        function showInputFields() {
            var selectElement = document.getElementById('componentselect');

            // Get the selected value
            var selectedValue = selectElement.value;

            // Loop through locales
            @foreach (config('app.locales') as $locale)
                var redirectFormGroup = document.getElementById('redirectFormGroup-{{ $locale }}');
                var addPageFormGroup = document.getElementById('addPageFormGroup-{{ $locale }}');
                var seeAllRedirectFormGroup = document.getElementById('seeAllRedirectFormGroup-{{ $locale }}');
                var singleImageUploadFormGroup = document.getElementById('singleImageUploadFormGroup');

                // Check if the selected value is 17, 7, 8, or 10
                if (selectedValue === '17') {
                    // Show the redirect form group and hide the addPage, seeAllRedirect, and singleImageUpload form groups
                    redirectFormGroup.style.display = 'block';
                    addPageFormGroup.style.display = 'none';
                    seeAllRedirectFormGroup.style.display = 'none';
                    singleImageUploadFormGroup.style.display = 'none';
                } else if (selectedValue === '7') {
                    // Show the addPage form group and hide the redirect, seeAllRedirect, and singleImageUpload form groups
                    redirectFormGroup.style.display = 'none';
                    addPageFormGroup.style.display = 'block';
                    seeAllRedirectFormGroup.style.display = 'none';
                    singleImageUploadFormGroup.style.display = 'none';
                } else if (selectedValue === '8') {
                    // Show the seeAllRedirect form group and hide the redirect, addPage, and singleImageUpload form groups
                    redirectFormGroup.style.display = 'none';
                    addPageFormGroup.style.display = 'none';
                    seeAllRedirectFormGroup.style.display = 'block';
                    singleImageUploadFormGroup.style.display = 'none';
                } else if (selectedValue === '10') {
                    // Show the singleImageUpload form group and hide the redirect, addPage, and seeAllRedirect form groups
                    redirectFormGroup.style.display = 'none';
                    addPageFormGroup.style.display = 'none';
                    seeAllRedirectFormGroup.style.display = 'none';
                    singleImageUploadFormGroup.style.display = 'block';
                } else {
                    // Hide all form groups
                    redirectFormGroup.style.display = 'none';
                    addPageFormGroup.style.display = 'none';
                    seeAllRedirectFormGroup.style.display = 'none';
                    singleImageUploadFormGroup.style.display = 'none';
                }
            @endforeach
        }
    </script>
    <script>
        $('.unique-name').on("blur", function() {
            console.log(this)
            const $input = $(this);
            const name = $input.val();
            var token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: 'POST',
                url: ("/{{ app()->getLocale() }}/admin/component/check-unique"),
                data: {
                    name: name,
                    _token: token,

                },
                success: function(data) {
                    console.log('ok')
                    $input.parent().find('.print-error-msg').html('').css('color', '');
                    const btn = $('#submit-button');
                    btn.css('pointer-events', 'initial');

                },
                error: function(data) {
                    console.log(data)
                    $input.parent().find('.print-error-msg').html(data.responseJSON.error).css('color',
                        'red');
                    const btn = $('#submit-button');
                    btn.css('pointer-events', 'none');
                }
            });
        });
    </script>
    <script>
        document.getElementById('componentselect').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var isManual = selectedOption.getAttribute('data-manual') === '1';
            if (isManual) {
                document.getElementById('componentDataSection').style.display = 'block';
                document.getElementById('component_data_type_manual').disabled = false;
                document.getElementById('component_data_type_connected').disabled = true;
                document.getElementById('component_data_type_manual').checked = true;
            } else {
                document.getElementById('componentDataSection').style.display = 'block';
                document.getElementById('component_data_type_manual').disabled = true;
                document.getElementById('component_data_type_connected').disabled = false;
                document.getElementById('component_data_type_connected').checked = true;
            }
        });
    </script>
    @include('admin.components.componentscript')
@endpush
