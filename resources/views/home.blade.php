@extends('layouts.main')

@section('main-content')
    <x-hero />
    <x-stats />
    <x-highpoints-grid :highpoints="$highpoints" />
    <x-cta />
@endsection