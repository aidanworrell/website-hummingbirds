@extends("layouts.app")
@section("content")
    <h2 class="humming"> Humming Birds </h2>
    @php

        include("../resources/views/layouts/components/news_buttons.blade.php");
        include("../resources/views/layouts/components/news_content.blade.php");
        include("../resources/views/layouts/components/footer.blade.php");
        include("../resources/views/layouts/components/pagination.blade.php");
    @endphp
@endsection
