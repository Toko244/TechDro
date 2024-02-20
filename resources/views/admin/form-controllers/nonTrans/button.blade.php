<div class="form-group">
    {{ Form::label(trans('admin.' . $key), null, ['class' => 'control-label']) }}
    <div id="pinContainer">
        {{-- Loop through existing pins and display them --}}
        @if (isset($post) && isset($post['additional']['pin']))
            @foreach ($post['additional']['pin'] as $pinId => $pin)
                <div class="pin">
                    <div class="form-group">
                        <label for="{{ $pinId }}Latitude">Latitude</label>
                        <input type="text" class="form-control" name="pin[{{ $pinId }}][latitude]"
                            value="{{ $pin['latitude'] }}" required>
                    </div>
                    <div class="form-group">
                        <label for="{{ $pinId }}Longitude">Longitude</label>
                        <input type="text" class="form-control" name="pin[{{ $pinId }}][longitude]"
                            value="{{ $pin['longitude'] }}" required>
                    </div>
                    <button type="button" class="btn btn-danger deletePinBtn" data-token="{{ csrf_token() }}"
                        data-route="/{{ app()->getlocale() }}/admin/section/posts/delete-pin/{{ $post->id }}"
                        data-pin-id="{{ $pinId }}">Delete
                        Pin</button>
                </div>
            @endforeach
        @endif
    </div>
    {{ Form::button('Add Pin', ['class' => 'btn btn-primary', 'id' => 'addPinBtn']) }}
</div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        let pinCounter = 1;

        $('#addPinBtn').on('click', function() {
            addPin();
        });

        function addPin() {
            var pinId = pinCounter; // Use the current pinCounter as the ID
            var newPinHtml = `
            <div class="pin" id="pin-${pinId}">
                <div class="form-group">
                    <label for="pin-${pinId}Latitude">Latitude</label>
                    <input type="text" class="form-control" name="pin[${pinId}][latitude]" required>
                </div>
                <div class="form-group">
                    <label for="pin-${pinId}Longitude">Longitude</label>
                    <input type="text" class="form-control" name="pin[${pinId}][longitude]" required>
                </div>

            </div>
        `;
            $('#pinContainer').append(newPinHtml);
            pinCounter++;
        }

        // Handle deletePin button click using event delegation
        $('#pinContainer').on('click', '.deletePinBtn', function(e) {
            e.preventDefault();
            var pinId = $(this).data('pin-id');
            var Url = $(this).data('route');
            var TOKEN = $(this).data("token");
            var deleteButton = $(this); // Store reference to the delete button

            // Make an Ajax request to delete the pin in the database
            $.ajax({
                type: 'POST',
                url: Url, // Change this to the actual route URL
                data: {
                    pinId: pinId,
                    _token: TOKEN,
                },
                success: function(response) {
                    // Remove the pin element from the DOM if the deletion was successful
                    if (response.success) {
                        deleteButton.parents('.pin').remove();
                    } else {
                        console.error('Error deleting pin.');
                    }
                },
                error: function() {
                    console.error('Error making Ajax request.');
                }
            });
        });
    });
</script>
