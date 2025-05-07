@extends('layouts.main')

@section('main-content')
    <x-hero />
    <x-stats />
    <x-highpoints-grid :highpoints="$highpoints" :userCompletedHighpointsCount="$userCompletedHighpointsCount" />
    @guest
        <x-cta />
    @endguest
@endsection