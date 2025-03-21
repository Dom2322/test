@extends('layout')

@section('title', 'Galeria')

@section('content')
<div class="gallery_container">
    <h1>Galeria</h1>
    <div class="gallery">
        <div class="gallery_item">
            <img src="{{ asset('images/baby.jpg') }}" alt="Zdjęcie 1" data_name="Zosia Nowak"
            description="Zosia dostała niezbędne lekarstwa i wsparcie terapeutyczne.">
        </div>
        <div class="gallery_item">
            <img src="{{ asset('images/baby2.jpg') }}" alt="Zdjęcie 2" data_name="Kasia Lewandowska"
            description="Kasia otrzymała specjalistyczne aparaty słuchowe, które pozwalają jej lepiej komunikować się z otoczeniem.">
        </div>
        <div class="gallery_item">
            <img src="{{ asset('images/beach_baby.jpg') }}" alt="Zdjęcie 3" data_name="Martyna Zielińska"
            description="Dzięki naszej pomocy Martyna mogła przejść operację serca i teraz cieszy się zdrowym dzieciństwem.">
        </div>
        <div class="gallery_item">
            <img src="{{ asset('images/kid1.jpg') }}" alt="Zdjęcie 4" data_name="Oliwia Wójcik"
            description="Oliwia otrzymała niezbędne leki i regularną rehabilitację, co poprawiło jej stan zdrowia.">
        </div>
        <div class="gallery_item">
            <img src="{{ asset('images/kid2.jpg') }}" alt="Zdjęcie 5" data_name="Michał Wiśniewski"
            description="Michał może uczęszczać na dodatkowe zajęcia logopedyczne dzięki naszej pomocy.">
        </div>
        <div class="gallery_item">
            <img src="{{ asset('images/newborn.jpg') }}" alt="Zdjęcie 6" data_name="Zuzanna Kowalczyk"
            description="Dzięki wsparciu fundacji, Zuzanna może uczestniczyć w zajęciach terapeutycznych wspomagających jej rozwój.">
        </div>
        <div class="gallery_item">
            <img src="{{ asset('images/girl-4907182_1280.jpg') }}" alt="Zdjęcie 7" data_name="Emilia Nowicka"
            description="Dzięki pomocy fundacji Уьшдшф mogła spełnić swoje marzenie o nauce gry na skrzypcach. Teraz rozwija swój talent muzyczny i występuje na szkolnych koncertach.">
        </div>
    </div>
</div>

<div id="lightbox" class="lightbox">
    <span class="close">&times;</span>
    <img class="lightbox-content" id="lightbox-img">
    <div class="lightbox-text">
        <h2 id="lightbox-name"></h2>
        <p id="lightbox-description"></p>
    </div>
</div>
@endsection
