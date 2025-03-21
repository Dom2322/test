<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjektyController extends Controller
{
    private $news = [
        1 => [
            'title' => 'Pomogliśmy Ani! ❤️',
            'content' => 'Mała Ania od urodzenia zmagała się z poważną wadą serca. Dzięki wsparciu darczyńców z Fundacji Dobre Serce udało się sfinansować operację, która uratowała jej życie! Ania teraz czuje się dobrze i może bawić się z rówieśnikami. Dziękujemy wszystkim za pomoc!',
        ],
        2 => [
            'title' => 'Nowe Warsztaty dla Dzieci 🎨',
            'content' => 'Fundacja Dobre Serce organizuje nowe warsztaty plastyczne i muzyczne dla dzieci z trudnych środowisk. Celem jest rozwijanie ich talentów i budowanie pewności siebie.',
        ],
        3 => [
            'title' => 'Zbiórka na nowe podręczniki 📚',
            'content' => 'Rozpoczęliśmy zbiórkę na nowe podręczniki dla dzieci z rodzin w trudnej sytuacji życiowej. Każdy datek pomaga zapewnić edukację najmłodszym.',
        ],
        4 => [
            'title' => 'Nowy plac zabaw dla dzieci 🏞️',
            'content' => 'Dzięki wsparciu sponsorów udało się stworzyć nowoczesny i bezpieczny plac zabaw dla dzieci w naszym ośrodku. To miejsce pełne radości i uśmiechu!',
        ],
        5 => [
            'title' => 'Pomoc dla dzieci z Ukrainy 🇺🇦',
            'content' => 'Fundacja Dobre Serce wspiera dzieci z Ukrainy, zapewniając im zakwaterowanie, edukację i pomoc psychologiczną. Razem możemy więcej!',
        ],
        6 => [
            'title' => 'Nowa współpraca z psychologami 👩‍⚕️',
            'content' => 'Fundacja nawiązała współpracę z grupą psychologów dziecięcych, którzy będą oferować darmowe konsultacje dla dzieci w trudnej sytuacji życiowej.',
        ],
        7 => [
            'title' => 'Darmowe obiady w szkołach 🍽️',
            'content' => 'Dzięki darczyńcom sfinansowaliśmy darmowe obiady dla 150 dzieci w lokalnych szkołach. Każde dziecko zasługuje na pełnowartościowy posiłek!',
        ],
        8 => [
            'title' => 'Warsztaty z programowania dla młodzieży 💻',
            'content' => 'Uruchomiliśmy kursy z podstaw programowania dla dzieci i młodzieży. Uczymy kodowania w przyjazny sposób!',
        ],
        9 => [
            'title' => 'Akcja "Zimowe kurtki dla dzieci" 🧥',
            'content' => 'Rozpoczynamy zbiórkę na ciepłe ubrania dla dzieci z ubogich rodzin. Pomóż nam zapewnić im ciepłą zimę!',
        ],
        10 => [
            'title' => 'Wolontariusze w akcji! 🤝',
            'content' => 'Do naszego zespołu dołączyło już ponad 50 wolontariuszy, którzy aktywnie pomagają w organizacji wydarzeń i zbiórek.',
        ],
    ];

    public function index()
    {
        return view('projekty', ['news' => $this->news]);
    }

    public function show($id)
    {
        if (!isset($this->news[$id])) {
            abort(404);
        }
        return view('show', ['newsItem' => $this->news[$id]]);
    }
}

