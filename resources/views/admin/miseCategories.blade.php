@extends('layouts.app')
@section('cat-title')
    <title>Categories</title>
@endsection
@section('content')
    @extends('admin/adminBar')
@section('admin_content')
    <div class="container cat-cont">
        <div class="content-title d-flex align-items-center mb-5">
            <i class="uil uil-files-landscapes"></i>
            <span class="text ms-3">Categories</span>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8 pe-0 pe-lg-5 mb-5 mb-lg-0">
                <div class="content-searsh mb-4">
                    <label for="" class="d-block">Rechercher :</label>
                    <input type="text" name="cat_searsh" id="cat_searsh" autocomplete="off" onkeyup='CatSearch()'">
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
                                <th>Nom</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody class="allData" id="myTableCat">
                            @foreach ($cats as $row => $item)
                                <tr>
                                    <td>{{ $row = $row + 1 }}</td>
                                    <td hidden>{{ $item->id }}</td>
                                    <td id="cat_nom">{{ $item->nom }}</td>
                                    <td><a href="#" class="EditeBtn" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="fa-solid fa-pen-clip"></i></a></td>
                                    <td><a href="{{ route('cat.delete', $item->id) }}" class="DeleteBtn"><i
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
                    <h5 class="mt-1 ms-2">Nouveau Categorie</h5>
                </div>
                <form action="{{ route('cat.store') }}" method="POST">
                    @csrf
                    <div class="form-info mb-3">
                        <label for="cat_name" class="d-block">Nom :</label>
                        <input type="text" id="cat_name" name="cat_name" autocomplete="off" required>
                    </div>
                    <button type="submit" class="btn text-white">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
    <!--Modifier Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="d-flex align-items-center justify-content-between head">
                    <h5 id="exampleModalLabel">Modifier une categorie</h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fa-solid fa-xmark"></i></button>
                </div>
                <form action="{{ route('cat.edite') }}" method="POST">
                    @csrf
                    <div class="modal-body px-1">
                        <div class="info-inner">
                            <label for="Nom" class="d-block m-1">Nom :</label>
                            <input type="hidden" name="cat_id" id="cat_idE">
                            <input type="text" name="cat_nom" id="cat_nomE" class="w-100" required>
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
