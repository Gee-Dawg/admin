<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {!! Html::style(url('vendor/admin/css/font-awesome.min.css')) !!}
    {!! Html::style(url('vendor/admin/css/bootstrap.min.css')) !!}
    {!! Html::style(url('vendor/admin/css/toastr.css')) !!}
    {!! Html::style(url('vendor/admin/css/db_themes/app.css'), ['id' => 'theme-style']) !!}

    @stack('style')

    {!! Html::script(url('vendor/admin/js/jquery-1.12.3.js')) !!}
    {!! Html::script(url('vendor/admin/js/jquery-blockui.js')) !!}
    {!! Html::script(url('vendor/admin/js/bootstrap.min.js')) !!}
    {!! Html::script(url('vendor/admin/js/toastr.min.js')) !!}
    {!! Html::script(url('vendor/admin/js/custom.js')) !!}

    <!-- Scripts -->
    <script type="text/javascript">
        window.onbeforeunload = function(e)
        {
            //baseZ: 999999999
            $.blockUI({message: '<img src="{!! asset('vendor/admin/img/loader.gif') !!}">', css: {backgroundColor: 'transparent', border: 'none', cursor: 'wait'}, baseZ: 999999999});
        };

        $(document).ajaxStart(function()
        {
            $.blockUI({message: '<img src="{!! asset('vendor/admin/img/loader.gif') !!}">', css: {backgroundColor: 'transparent', border: 'none', cursor: 'wait'}, baseZ: 9999});
        }).ajaxStop(function()
        {
            $.unblockUI();
        });

        var base_url = "{!! url('') !!}";
        var _token = "{{ csrf_token() }}";

    </script>
</head>
<body>

    @yield('main_content')

    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="global_mdl">
        {{--global modal--}}
    </div>

    @stack('scripts')

    @if(Session::has('flash_error'))

        <script type="text/javascript">
            notify('error', '{!! Session::get('flash_error') !!}', '', 0);
        </script>

    @endif

    @if(Session::has('flash_success'))

        <script type="text/javascript">
            notify('success', '{!! Session::get('flash_success') !!}');
        </script>

    @endif

    @if(Session::has('flash_info'))

        <script type="text/javascript">
            notify('info', '{!! Session::get('flash_info') !!}', '', 0);
        </script>

    @endif

</body>
</html>
