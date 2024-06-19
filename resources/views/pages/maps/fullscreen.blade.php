@extends('layouts.app', ['activePage' => 'fullscreen', 'activeButton' => 'maps', 'title' => 'ENERGYNO : Plataforma IoT ECOSUR', 'navName' => 'Fullscreen Map'])

@section('content')
    <div id="map" class="full-screen-map" style="height:100vh"></div>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initFullScreenGoogleMap();
        });
    </script>
@endpush