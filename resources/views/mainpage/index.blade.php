@extends('layouts.app')

@section('title', 'Startseite')

@section('content')
    @include('mainpage/partials/hero')
    @include('mainpage/partials/benefits')
    @include('mainpage/partials/location')
    @include('mainpage/partials/about')
@endsection
