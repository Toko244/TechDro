@foreach($fields as $key => $f)
<li class="dd-item" data-id="{{ $f->id }}">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <div class="dd-handle">
                    <i class="mdi mdi-drag-variant"></i>
                </div>

                <a data-toggle="panel-{{ $f->id }}">
                    <span>{{ $f->translate()->title }}</span>

                </a>
                <a href="{{ route('forms.destroy.formField', [app()->getLocale(), $field->id]) }}"
                    onclick="return confirm('Do You Want To Delete This FormField?');" class="text-danger pull-right mdi mdi-delete">

                </a>
            </h4>
        </div>
        <div id="panel-{{ $f->id }}" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row form-group">
                    <input type="hidden" name="n_fields[{{ $f->id }}][id]" class="form-control name-field"
                        value="{{ $f->id }}">
                    <div class="col col-sm-6">
                        @foreach(config('app.locales') as $locale)
                        <div data-lang-show="#lang-{{ $locale }}">
                            <label>{{ trans('admin.title') }}</label>
                            <input type="text" name="n_fields[{{ $f->id }}][{{ $locale }}][form_title]"
                                class="form-control name-field" value="{{ $f->translate($locale)->title }}">
                        </div>
                        @endforeach
                    </div>

                    <div class="col col-sm-6">

                        <label>type</label>
                        <select class="form-control" name="n_fields[{{ $f->id }}][type_id]">
                            @foreach (config('field_types') as $key => $item)

                            <option value="{{ $key }}" {{ $key == $f->type ? 'selected' : '' }}>
                                {{ trans('admin.'.$item) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label class="middle" style="padding-right:20px">
                        <div class="switch small-switch">
                            <input type="hidden" name="n_fields[{{ $f->id }}][validation][required]" value="0">
                            <input type="checkbox" name="n_fields[{{ $f->id }}][validation][required]" value="1"
                                {{ $f->validation['required'] == 1 ? 'checked' : '' }}>
                            <label style="margin: 0">requierd</label>
                        </div>
                    </label>
                    {{-- <label class="middle" style="padding-right:20px">
                            <div class="switch small-switch">
                                <input type="hidden" name="n_fields[{{ $f->id }}][validation][small_screen]" value="0">
                    <input type="checkbox" name="n_fields[{{ $f->id }}][validation][small_screen]" value="1"
                        {{ $f->validation['small_screen'] == 1 ? 'checked' : '' }}>
                    <label>small size</label>
                </div>
                </label> --}}

            </div>

            @if ($f->data !== null)
            <div class="opts" data-prefix="n_fields[{{ $f->id }}]">
                <div class="panel panel-warning">
                    <div class="panel-body">
                        <div class="wrap">


                            @foreach ($f->data as $key => $item)


                            <div class="row">
                                <div class="col col-xs-6" style="padding-bottom:20px">
                                    @foreach(config('app.locales') as $locale)

                                    <label for="n_fields[{{ $f->id }}][options][{{ $key }}][{{ $locale }}][name]">
                                        {{ trans('admin.Options_Title_'. $locale) }} </label>
                                    <input name="n_fields[{{ $f->id }}][options][{{ $key }}][{{ $locale }}][name]"
                                        class="form-control" style="margin:0;" value="{{ $item[$locale]['name'] }}">
                                    @endforeach
                                </div>
                                <a class="glyphicon glyphicon-trash text-danger mdi mdi-delete">

                                </a>
                            </div>
                            @endforeach
                        </div>
                        <div class="text-right" style="padding-bottom:15px">
                            <button class="btn btn-warning" type="button">Add Answers</button>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    </div>


</li>

@endforeach
<style>
    .small-switch {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
    }

    .small-switch label {
        margin: 0;
    }

</style>
