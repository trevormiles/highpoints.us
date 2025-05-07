@extends('layouts.main')

@section('main-content')
    <x-highpoints-grid :highpoints="$highpoints" :userCompletedHighpointsCount="$userCompletedHighpointsCount" />
@endsection 