<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('includes/head')
</head>
<body>
<div class="folio" id="app">
    @include('includes/header')
    <div class="container content-{{$pageType}}">
        @yield('content')
    </div>
    @include('includes/footer')
</div>

<!-- Scripts -->
@routes

@php
    $themeFolder = get_theme_folder();
@endphp

<!-- main script -->

<script src="{{ mix('js/app.js', 'themes/'.$themeFolder) }}"></script>

{{-- @php
    $jsResources = get_theme_setting('resources.javascript');
@endphp --}}

{{-- third party js libs that theme specified --}}

{{-- @foreach ( $jsResources as $key => $jsResource )
    @if($jsResource)
        <script id="{{ $key }}" src="{{ $jsResource }}"></script>
    @endif
@endforeach --}}

@include('includes/scripts')

{{-- scripts injected by specific views --}}

@stack('scripts')

<noscript>Please enable JavaScript to view this website correctly.</noscript>

</body>
</html>
