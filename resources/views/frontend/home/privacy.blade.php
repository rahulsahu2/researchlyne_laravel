@extends('layouts.app')
@section('content')
@include('frontend.components.sub-header', ['title' => 'Privacy Policy'])
@include('frontend.components.raw-section', ['data' => $data])
@endSection