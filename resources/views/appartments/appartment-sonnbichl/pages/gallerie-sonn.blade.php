@extends('layouts.app')
@section('title', 'Galerie · Appartement Sonnbichl')

@section('header')
    @include('appartments/appartment-sonnbichl/partials/header')
@endsection

@section('content')
    @include('appartments.appartment-sonnbichl.partials.gallerie')
@endsection

@section('footer')
    @include('appartments/appartment-sonnbichl/partials/footer')
@endsection

