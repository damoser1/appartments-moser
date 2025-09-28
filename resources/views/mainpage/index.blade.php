@extends('layouts.app')

@section('title', 'Startseite')

@section('header')
    <x-header/>
    @include('components.menu')
@endsection

@section('content')
    @include('mainpage/partials/hero')
    @include('mainpage/partials/benefits')
    @include('mainpage/partials/location')
    @include('mainpage.partials.about-leogang')
    @include('mainpage.partials.about-family')
    @include('mainpage.partials.apartment-buttons')
    @include('mainpage.partials.impressum')
@endsection
