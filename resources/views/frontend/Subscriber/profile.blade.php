@extends('layouts.app')
@section('content')
@include('frontend.components.sub-header', ['title' => 'My Profile'])
@include('frontend.components.user-profile', ['data' => null])
@endsection