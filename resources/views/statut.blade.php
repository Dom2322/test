@extends('layout')

@section('title', 'Statut Fundacji')

@section('content')
    <div class="container o_nas_kontakt">
        <h1>Statut Fundacji Dobre Serce</h1>
        <p>Fundacja Dobre Serce działa na rzecz wsparcia dzieci i młodzieży poprzez różnorodne programy edukacyjne i charytatywne.</p>

        <h2>Cel i misja fundacji</h2>
        <p>Naszym głównym celem jest zapewnienie dzieciom i młodzieży równego dostępu do edukacji, opieki zdrowotnej i wsparcia psychologicznego.</p>

        <h2>Podstawowe zasady działania</h2>
        <ul>
            <li>Wsparcie edukacyjne i rozwojowe</li>
            <li>Pomoc materialna dla potrzebujących rodzin</li>
            <li>Organizacja wydarzeń charytatywnych</li>
            <li>Współpraca z innymi organizacjami non-profit</li>
        </ul>

        <h2>Pełny statut fundacji</h2>
        <p>Pełny statut fundacji można pobrać, klikając w poniższy link:</p>
        <a href="{{ asset('documents/Statut_DobreSerce.pdf') }}" target="_blank">Pobierz statut fundacji (PDF)</a>
    </div>
@endsection
