@extends('layouts.userApp')
@section('userContent')
    @include('user.navbar')
    <div class="marque-pro-body">
        <div class="mag-title text-start mb-2 d-flex align-items-center mt-4">
            @if (count($pros_oiseaux) > 0)
                <h5 class="mt-2 me-2"><i class="fa-solid fa-right-long me-3"></i>Il y a {{ count($pros_oiseaux) }} produits</h5>
                <i class="fa-solid fa-crow fs-3"></i>
            @else
                <h5 class="mt-2 me-3"><i class="fa-solid fa-right-long me-3"></i>Aucun produits</h5>
            @endif
        </div>
        <div class="mt-0">
            <div class="row mt-4">
                @if (count($pros_oiseaux) > 0)
                    @foreach ($pros_oiseaux as $item)
                        <div class="col-6 col-md-4 col-lg-3 card-inner mb-4">
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
                @else
                    <div class="ms-5 opps py-5">
                        <i class="fa-solid fa-triangle-exclamation text-danger me-2"></i>
                        <span class="text-secondary">Vérifier plus tard</span>
                    </div>
                @endif

            </div>
        </div>
    </div>
    <a href="#" class="goToTop position-fixed">
        <i class="fa-solid fa-up-long"></i>
    </a>
    @include('user.footer')
@endsection
