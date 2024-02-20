<ol class="dd-list">


        @foreach ($componentables as $component)
            <li class="dd-item sections-list-li" data-id="{{ $component->id }}">
                <div class="dd-handle">
                    {{ $component->component->name }} / {{ $component->component->type_name }}
                </div>
                <div class="change-icons">
                    <a href="/{{ app()->getLocale() }}/admin/componentPosts/{{ $component->component->id }}"
                        class="far fa-eye"></a>
                    <a href="/{{ app()->getLocale() }}/admin/component/{{ $component->component->id }}/edit"
                        class="fas fa-pencil-alt"></a>
                    <a href="{{ route('componanatable.destroy', [app()->getLocale(), $component->id]) }}"
                        onclick="return confirm_alert(this);" class="fas fa-trash-alt"></a>
                </div>
            </li>
            @if ($component->children->isNotEmpty())
                @include('admin.componentable.list-helper', ['componentables' => $component->children])
            @endif
        @endforeach

</ol>
<script>
    function confirm_alert(node) {
        return confirm("Do you want to delete this Section?");
    }
</script>
