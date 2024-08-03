@push('css')
<link rel="stylesheet" href="{{ asset('frontend/css/toastr.css') }}" />
@endpush


@push('js')
<script src="{{ asset('frontend/js/toastr.min.js') }}"></script>
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