@extends('admin.layouts.app')
@push('name')
@endpush
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">{{ trans('admin.Form_edit') }}</h4>
                    <form class="forms-sample validate-form"
                        action="/{{ app()->getLocale() }}/admin/forms/update/{{ $form->id }}" method="POST">
                        @csrf
                        @method('PUT')
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
                                <div role="tabpanel"
                                    class="tab-pane fade @if ($locale == app()->getLocale()) active show @endif "
                                    id="locale-{{ $locale }}">

                                    <div class="form-group">
                                        <label data-icon="-"
                                            for="{{ $locale }}-title">{{ trans('admin.title') }}</label>
                                        @error('name')
                                            <small
                                                style="display:block; color:rgb(239, 83, 80)">{{ trans('admin.title_is_required') }}</small>
                                        @enderror
                                        <input type="text" name="{{ $locale }}[title]" parsley-trigger="change"
                                            class="@error('title') danger @enderror form-control"
                                            id="{{ $locale }}-title"
                                            value="{{ $form->translate($locale)->title ?? '' }}" Required>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                        <div class="dd">

                            @include('admin.forms.includes.forms', [
                                'label' => trans('admin.add'),
                                'fields' => $form->fields,
                            ])

                        </div>
                        <div class="save mt-5">
                            <button type="submit" class="btn btn-primary me-2 btn-save-nestable"><i
                                    class="mdi mdi-content-save"></i> {{ trans('admin.save') }}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.js"
            integrity="sha512-7bS2beHr26eBtIOb/82sgllyFc1qMsDcOOkGK3NLrZ34yTbZX8uJi5sE0NNDYFNflwx1TtnDKkEq+k2DCGfb5w=="
            crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.css"
            integrity="sha512-WLnZn2zeYB0crLeiqeyqmdh7tqN5UfBiJv9cYWL9nkUoAUMG5flJnjWGeeKIs8eqy8nMGGbMvDdpwKajJAWZ3Q=="
            crossorigin="anonymous" />
        <style>
            .dd {
                max-width: none;
            }

            [data-icon]:before {
                float: right;
                color: red;
                font-size: 24px;
            }

            .errtext {
                color: red;
            }
        </style>

        <script type="text/javascript">
            $(window).ready(function() {


                $('.dd').nestable({

                    maxDepth: 1
                });
                $('.btn-save-nestable').click(function() {
                    var $this = $(this);
                    $.post("/{{ app()->getLocale() }}/admin/forms/arrange", {
                        orderArr: $('.dd').nestable('serialize'),
                        '_token': "{{ csrf_token() }}"
                    }, function(data) {
                        // $this.button('reset');
                    });

                });
                $('.glyphicon').mousedown(function(e) {
                    e.stopPropagation();
                });
            });
        </script>
        <script>
            $('.validate-form').submit(function(e) {
                if ($(this).find('.warning').length !== 0) {
                    e.preventDefault();
                    var $container = $("html,body");
                    var $scrollTo = $('.warning');

                    $container.animate({
                        scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop(),
                        scrollLeft: 0
                    }, 300);
                }
            });
        </script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script>
            $("#accordion").sortable();
            $('#add').formFields();
            $("#accordion").disableSelection();
        </script>
    @endpush
@endsection
