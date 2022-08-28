@extends('layouts.userApp')
@section('userContent')
    @include('user.navbar')
    <div class="cont-body">
        <div class="service mt-3">
            <div class="pro-title mb-5">
                <h1 class="fs-2 text-center">Nos services <img
                        src="https://img.icons8.com/ios-filled/50/000000/service.png" />
                </h1>
            </div>
            <div class="row service-cont">
                <div class="col-md-6 mb-4 d-flex justify-content-center service-info">
                    <div class="service-inner d-flex align-items-center">
                        <img src="https://img.icons8.com/ios/50/undefined/delivery--v1.png" width="70px" />
                        <div class="ms-3">
                            <h6>Livraison rapide</h6>
                            <span>Entre 24H et 48H</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 d-flex justify-content-center service-info">
                    <div class="service-inner d-flex align-items-center">
                        <img src="https://img.icons8.com/ios/50/undefined/phonelink-ring--v1.png" width="70px" />
                        <div class="ms-3">
                            <h6>Meilleure assistance en ligne</h6>
                            <span>Heures: 8h00 - 23h00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-md-0 d-flex justify-content-center service-info"">
                    <div class="service-inner d-flex align-items-center">
                        <img src="https://img.icons8.com/external-kmg-design-detailed-outline-kmg-design/64/undefined/external-left-arrow-kmg-design-detailed-outline-kmg-design.png"
                            width="70px" />
                        <div class="ms-3">
                            <h6>Politique de retour</h6>
                            <span>Retour facile et gratuit</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center service-info"">
                    <div class="service-inner d-flex align-items-center">
                        <img src="https://img.icons8.com/ios/50/undefined/money-bag-yen.png" width="70px" />
                        <div class="ms-3">
                            <h6>Satisfait ou remboursé</h6>
                            <span>100% garanti !</span>
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
