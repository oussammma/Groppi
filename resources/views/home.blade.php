@extends('layouts.app')
@section('home-title')
    <title>Accueil</title>
@endsection
@section('content')
    @extends('admin/adminBar')
@section('admin_content')
    <div class="container text-center h-75 welcome-text">
        <h3 class="fs-1 text-capitalize">{{ Auth::user()->name }}</h3>
        <h5 class="fs-2 text-primary">Bienvenue à Groppi</h5>
    </div>
@endsection
@endsection
