@push('css')
<link rel="stylesheet" href="{{ asset('frontend/css/toastr.css') }}" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush


@push('js')
<script src="{{ asset('frontend/js/toastr.min.js') }}" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if (Session::has('success'))
    <script>
        toastr.success("{{ Session::get('success') }}")
    </script>
@elseif (!empty(Session::get('error')))
    <script>
        toastr.error("{{ Session::get('error') }}")
    </script>
@endif

@endpush