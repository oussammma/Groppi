@extends('layouts.userApp')
@section('userContent')
    @include('user.navbar')
    <div class="body-cont">
        <div class="row">
            <div class="col-3 col-lg-2 d-none d-md-block categorie_2">
                <div class="cat-1 mb-3">
                    <h6><a href="{{ route('oiseaux.index') }}">oiseaux</a></h6>
                </div>
                <div class="cat-1 mb-3">
                    <h6><a href="{{ route('chat.index') }}">Chat</a></h6>
                </div>
                <div class="cat-1 mb-3">
                    <h6><a href="{{ route('chien.index') }} ">Chien</a></h6>
                </div>
                <div class="cat-1 mb-3">
                    <h6><a href="{{ route('med.index') }}">Médical</a></h6>
                </div>
                <div class="cat-1 mb-3">
                    <ul>
                        @foreach ($marques as $item)
                            <li><a href="{{ route('marPro.index', $item->nom) }}">{{ $item->nom }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-9 col-lg-10 col-xl-8 d-flex flex-column">
                <div class="slider bg-light mb-3">
                    <div class="slide active">
                        <img src="upload/card/slide_1.jpg" alt="slide">
                    </div>
                    <div class="slide">
                        <img src="upload/card/slide_2.jpg" alt="slide">
                    </div>
                    <div class="slide">
                        <img src="upload/card/slide_3.jpg" alt="slide">
                    </div>
                    <div class="navigation">
                        <i class="fas fa-chevron-left prev-btn"></i>
                        <i class="fas fa-chevron-right next-btn"></i>
                    </div>
                    <div class="navigation-visibility">
                        <div class="slide-icon active"></div>
                        <div class="slide-icon"></div>
                        <div class="slide-icon"></div>
                        <div class="slide-icon"></div>
                        <div class="slide-icon"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="swiper-title">
                        <h1 class="fs-5">Vos marques préférées sur groppi :</h1>
                    </div>
                    <div class="swiper marqueswiper bg-light">
                        <div class="swiper-wrapper">
                            @foreach ($marques as $item)
                                <div class="swiper-slide"><a href="{{ route('marPro.index', $item->nom) }}"><img
                                            src="{{ asset($item->img_M) }}" alt="marque" width="150px"
                                            height="auto"></a>
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> --}}
                    </div>
                </div>
                <div class="mb-5">
                    <div class="swiper-title">
                        <h1 class="fs-5">Nos recommandations:</h1>
                    </div>
                    <div class="swiper proswiper size bg-light">
                        <div class="swiper-wrapper">
                            @foreach ($pros as $item)
                                <div class="swiper-slide card-inner">
                                    <a href="{{ route('proDet.index', Str::replace(' ', '_',$item->nom_P)) }}">
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
                <div class="mb-5">
                    <div class="swiper-title">
                        <h1 class="fs-5">Nouveaux Produits :</h1>
                    </div>
                    <div class="swiper proswiper size bg-light">
                        <div class="swiper-wrapper">
                            @foreach ($new_pros as $item)
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
                <div class="mb-5">
                    <div class="swiper-title">
                        <h1 class="fs-5">Espace rohnfried:</h1>
                    </div>
                    <div class="swiper proswiper size bg-light">
                        <div class="swiper-wrapper">
                            @foreach ($pros_rosh as $item)
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
                <div class="mb-5">
                    <div class="swiper-title">
                        <h1 class="fs-5">Espace Dr. Brockamp - Probac:</h1>
                    </div>
                    <div class="swiper proswiper size bg-light">
                        <div class="swiper-wrapper">
                            @foreach ($pros_probac as $item)
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
                <div class="mb-5">
                    <div class="swiper-title">
                        <h1 class="fs-5">Espace VET SCHROEDER :</h1>
                    </div>
                    <div class="swiper proswiper size bg-light">
                        <div class="swiper-wrapper">
                            @foreach ($pros_tollisan as $item)
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
                <div class="mb-5">
                    <div class="swiper-title">
                        <h1 class="fs-5">Espace natural:</h1>
                    </div>
                    <div class="swiper proswiper size bg-light">
                        <div class="swiper-wrapper">
                            @foreach ($pros_natural as $item)
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
                <div class="mb-5">
                    <div class="swiper-title">
                        <h1 class="fs-5">Espace vanrobaeys:</h1>
                    </div>
                    <div class="swiper proswiper size bg-light">
                        <div class="swiper-wrapper">
                            @foreach ($pros_van as $item)
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
            <div class="col-2 ps-5 imagecard">
                <div class="swiper cardswiper">
                    <div class="swiper-wrapper ads-slide-inner">
                        <div class="swiper-slide ads-slide"><img src="upload/card/card_1.png" alt="card"></div>
                        <div class="swiper-slide ads-slide"><img src="upload/card/card_3.png" alt="card"></div>
                        <div class="swiper-slide ads-slide"><img src="upload/card/card_2.png" alt="card"></div>
                        {{-- <div class="swiper-slide ads-slide">Slide 4</div>
                        <div class="swiper-slide ads-slide">Slide 5</div> --}}
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
