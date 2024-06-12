@extends('layouts.app')
@section('content')
@include('frontend.components.sub-header', ['title' => 'Investor Complaints'])
@include('frontend.components.investor-table-section', ['data' => $data])
@include('frontend.components.investor-table-section', ['data' => $data])
@include('frontend.components.investor-table-section', ['data' => $data])
@endSection