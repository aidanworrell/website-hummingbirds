{{--<!DOCTYPE html>--}}
{{--<html lang="en" class="theme-dark">--}}
{{--<head>--}}
{{--    @php--}}
{{--        include("../resources/views/layouts/components/head.blade.php");--}}
{{--    @endphp--}}
{{--</head>--}}
{{--<body>--}}
{{--<h2 class="humming"> Humming Birds </h2>--}}
{{--@php--}}
{{--    include("../resources/views/layouts/components/nav.blade.php");--}}
{{--    include("../resources/views/layouts/components/shop_buttons.blade.php");--}}
{{--    include("../resources/views/layouts/components/shop_sidenav.blade.php");--}}
{{--    include("../resources/views/layouts/components/shop_content.blade.php");--}}
{{--    include("../resources/views/layouts/components/pagination.blade.php");--}}
{{--@endphp--}}

{{--</body>--}}
@extends("layouts.app")
@section("content")
    <h2 class="humming"> Humming Birds </h2>
    @php
        include("../resources/views/layouts/components/shop_buttons.blade.php");
        include("../resources/views/layouts/components/shop_sidenav.blade.php");
        include("../resources/views/layouts/components/shop_content.blade.php");
        include("../resources/views/layouts/components/pagination.blade.php");
    @endphp
@endsection
