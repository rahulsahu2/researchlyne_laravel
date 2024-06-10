@extends('layouts.app')
@section('content')
@include('frontend.components.sub-header', ['title' => $data->title])
@include('frontend.components.about-us', ['data' => $data])
@include('frontend.components.offered-service', ['data' => $data])
@include('frontend.components.best-choice', ['data' => $data])
@endsection