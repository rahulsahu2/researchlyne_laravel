@extends('layouts.app')
@section('content')
@include('frontend.components.sub-header', ['title' => 'Terms & Conditions'])
@include('frontend.components.raw-section', ['data' => $data])
@endSection