@extends('layouts.app')
@section('content')
@include('frontend.components.sub-header', ['title' => 'Subscriptions'])
@include('frontend.components.benefits-section', ['data' => null])
@include('frontend.components.subscriptions-section', ['data' => null])
@endsection