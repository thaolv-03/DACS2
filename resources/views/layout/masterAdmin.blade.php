<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/app-creative.min.css') }}" rel="stylesheet" type="text/css"/>
    @stack('css')
</head>

<body data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
@include('layout.sidebarAdmin');
<div class="wrapper">
    {{-- @include('clients.components.header') --}}
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    @if ($errors->any())
                    <div class="col-12">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">{{ $title }}</h4>

                        </div>
                    </div>
                </div>
                    <div class="col-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        {{-- @include('layout.footer') --}}
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('js/vendor.min.js') }}"></script>
<script src="{{ asset('js/app.min.js') }}"></script>
@stack('js')
</body>
</html>