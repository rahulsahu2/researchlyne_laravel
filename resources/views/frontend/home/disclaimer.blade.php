@extends('layouts.app')
@section('content')
@include('frontend.components.sub-header', ['title' => 'Disclaimer'])
@include('frontend.components.raw-section', ['data' => $data])
@endSection