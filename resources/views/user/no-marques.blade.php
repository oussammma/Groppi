@extends('layouts.userApp')
@section('userContent')
    @include('user.navbar')
    <div class="cont-body">
        <div class="service mt-3">
            <div class="pro-title mb-5">
                <h1 class="fs-2 text-center">Nos marques </h1>
            </div>
        </div>
        <div class="row pt-5 text-center">
            @foreach ($marques as $item)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
                    <a href="{{ route('marPro.index', $item->nom) }}"><img src="{{ asset($item->img_M) }}" alt="{{ $item->nom }}" width="200px"></a>
                </div>
            @endforeach
        </div>
    </div>
    <a href="#" class="goToTop position-fixed">
        <i class="fa-solid fa-up-long"></i>
    </a>
    @include('user.footer')
@endsection
