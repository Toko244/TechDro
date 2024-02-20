@extends('admin.layouts.app')
@push('name')
    {{ trans('admin.components') }}
@endpush
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card-box">
                <form
                    data-action="@if (isset($section))
                                    /{{ app()->getLocale() }}/admin/componentable/create/{{ $section->id ?? '' }}/?section_id={{ $section->id }}
                                 @else
                                     {{ route('post.componentable.store', [app()->getLocale(), $post->id]) }}
                                 @endif"
                    method="POST" data-id="{{ $Id }}">
                    <h4 class="header-title mt-0 mb-3">{{ trans('admin.add_component') }}</h4>

                    <div style="padding-top:20px">
                        <div class="form-group">
                            <label data-icon="-" for="componentselect">{{ trans('admin.type_titles') }}</label>
                            @error('active')
                                <small
                                    style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.component_is_required') }}</small>
                            @enderror
                            <select class="form-control componentGroup @error('type') danger @enderror" name="component_id"
                                onchange="showInputFields(this)" id="componentselect">
                                <option value="">{{ trans('admin.choose_component') }}</option>
                                @foreach (componentsType() as $key => $type)
                                    <option value="{{ $type['id'] }}"
                                        data-sectionType="{{ isset($type['sectionTypes']['id']) ? $type['sectionTypes']['id'] : '' }}"
                                        data-section="{{ $type['section'] }}">
                                        {{ trans('componentTypes.' . $key) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="type">{{ trans('admin.component_title') }}</label>
                            <div class="flex" style="display: flex;">
                                <select class="form-control @error('component_id') danger @enderror" id="titleselect"
                                    name="component_id">
                                    <option value="" selected>{{ trans('admin.choose_component') }}</option>
                                </select>
                            </div>
                        </div>
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
                        @foreach (config('app.locales') as $locale)
                            <div role="tabpanel" class="tab-pane fade @if ($locale == app()->getLocale()) active show @endif"
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

                    @if (isset($post))
                        <input type="hidden" name="post_id" value="{{ $Id }}">
                    @else
                        <input type="hidden" name="section_id" value="{{ $Id }}">
                    @endif


                    <div class="form-group text-right mb-0">
                        <button class="btn btn-primary waves-effect waves-light mr-1 save-component-fields" type="submit"
                            name="save">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

    <!-- Add this script in your HTML file -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var form = document.querySelector(
                'form[data-action="/{{ app()->getLocale() }}/admin/componentable/create"]');
            var saveButton = document.getElementById('saveButton');

            form.addEventListener('submit', function(event) {
                // Check if required fields are set
                if (!checkRequiredFields()) {
                    // Prevent the form from being submitted
                    event.preventDefault();
                }
            });

            function checkRequiredFields() {
                var nameInput = document.querySelector('input[name="name"]');
                var typeSelect = document.getElementById('componentselect');
                var requiredFieldsSet = true;

                // Check name field
                if (nameInput.value.trim() === '') {
                    requiredFieldsSet = false;
                }

                // Check type field
                if (typeSelect.value === '') {
                    requiredFieldsSet = false;
                }

                // Check section field
                if (sectionSelect && sectionSelect.value === '' && sectionSelect.style.display !== 'none') {
                    requiredFieldsSet = false;
                }

                // Check post field
                if (postSelect && postSelect.value === '' && postSelect.style.display !== 'none') {
                    requiredFieldsSet = false;
                }

                // Enable or disable the save button based on required fields
                saveButton.disabled = !requiredFieldsSet;

                return requiredFieldsSet;
            }

            // Attach event listeners to the relevant inputs/selects for real-time validation
            form.addEventListener('input', function() {
                checkRequiredFields();
            });
        });
    </script>
    <!-- Add this script in your blade file -->
    <script>
        $(document).ready(function() {
            // Cache the titleselect element
            var titleSelect = $('#titleselect');

            // Get the selected components from Blade and convert them to JSON
            var components = @json($components);

            // Handle change event on componentselect
            $('.componentGroup').on('change', function() {
                // Clear existing options
                titleSelect.empty();

                // Get the selected type_id
                var selectedTypeId = $(this).val();
                console.log('Selected Type ID:', selectedTypeId);

                // Filter components based on the selected type_id
                var filteredComponents = components.filter(function(component) {
                    return component.type_id == selectedTypeId;
                });
                console.log('Filtered Components:', filteredComponents);

                // Add default option
                titleSelect.append(
                    '<option value="" selected>{{ trans('admin.choose_component') }}</option>');

                // Add options for filtered components
                $.each(filteredComponents, function(index, component) {
                    titleSelect.append('<option value="' + component.id + '">' + component.name +
                        '</option>');
                });
            });
        });
    </script>


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
        function showInputFields(selectElement) {
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
        var componentGroup = document.getElementsByClassName("componentGroup")[0];

        componentGroup.addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var isection = selectedOption.getAttribute('data-section') === '1';

            var sectionGroup = document.getElementById('sectionGroup');
            var sectionConection = document.getElementById('radioFormGroup');
            if (isection) {
                sectionGroup.style.display = 'block';
                sectionConection.style.display = 'block';
            } else {
                sectionGroup.style.display = 'none';
                sectionConection.style.display = 'none';
            }
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

    <script>
        document.getElementById('componentselect').addEventListener('change', function() {
            // Get the selected option
            var selectedOption = this.options[this.selectedIndex];

            // Get the type_id and sectionTypes->id values
            var typeId = selectedOption.value;
            var sectionTypeId = selectedOption.getAttribute('data-sectionType');

            // Filter sections based on type_id and sectionTypeId
            var sections = document.querySelectorAll('#sectionselect option');
            sections.forEach(function(section) {
                var sectionType = section.getAttribute('data-section-type');

                // Show/hide sections based on the condition
                if (sectionType == sectionTypeId || sectionType == "") {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });
        });
        document.getElementById('section_data_type_manual').addEventListener('change', function() {
            var isManualSelected = this.checked;

            // Show/hide the post group based on the manual selection
            var postGroup = document.getElementById('postGroup');
            if (isManualSelected) {
                postGroup.style.display = 'block';
            } else {
                postGroup.style.display = 'none';
            }
        });

        document.getElementById('section_data_type_automate').addEventListener('change', function() {
            var isAutomaticSelected = this.checked;

            // Show/hide the post group based on the automatic selection
            var postGroup = document.getElementById('postGroup');
            if (isAutomaticSelected) {
                postGroup.style.display = 'none';
            } else {
                postGroup.style.display = 'block';
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.save-component-fields').click(function(event) {
                var form = $(this).closest('form');
                var url = form.attr('data-action');
                var locale = $('html').attr('lang');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                // $.ajax({
                //     type: 'POST',
                //     url: url,
                //     data: new FormData(form[0]),
                //     contentType: false,
                //     processData: false,
                //     success: function(response) {
                //         console.log(response);
                //         if (response.errors) {
                //             console.error('Validation Errors:', response.errors);
                //             // Handle validation errors here
                //         } else {
                //             // Check if a redirect URL is provided in the response
                //             if (response.redirect_url) {
                //                 // Redirect to the specified URL
                //                 window.location.href = response.redirect_url + window.location
                //                     .search;
                //             } else {
                //                 // Handle other success scenarios
                //                 console.log('No redirect URL provided');
                //             }
                //         }
                //     },
                //     error: function(error) {
                //         console.error('Error:', error);
                //     }
                // });
            });
        });
    </script>
@endpush
