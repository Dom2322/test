@extends('layout')
@section('title', 'Projekty')
@section('content')
<div class="projekty-container">
    <h1>Nasze Projekty</h1>

    <div class="projekty-grid">
        <div class="projekt-card">
            <h4>Edukacja dla każdego:</h4>
            <p>
                Nasza fundacja Dobre Serce stworzyła specjalną stronę z darmowymi materiałami dydaktycznymi:
                e-bookami, ćwiczeniami, samouczkami dla dzieci w każdym wieku.
            </p>
        </div>

        <div class="projekt-card">
            <h4>Kalendarz wydarzeń na kwiecień i maj:</h4>
            <p>
                Nasza fundacja organizuje bezpłatne spotkania w naszej siedzibie.<br>
                <strong>Adres:</strong> 99-300 Kutno, Ul. Zegarowa 45<br>
                <hr>
                <strong>Terminy spotkań:</strong><br>
                5 kwietnia - spotkanie dla rodzin w trudnej sytuacji życiowej<br>
                19 kwietnia - piknik dla dzieci<br>
                10 maja - warsztaty dla dzieci<br>
            </p>
        </div>
    </div>

    <h2 class="news-title">Aktualności</h2>
    <div class="news-section">
        @foreach($news as $id => $item)
            <div class="news-card">
                <h2>{{ $item['title'] }}</h2>
                <p>{{ Str::limit($item['content'], 100) }}</p>
                <a href="{{ route('projekty.show', $id) }}" class="btn">Czytaj dalej</a>
            </div>
        @endforeach
    </div>
</div>

<style>
.projekty-container {
    max-width: 1000px;
    margin: 40px auto;
    padding: 20px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.projekty-container h1, h2 {
    color: #A33A3A;
    margin-bottom: 20px;
}

.projekty-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.projekt-card {
    background: #F8E8E8;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    width: 45%;
    text-align: left;
}

.news-title {
    margin-top: 40px;
    text-align: center;
}

.news-card {
    background: #FDECEC;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 15px;
    text-align: left;
}

.btn {
    display: inline-block;
    padding: 10px 15px;
    background: #A33A3A;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background 0.3s;
}

.btn:hover {
    background: #811F1F;
}

@media (max-width: 768px) {
    .projekty-grid {
        flex-direction: column;
    }

    .projekt-card {
        width: 100%;
    }
}
</style>

@endsection

