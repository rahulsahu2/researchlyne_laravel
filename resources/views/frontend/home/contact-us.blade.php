@extends('layouts.app')
@section('content')
@include('frontend.components.sub-header', ['title' => 'Contact Us'])
@include('frontend.components.contact-section', ['data' => [
    'title' => 'Contact Us',
    'contact'=> 'yes',
    'content' => null
]])
@endSection