@extends('layouts.master')

@section('content')
    <div id="map" style="height: 100%"></div>

    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 13.7000526, lng: 100.5947212},
            zoom: 8
            });

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                    map.setCenter(initialLocation);
                });
            }
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0IlzhmjLVacGrPnSK07MmK4-M-Y477CI&callback=initMap" async defer></script>
@endsection