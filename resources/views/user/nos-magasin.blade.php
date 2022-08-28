@extends('layouts.userApp')
@section('userContent')
    @include('user.navbar')
    <div class="magasin-body mt-3">
        <div class="mag-title text-center mb-5">
            <h1 class="fs-2">Nos magasins
                <img src="https://img.icons8.com/ios-filled/50/000000/shop.png" />
            </h1>
        </div>
        <div class="mag-content">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="mag-inner d-flex flex-column flex-sm-row align-items-start align-items-sm-center px-3 px-sm-0">
                        <div class="mag-img me-4">
                            <img src="upload/magasins/magasin_1.jpeg" alt="magasin" width="220px" height="auto">
                        </div>
                        <div class="mag-info me-4 me-md-5 mb-4 mb-sm-0">
                            <h1 class="mb-4">Groppi Bouznika</h1>
                            <span class="d-block">Adresse N°34, Hay Othman avenu Salam, Bouznika</span>
                            <span class="d-block mb-4">Maroc</span>
                            <span class="d-block mag-contact mb-1"><i class="fa-solid fa-phone"></i>+212 655-181079</span>
                            <span class="d-block mag-contact"><i
                                    class="fa-solid fa-paper-plane"></i>groppisarlau@gmail.com</span>
                        </div>
                        <div class="mag-hour">
                            <div class="mb-2"><span>Lun.</span>10h00-21h00</div>
                            <div class="mb-2"><span>Mar.</span>10h00-21h00</div>
                            <div class="mb-2"><span>Mer.</span>10h00-21h00</div>
                            <div class="mb-2"><span>Jeu.</span>10h00-21h00</div>
                            <div class="mb-2"><span>Ven.</span>15h00-21h00</div>
                            <div class="mb-2"><span>Sam.</span>10h00-21h00</div>
                            <div><span>Dim.</span>10h00-21h00</div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mag-inner d-flex flex-column flex-sm-row align-items-start align-items-sm-center px-3 px-sm-0">
                        <div class="mag-img me-4">
                            <img src="upload/magasins/depot.jpeg" alt="depot" width="220px" height="auto">
                        </div>
                        <div class="mag-info me-1 me-md-5 mb-4 mb-sm-0">
                            <h1 class="mb-4">Dépôt Groppi Bouznika</h1>
                            <span class="d-block">Adresse Lotissement Jnane El Baraka N°126, bouznika</span>
                            <span class="d-block mb-4">Maroc</span>
                            <span class="d-block mag-contact mb-1"><i class="fa-solid fa-phone"></i>+212 655-181079</span>
                            <span class="d-block mag-contact"><i
                                    class="fa-solid fa-paper-plane"></i>groppisarlau@gmail.com</span>
                        </div>
                        <div class="mag-hour">
                            <div class="mb-2"><span>Lun.</span>09h00-18h00</div>
                            <div class="mb-2"><span>Mar.</span>09h00-18h00</div>
                            <div class="mb-2"><span>Mer.</span>09h00-18h00</div>
                            <div class="mb-2"><span>Jeu.</span>09h00-18h00</div>
                            <div class="mb-2"><span>Ven.</span>09h00-18h00</div>
                            <div class="mb-2"><span>Sam.</span>09h00-18h00</div>
                            <div><span>Dim.</span>Fermé</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <a href="#" class="goToTop position-fixed">
        <i class="fa-solid fa-up-long"></i>
    </a>
    @include('user.footer')
@endsection
