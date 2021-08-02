@extends("layouts.app")
@section("content")
    <h2 class="humming"> Humming Birds </h2>
    @php

        include("../resources/views/layouts/components/matches_content.blade.php");
        include("../resources/views/layouts/components/pagination.blade.php");
        include("../resources/views/layouts/components/footer.blade.php");
    @endphp
@endsection
