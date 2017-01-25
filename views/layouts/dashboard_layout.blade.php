@extends('admin::layouts.app')

@section('main_content')
    <div class="main-wrapper">
        <div class="app header-fixed footer-fixed sidebar-fixed" id="app">
            @include('admin::layouts.common.db_header')

            @include('admin::layouts.common.db_sidebar')

            <article class="content">
                @yield('content')
            </article>

            @include('admin::layouts.common.db_footer')
        </div>
    </div>
@stop

@push('style')
    {!! Html::style(url('vendor/admin/css/db_custom.css')) !!}
@endpush

@push('scripts')
    {!! Html::script(url('vendor/admin/js/metismenu.2.0.3.js')) !!}
    {!! Html::script(url('vendor/admin/js/db_custom.js')) !!}
@endpush