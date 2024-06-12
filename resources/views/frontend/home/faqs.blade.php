@extends('layouts.app')
@section('content')
@include('frontend.components.sub-header', ['title' => 'Frequently Asked Questions'])
@include('frontend.components.faqs-section', ['data' => null])
@endSection