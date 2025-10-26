@extends('layouts.app')
@section('title', 'Galerie · Appartement Grundnergütl')

@section('header')
    @include('appartments/appartment-grundnerguetl/partials/header')
@endsection

@section('content')
    @include('appartments.appartment-grundnerguetl.partials.gallerie')
@endsection

@section('footer')
    @include('appartments/appartment-grundnerguetl/partials/footer')
@endsection

