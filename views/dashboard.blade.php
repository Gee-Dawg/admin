@extends('admin::layouts.dashboard_layout')

@section('content')
    Dashboard content here
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function()
        {
            notify('info', 'Hello and welcome to gndlovu admin panel.');
        });
    </script>
@endpush
