<ol class="dd-list">
    @foreach ($components as $component)
        <li class="dd-item sections-list-li" data-id="{{ $component->id }}">
            <div class="dd-handle">
                {{ $component->name }} / {{ trans('componentTypes.' . $component->type_name) }}
            </div>
            <div class="change-icons">
                @if (!in_array($component->type_id, [10, 3, 5, 7]))
                    <a href="/{{ app()->getLocale() }}/admin/componentPosts/{{ $component->id }}" class="far fa-eye"></a>
                @endif
                <a href="/{{ app()->getLocale() }}/admin/component/{{ $component->id }}/edit"
                    class="fas fa-pencil-alt"></a>
                <a href="/{{ app()->getLocale() }}/admin/component/{{ $component->id }}/destroy"
                    onclick="return confirm_alert(this);" class="fas fa-trash-alt"></a>

            </div>
        </li>
    @endforeach
</ol>

<script>
    function confirm_alert(node) {
        return confirm("Do you want to delete this Component?");
    }
</script>
