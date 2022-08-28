@extends('layouts.app')
@section('mar-title')
    <title>Marques</title>
@endsection
@section('content')
    @extends('admin/adminBar')
@section('admin_content')
    <div class="container cat-cont">
        <div class="content-title d-flex align-items-center mb-5">
            <i class="uil uil-building"></i>
            <span class="text ms-3">Marques</span>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8 pe-0 pe-lg-5 mb-5 mb-lg-0">
                <div class="content-searsh mb-4">
                    <label for="" class="d-block">Rechercher</label>
                    <input type="text" name="mar_searsh" id="mar_searsh" onkeyup='MarSearch()'>
                </div>
                <div class="col-title d-flex align-items-center">
                    <i class="fa-solid fa-table-list fs-3"></i>
                    <h5 class="mt-1 ms-2">Liste</h5>
                </div>
                <div class="table-all">
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Logo</th>
                                <th>Nom</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody class="allData" id="myTableMar">
                            @foreach ($mars as $row => $item)
                                <tr>
                                    <td>{{ $row = $row + 1 }}</td>
                                    <td hidden>{{ $item->id }}</td>
                                    <td hidden>{{ $item->img_M }}</td>
                                    <td><img src="{{ asset($item->img_M) }}" alt="{{ $item->nom }}" width="100px"></td>
                                    <td>{{ $item->nom }}</td>
                                    <td><a href="#" class="EditeBtn" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="fa-solid fa-pen-clip"></i></a></td>
                                    <td><a href="{{ route('mar.delete', $item->id) }}" class="DeleteBtn"><i
                                                class="fa-solid fa-trash"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tbody id="cont_searsh" class="searshData"></tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-lg-0 mb-5 mb-lg-0">
                <div class="col-title d-flex align-items-center mb-4">
                    <i class="fa-solid fa-square-plus fs-3"></i>
                    <h5 class="mt-1 ms-2">Nouveau Marques</h5>
                </div>
                <form action="{{ route('mar.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-info mb-2">
                        <label for="" class="d-block">Nom :</label>
                        <input type="text" name="mar_name" required>
                    </div>
                    <div class="form-info">
                        <label for="" class="d-block">Logo :</label>
                        <input type="file" name="mar_img" required>
                    </div>
                    <button type="submit" class="btn text-white mt-4">Ajouter</button>
                </form>
            </div>
        </div>
    </div>

    <!--Modifier Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="d-flex align-items-center justify-content-between head">
                    <h5 id="exampleModalLabel">Modifier une marque</h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fa-solid fa-xmark"></i></button>
                </div>
                <form action="{{ route('mar.edite') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body px-1">
                        <input type="hidden" name="mar_idE" id="mar_id">
                        <input type="hidden" name="old_img" id="old_img">
                        <div class="info-inner mb-4">
                            <label for="Nom" class="d-block m-1">Nom</label>
                            <input type="text" name="mar_nomE" id="mar_nom" class="w-100">
                        </div>
                        <div class="info-inner">
                            <label for="Nom" class="d-block m-1">Logo</label>
                            <input type="file" name="mar_imgE" id="mar_img" class="w-100">
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-5">
                        <button class="btn bg-secondary text-white" type="button" data-bs-dismiss="modal">Annuler</button>
                        <button class="btn bg-success text-white" type="submit">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@endsection
