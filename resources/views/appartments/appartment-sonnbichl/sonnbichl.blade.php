@extends('layouts.app')

@section('title', 'Appartement Sonnbichl')

@section('header')
    @include('appartments/appartment-sonnbichl/partials/header')
@endsection

@section('content')
    @include('appartments/appartment-sonnbichl/partials/hero')
    @include('appartments/appartment-sonnbichl/partials/features')
    @include('appartments/appartment-sonnbichl/partials/cta')
    @include('appartments/appartment-sonnbichl/partials/faq')
    @include('appartments/appartment-sonnbichl/partials/back-to-home')
@endsection

@section('footer')
    @include('appartments/appartment-sonnbichl/partials/footer')
@endsection
