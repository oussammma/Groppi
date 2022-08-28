<footer class="footer-distributed">
    <div class="col-12 text-center footer-img-inner py-2">
        <div class="footer-img">
            <img src="/upload/logo.png" alt="Groppi" width="300px">
        </div>
    </div>
    <div class="footer-left text-center">
        <h3>Groppi<span>Animalerie</span></h3>

        <p class="footer-links">
            <a href="{{ route('magasin.index') }}">Nos magasins</a>
            |
            <a href="{{ route('service.index') }}">Nos services</a>
            |
            <a href="{{ route('contact.index') }}">Contactez-nous</a>
        </p>

        <p class="footer-company-name">Copyright © 2022 <strong>groppi</strong> All rights reserved</p>
    </div>

    <div class="footer-center text-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Adresse N°34, Hay Othman avenu Salam</span>
                Bouznika</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+212 655-181079</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:sagar00001.co@gmail.com">groppisarlau@gmail.com</a></p>
        </div>
    </div>
    <div class="footer-right text-center">
        <p class="footer-company-about">
            <span>À propos de l'entreprise</span>
            <strong>Groppi.ma</strong> Société à Responsabilité Limitée à Associé Unique au Maroc qui marchand effectuant
            à import - export depuis
            2018 et nous travaillons avec des entreprises internationales telles que l'Italie, l'Allemagne, la Belgique
            et la Turquie.
        </p>
        <div class="footer-icons">
            <a href="https://www.facebook.com/Groppi-Animalerie-Maroc-Sarl-AU-102702685683479/" target="_blank"><i
                    class="fa-brands fa-facebook-f"></i></a>
            <a href="https://instagram.com/groppi_animalerie?igshid=YmMyMTA2M2Y=" target="_blank"><i
                    class="fa-brands fa-instagram"></i></a>
            @foreach ($watps as $row)
                <a href="https://wa.me/{{ $row->number }}?text=Bonjour" target="_blank"><i
                        class="fa-brands fa-whatsapp"></i></a>
            @endforeach
        </div>
    </div>
</footer>
