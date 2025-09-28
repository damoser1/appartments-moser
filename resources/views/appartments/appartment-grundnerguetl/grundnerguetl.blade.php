@extends('layouts.app')

@section('title', 'Appartement Grundergütl')

@section('header')
    @include('appartments/appartment-grundnerguetl/partials/header')
@endsection

@section('content')
    @include('appartments/appartment-grundnerguetl/partials/hero')
    @include('appartments/appartment-grundnerguetl/partials/features')
    @include('appartments/appartment-grundnerguetl/partials/cta')
    @include('appartments/appartment-grundnerguetl/partials/faq')
    @include('appartments/appartment-grundnerguetl/partials/back-to-home')
@endsection

@section('footer')
    @include('appartments/appartment-grundnerguetl/partials/footer')
@endsection
