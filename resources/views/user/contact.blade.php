@extends('layouts.userApp')
@section('userContent')
    @include('user.navbar')
    <div class="contact-body mt-3">
        <div class="mag-title text-center mb-2">
            <h1 class="fs-3">Contactez-nous
                <img src="https://img.icons8.com/pastel-glyph/64/000000/new-post--v2.png" />
            </h1>
        </div>
        <div class="row cont-inner justify-content-between">
            <div class="col-md-7 py-4 px-4">
                <h1 class="fs-5 mb-5">CONTACTEZ-NOUS</h1>
                <form action="{{ route('contact.sendEmail') }}" method="POST">
                    @csrf
                    <div class="cont-info mb-2">
                        <label for="name" class="d-block">Nom et prénom</label>
                        <input type="text" name="name" id="name" class="w-100" placeholder="" required>
                    </div>
                    <div class="cont-info mb-2">
                        <label for="sujet" class="d-block">Sujet</label>
                        <select name="sujet" id="sujet" class="w-100">
                            <option value="Groppi">Groppi</option>
                            <option value="Service client groppi">Service client groppi</option>
                        </select>
                    </div>
                    <div class="cont-info mb-2">
                        <label for="email" class="d-block">Email</label>
                        <input type="email" name="email" id="email" class="w-100" placeholder="votre@gmail.com"
                            required>
                    </div>
                    <div class="cont-info mb-2">
                        <label for="message" class="d-block">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="w-100"
                            placeholder="Comment pouvons-nous vous aider ?" required></textarea>
                    </div>
                    <button type="submit" class="float-end mt-4">Envoyer</button>
                </form>
            </div>
            <div class="col-12 col-md-5 row link-inner pe-0">
                <div class="col-12 col-sm-6 col-md-12 cont-link py-4 px-4">
                    <h1 class="fs-5 mb-5 text-light">INFORMATIONS</h1>
                    <div class="link-informa text-light d-flex align-items-center mb-2">
                        <i class="fa-solid fa-location-dot me-3"></i>
                        <span>Adresse N°34, Hay Othman avenu Salam, Bouznika Maroc</span>
                    </div>
                    <div class="link-informa text-light d-flex align-items-center mb-2">
                        <i class="fa-solid fa-at me-3"></i>
                        <span>groppisarlau@gmail.com</span>
                    </div>
                    <div class="link-informa text-light d-flex align-items-center mb-4">
                        <i class="fa-solid fa-phone me-3"></i>
                        <span>+212 655-181079</span>
                    </div>
                    <div class="link-social fs-3">
                        <a href="https://www.facebook.com/Groppi-Animalerie-Maroc-Sarl-AU-102702685683479/"
                            target="_blank"><i class="fa-brands fa-facebook me-3"></i></a>
                        <a href="https://instagram.com/groppi_animalerie?igshid=YmMyMTA2M2Y=" target="_blank"><i
                                class="fa-brands fa-instagram me-3"></i></a>
                        @foreach ($watps as $row)
                            <a href="https://wa.me/{{ $row->number }}?text=Bonjour" target="_blank"><i
                                    class="fa-brands fa-whatsapp"></i></a>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 maps p-0">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d975.2131594994796!2d-7.162177776399241!3d33.78502347997168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sma!4v1656991165728!5m2!1sfr!2sma"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="goToTop position-fixed">
        <i class="fa-solid fa-up-long"></i>
    </a>
    @include('user.footer')
@endsection
