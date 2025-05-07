@extends('layouts.main')

@push('meta')
    <title>highpoints.us | Highpoints</title>
    <meta name="title" content="highpoints.us | Highpoints">
    <meta name="description" content="A complete list of all 50 U.S. states' highest points.">
@endpush

@section('main-content')
    <x-highpoints-grid :highpoints="$highpoints" :userCompletedHighpointsCount="$userCompletedHighpointsCount" />
@endsection 