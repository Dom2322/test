@extends('layout')

@section('title', 'Fundacja Dobre Serce')

@section('content')
    <h2>Witamy w Fundacji Dobre Serce</h2>
    <p>Naszą misją jest wspieranie dzieci z rodzin w trudnej sytuacji życiowej.</p>

    <div class="slider">
        <div><img src="{{ asset('images/awareness.jpg') }}" alt="Slide 1"></div>
        <div><img src="{{ asset('images/hospice.jpg') }}" alt="Slide 2"></div>
        <div><img src="{{ asset('images/support.jpg') }}" alt="Slide 3"></div>
    </div>

    <section class="nasze-dzialania">
        <h2>Nasze działania</h2>
        <div class="dzialania-container">
            <div class="dzialanie" style="border-left-color: #78df83;">
                <h5>Zapewniamy pomoc finansową i rzeczową dla dzieci.</h5>
                <h5>Pomagamy dzieciom w trudnej sytuacji życiowej.</h5>
            </div>
            <div class="dzialanie" style="border-left-color: #db8358;">
                <h5>Organizujemy warsztaty edukacyjne i sportowe.</h5>
                <h5>Tworzymy zajęcia rozwijające umiejętności dzieci.</h5>
            </div>
            <div class="dzialanie" style="border-left-color: #e84951;">
                <h5>Wspieramy rodziny w trudnych sytuacjach.</h5>
                <h5>Oferujemy wsparcie psychologiczne i materialne rodzinom</h5>
            </div>
        </div>
    </section>

    <section class="ostatnie-dokonania">
        <div class="content">
            <h3>Nasze ostatnie osiągnięcia <strong>w liczbach!</strong></h3>
            <div class="stat">Pomogliśmy już <br><strong>500+</strong><br> dzieciom</div>
            <div class="stat">Przeprowadziliśmy <br><strong>200+</strong><br> warsztatów</div>
            <div class="stat">Współpracujemy z <br><strong>50+</strong><br> wolontariuszami</div>
        </div>
    </section>


    <h3>Jak możesz pomóc?</h3>
    <p>Możesz przekazać darowiznę lub zostać wolontariuszem!</p>
@endsection
