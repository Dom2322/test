@extends('layout')
@section('title', 'Opinie')
@section('content')
<div class="opinions-container">
    <h1>Opinie</h1>

    <div class="opinion-form">
        <form action="{{ route('opinions.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nazwa" required>
            <textarea name="content" placeholder="Napisz swoją opinię" maxlength="255" required></textarea>

            <div class="rating">
                <input type="radio" name="rating" value="5" id="star5"><label for="star5">★</label>
                <input type="radio" name="rating" value="4" id="star4"><label for="star4">★</label>
                <input type="radio" name="rating" value="3" id="star3"><label for="star3">★</label>
                <input type="radio" name="rating" value="2" id="star2"><label for="star2">★</label>
                <input type="radio" name="rating" value="1" id="star1"><label for="star1">★</label>
            </div>

            <button type="submit">Opublikuj</button>
        </form>
    </div>

    <div class="opinions-list">
        @foreach($opinions as $opinion)
            <div class="opinion-card">
                <div class="opinion-header">
                    <strong>{{ $opinion->name }}</strong>
                    <span>{{ $opinion->created_at->format('d.m.Y') }}</span>
                </div>
                <div class="opinion-rating">
                    @for ($i = 1; $i <= 5; $i++)
                        <span class="{{ $i <= $opinion->rating ? 'star-filled' : 'star-empty' }}">★</span>
                    @endfor
                </div>
                <p>"{{ $opinion->content }}"</p>
            </div>
        @endforeach
    </div>
</div>

<style>
    body {
        background-color: #F8F8F8;
        font-family: Arial, sans-serif;
    }

    .opinions-container {
        max-width: 800px;
        margin: 20px auto;
        background: #FFF;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .opinions-container h1 {
        text-align: center;
        color: #A33A3A;
        margin-bottom: 20px;
    }

    .opinion-form {
        background: #EEE;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .opinion-form input, .opinion-form textarea {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #CCC;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .opinion-form textarea {
        resize: vertical;
        min-height: 100px;
    }

    .opinion-form button {
        background: #007BFF;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    .rating {
        display: flex;
        flex-direction: row-reverse;
        justify-content: center;
        gap: 5px;
    }

    .rating label {
        font-size: 24px;
        color: #CCC;
        cursor: pointer;
    }

    .rating input {
        display: none;
    }

    .rating input:checked ~ label {
        color: #FFD700;
    }

    .opinions-list {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .opinion-card {
        background: #FAFAFA;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .opinion-header {
        display: flex;
        justify-content: space-between;
        font-size: 14px;
        color: #A33A3A;
    }

    .opinion-rating {
        margin: 5px 0;
        font-size: 18px;
    }

    .star-filled {
        color: #FFD700;
    }

    .star-empty {
        color: #CCC;
    }
</style>
@endsection

