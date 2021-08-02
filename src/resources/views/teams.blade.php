@extends("layouts.app")
@section("content")
    @php
        include("../resources/views/layouts/components/teams_content.blade.php");
         include("../resources/views/layouts/components/pagination.blade.php");
         include("../resources/views/layouts/components/footer.blade.php");
    @endphp
@endsection
