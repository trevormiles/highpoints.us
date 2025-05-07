@extends('layouts.main')

@push('meta')
    <title>highpoints.us | Home</title>
    <meta name="title" content="highpoints.us | Home">
    <meta name="description" content="A resource for tracking your progress through the 50 U.S. states' highest points.">
@endpush

@section('main-content')
    <x-hero />
    <x-stats />
    <x-highpoints-grid :highpoints="$highpoints" :userCompletedHighpointsCount="$userCompletedHighpointsCount" />
    @guest
        <x-cta />
    @endguest
@endsection