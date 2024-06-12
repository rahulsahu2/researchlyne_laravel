@extends('layouts.app')
@section('content')
@include('frontend.components.sub-header', ['title' => 'Investor Charter'])
@include('frontend.components.investor-charter-section', ['data' => null])
@endSection