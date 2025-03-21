<?php $__env->startSection('title', 'Cele i zasady działania'); ?>

<?php $__env->startSection('content'); ?>
<div class="container o_nas_kontakt">
    <h1>Cele i Zasady Działania Fundacji Dobre Serce</h1>

    <div class="intro">
        <p>Fundacja <strong>Dobre Serce</strong> powstała z myślą o wsparciu dzieci znajdujących się w trudnej sytuacji życiowej. Nasza misja to poprawa warunków ich życia, zapewnienie dostępu do edukacji, opieki zdrowotnej i wsparcia psychologicznego. Działamy w oparciu o wartości takie jak solidarność, równość szans oraz szacunek dla każdego dziecka.</p>
        <img src="<?php echo e(asset('images/work-life-balance.jpg')); ?>" alt="Fundacja Dobre Serce" class="img-right">
    </div>

    <h2>Nasze Cele</h2>
    <ul>
        <li><strong>Pomoc dzieciom w trudnej sytuacji życiowej</strong> - wspieramy dzieci z rodzin ubogich, dysfunkcyjnych oraz dzieci osierocone, zapewniając im niezbędną pomoc materialną i psychologiczną.</li>
        <li><strong>Dostęp do edukacji</strong> - finansujemy podręczniki, zajęcia dodatkowe oraz stypendia dla uzdolnionych podopiecznych.</li>
        <li><strong>Wsparcie zdrowotne i rehabilitacyjne</strong> - finansujemy leczenie, rehabilitację oraz zakup niezbędnego sprzętu medycznego dla dzieci z niepełnosprawnościami lub przewlekłymi chorobami.</li>
        <li><strong>Rozwój talentów i pasji</strong> - organizujemy warsztaty, kolonie letnie oraz wydarzenia kulturalne, które pozwalają dzieciom rozwijać ich talenty i pasje.</li>
        <li><strong>Promocja równości szans</strong> - angażujemy się w programy mające na celu likwidację barier społecznych i edukacyjnych, aby każde dziecko miało możliwość równego startu w życiu.</li>
    </ul>

    <div class="gallery">
        <img src="<?php echo e(asset('images/family_4.jpg')); ?>" alt="Pomoc dzieciom">
        <img src="<?php echo e(asset('images/family-2535059_1280.jpg')); ?>" alt="Edukacja">
        <img src="<?php echo e(asset('images/home_family.jpg')); ?>" alt="Rehabilitacja">
        <img src="<?php echo e(asset('images/kid_visit.jpg')); ?>" alt="Rozwój talentów">
        <img src="<?php echo e(asset('images/motherandbaby.jpg')); ?>" alt="Równość szans">
        <img src="<?php echo e(asset('images/team-spirit.jpg')); ?>" alt="Działania długoterminowe">
    </div>

    <h2>Zasady Działania</h2>
    <ul>
        <li><strong>Transparentność i uczciwość</strong> - wszystkie środki przekazywane fundacji są rozliczane w sposób przejrzysty, a nasi darczyńcy mają dostęp do informacji o wykorzystaniu funduszy.</li>
        <li><strong>Działania oparte na realnych potrzebach</strong> - pomoc kierujemy do dzieci, które faktycznie jej potrzebują, podejmując decyzje w oparciu o rzetelną analizę sytuacji.</li>
        <li><strong>Współpraca z instytucjami i organizacjami</strong> - fundacja współpracuje z placówkami edukacyjnymi, medycznymi oraz innymi organizacjami pozarządowymi, aby zapewnić jak najefektywniejszą pomoc.</li>
        <li><strong>Zaangażowanie społeczności</strong> - wierzymy, że każdy może pomagać. Dlatego promujemy wolontariat i angażujemy społeczność lokalną w nasze projekty.</li>
        <li><strong>Działania długoterminowe</strong> - skupiamy się nie tylko na doraźnych akcjach pomocowych, ale także na długoterminowych programach wspierających rozwój dzieci i młodzieży.</li>
    </ul>

    <div class="bottom-image">
        <img src="<?php echo e(asset('images/pet.jpg')); ?>" alt="Pomoc dzieciom">
        <img src="<?php echo e(asset('images/family_4.jpg')); ?>" alt="Pomoc dzieciom">
    </div>

    <h2>Jak Możesz Pomóc?</h2>
        <p>
            Jeśli chcesz wesprzeć naszą działalność, możesz to zrobić na kilka sposobów:
        </p>
        <ul>
            <li>Wpłacając darowiznę na konto fundacji.</li>
            <li>Zostając wolontariuszem i angażując się w nasze działania.</li>
            <li>Przekazując 1,5% podatku na rzecz fundacji.</li>
            <li>Organizując zbiórki i akcje charytatywne.</li>
        </ul>
        <p>Dziękujemy za Twoje wsparcie! Razem tworzymy przyszłość pełną nadziei i możliwości dla najmłodszych.</p>
        <p class="text-center">
            <a href="/kontakt" class="btn">Skontaktuj się z nami</a>
        </p>
</div>

<style>
    .intro {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .img-right {
        width: 250px;
        height: auto;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 10px;
        margin: 20px 0;
    }

    .gallery img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .gallery img:hover {
        transform: scale(1.05);
    }

    .bottom-image {
        text-align: center;
        margin: 20px 0;
    }

    .bottom-image img {
        max-width: 80%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ROG\OneDrive\Dokumenty\GitHub\fundacja-projekt\resources\views/celeizasady.blade.php ENDPATH**/ ?>