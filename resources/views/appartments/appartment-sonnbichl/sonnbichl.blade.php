@extends('layouts.app')

@section('title', 'Appartement Sonnbichl')

@section('content')
    @include('appartments/appartment-sonnbichl/partials/header')
    @include('appartments/appartment-sonnbichl/partials/hero')
    @include('appartments/appartment-sonnbichl/partials/features')
    @include('appartments/appartment-sonnbichl/partials/hero')
@endsection

<footer class="bg-gray-900 text-gray-400 text-sm py-6">
    <div class="max-w-7xl mx-auto px-6 flex flex-col sm:flex-row justify-between gap-4">
        <p>© {{ date('Y') }} Apartment Sonnbichl · Alle Rechte vorbehalten</p>
        <div class="flex gap-6">
            <a href="{{ url('/impressum') }}" class="hover:text-white">Impressum</a>
            <a href="{{ url('/datenschutz') }}" class="hover:text-white">Datenschutz</a>
        </div>
    </div>
</footer>
