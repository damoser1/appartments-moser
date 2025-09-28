@extends('layouts.app')
@section('title', 'Galerie · Appartement Grundnergütl')

@section('header')
    @include('appartments/appartment-grundnerguetl/partials/header')
@endsection

@section('content')
    @include('appartments.appartment-grundnerguetl.partials.galerie')
@endsection

@section('footer')
    @include('appartments/appartment-grundnerguetl/partials/footer')
@endsection

