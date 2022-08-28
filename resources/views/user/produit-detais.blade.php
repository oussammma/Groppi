@extends('layouts.userApp')
@section('userContent')
    @include('user.navbar')
    <div class="row pro-det mt-4">
        @foreach ($pros as $item)
            <div class="col-md-6 text-center">
                <div class="image-det">
                    <div class="image-container">
                        <img src="{{ asset($item->img_p_1) }}" alt="{{ $item->nom_P }}" width="100%">
                    </div>
                    <ul class="list-image">
                        <li class="image-active">
                            <img src="{{ asset($item->img_p_1) }}" alt="" width="100%">
                        </li>
                        @if ($item->img_p_2)
                            <li>
                                <img src="{{ asset($item->img_p_2) }}" alt="" width="100%">
                            </li>
                        @endif
                        @if ($item->img_p_3)
                            <li>
                                <img src="{{ asset($item->img_p_3) }}" alt="" width="100%">
                            </li>
                        @endif
                        @if ($item->img_p_4)
                            <li>
                                <img src="{{ asset($item->img_p_4) }}" alt="" width="100%">
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pro-info">
                    <span class="cat-det mb-4">{{ $item->categorie }}</span>
                    <h1 class="nom-det mb-4">{{ $item->nom_P }}</h1>
                    @if ($item->disponible == 1)
                        <span class="dispo mb-4"><i class="fa-solid fa-circle-check"></i> Disponible</span>
                    @else
                        <span class="dispo mb-4"><i class="fa-solid fa-ban text-danger"></i> Rupture de stock</span>
                    @endif
                    <h4 class="prix-det mb-5">{{ $item->prix_P }} DH</h4>
                    @foreach ($watps as $row)
                        <a href="https://wa.me/{{ $row->number }}?text=Bonjour,%20je%20veux%20commander%20le%20produit%20{{URL::full()}}"
                            target="_blank" class="whatsapp mb-5">Commander via whatsapp <i
                                class="fa-brands fa-whatsapp"></i></a>
                    @endforeach
                    <div class="descri" id="descri">
                        <h6>Description :</h6>
                        <p>{{ $item->description_P }}</p>
                        <h6>recommandations :</h6>
                        <p>{{ $item->recomendation_P }}</p>
                    </div>
                    <div class="show-more text-center mt-2" id="show-more">
                        <span id="show">montre plus</span>
                        <i class="fa-solid fa-chevron-down" id="down"></i>
                    </div>
                    <div class="row align-items-center mt-3 marq-det">
                        <div class="col-5 text-start">
                            <h6>Marque de produit :</h6>
                        </div>
                        <div class="col-6 text-start">
                            <img src="{{ asset($item->marque) }}" alt="{{ $item->marque }}" width="130px">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-12 mt-5">
            <div class="swiper-title mt-5">
                <h1><i class="fa-solid fa-right-long"></i> {{ $pro_categorie_get->count() }} autre produits dans la même
                    catégorie :</h1>
            </div>
            <div class="swiper proswiper size-det bg-light">
                <div class="swiper-wrapper">
                    @foreach ($pro_categorie_get as $item)
                        <div class="swiper-slide card-inner">
                            <a href="{{ route('proDet.index', $item->nom_P) }}">
                                <div class="card">
                                    <span class="heart"><i class="fa-solid fa-heart fs-3"></i></span>
                                    <div class="img">
                                        <img src="{{ asset($item->img_p_1) }}" alt="" width="100px">
                                    </div>
                                    <h6 class="pro-nom text-start">{{ $item->nom_P }}</h6>
                                    <span class="pro-prix text-start">{{ $item->prix_P }} DH</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

        <div class="col-12 mt-5">
            <div class="swiper-title">
                <h1><i class="fa-solid fa-right-long"></i> {{ $pro_marque_get->count() }} autre produits dans la même
                    marque :</h1>
            </div>
            <div class="swiper proswiper size-det bg-light">
                <div class="swiper-wrapper">
                    @foreach ($pro_marque_get as $item)
                        <div class="swiper-slide card-inner">
                            <a href="{{ route('proDet.index', $item->nom_P) }}">
                                <div class="card">
                                    <span class="heart"><i class="fa-solid fa-heart fs-3"></i></span>
                                    <div class="img">
                                        <img src="{{ asset($item->img_p_1) }}" alt="" width="100px">
                                    </div>
                                    <h6 class="pro-nom text-start">{{ $item->nom_P }}</h6>
                                    <span class="pro-prix text-start">{{ $item->prix_P }} DH</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <a href="#" class="goToTop position-fixed">
        <i class="fa-solid fa-up-long"></i>
    </a>
    @include('user.footer')
@endsection
