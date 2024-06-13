@extends('layouts.app')
@section('content')
    @include('frontend.components.sub-header', ['title' => 'Recommendations'])
    @include('frontend.components.user-offer-section', ['data' => null])
    @include('frontend.components.recommendations-section', ['data' => null])
@endsection