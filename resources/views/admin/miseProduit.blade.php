@extends('layouts.app')
@section('pro-title')
    <title>Produits</title>
@endsection
@section('content')
    @extends('admin/adminBar')
@section('admin_content')
    <div class="container cat-cont">
        <div class="content-title d-flex align-items-center mb-5">
            <i class="uil uil-box"></i>
            <span class="text ms-3">Produits</span>
        </div>
        <div class="col-12">
            <div class="row align-items-center justify-content-between pe-1">
                <div class="col-12 col-sm-3 content-searsh mb-3 mb-sm-4">
                    <label for="" class="d-block">Nom :</label>
                    <input type="text" name="pro_searsh" id="pro_searsh" autocomplete="off" onkeyup='ProSearch()' placeholder="Rechercher">
                </div>
                <div class="col-12 col-sm-3 content-searsh mb-3 mb-sm-4">
                    <label for="" class="d-block">Categorie :</label>
                    <input type="text" name="pro_searsh" id="pro_searsh_cat" autocomplete="off" onkeyup='ProCatSearch()' placeholder="Rechercher">
                </div>
                <div class="col-12 col-md-3 content-searsh mb-3 mb-sm-4">
                    <label for="" class="d-block">Marque :</label>
                    <input type="text" name="pro_searsh" id="pro_searsh_mar" autocomplete="off" onkeyup='ProMarSearch()' placeholder="Rechercher">
                </div>
                <div class="col-12 col-xl-3 text-start text-xl-end mb-4 mb-sm-0">
                    <button class="btn text-white" data-bs-toggle="modal" data-bs-target="#ajouterModel">Nouveau
                        produit</button>
                </div>
            </div>
            <div class="table-all">
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Nom</th>
                            <th>Categories</th>
                            <th>Marques</th>
                            <th>Prix</th>
                            <th>Est<span class="ms-1">médical</span></th>
                            <th>Disponible</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody class="allData" id="myTablePro">
                        @foreach ($pros as $item)
                            <tr>
                                <td class="show_detais" data-bs-toggle="modal" data-bs-target="#detaisModal"
                                    class="show-detais"><img src="{{ asset($item->img_p_1) }}" alt="{{ $item->nom_P }}"
                                        width="100px"></td>
                                <td class="show_detais" data-bs-toggle="modal" data-bs-target="#detaisModal"
                                    class="show-detais">
                                    {{ $item->nom_P }}
                                </td>
                                <td class="show_detais" data-bs-toggle="modal" data-bs-target="#detaisModal"
                                    class="show-detais">
                                    {{ $item->categorie }}</td>
                                <td class="show_detais" data-bs-toggle="modal" data-bs-target="#detaisModal"
                                    class="show-detais">
                                    {{ $item->marque }}
                                </td>
                                <td hidden>{{ $item->description_P }}</td>
                                <td hidden>{{ $item->recomendation_P }}</td>
                                <td class="show_detais" data-bs-toggle="modal" data-bs-target="#detaisModal"
                                    class="show-detais">
                                    {{ $item->prix_P }}<span class="ms-1">DH</span></td>
                                <td hidden>{{ $item->is_medical }}</td>
                                <td hidden>{{ $item->disponible }}</td>
                                <td hidden>{{ $item->id }}</td>
                                <td hidden>{{ $item->id_C }}</td>
                                <td hidden>{{ $item->id_M }}</td>
                                <td hidden>{{ $item->image_M }}</td>
                                <td hidden>{{ $item->img_p_1 }}</td>
                                <td hidden>{{ $item->img_p_2 }}</td>
                                <td hidden>{{ $item->img_p_3 }}</td>
                                <td hidden>{{ $item->img_p_4 }}</td>
                                @if ($item->is_medical == true)
                                    <td class="show_detais" data-bs-toggle="modal" data-bs-target="#detaisModal"
                                        class="show-detais">
                                        <h6 class="text-primary">Oui</h6>
                                    </td>
                                @else
                                    <td class="show_detais" data-bs-toggle="modal" data-bs-target="#detaisModal"
                                        class="show-detais">
                                        <h6 class="text-danger">Non</h6>
                                    </td>
                                @endif
                                @if ($item->disponible == true)
                                    <td class="show_detais" data-bs-toggle="modal" data-bs-target="#detaisModal"
                                        class="show-detais"><i class="fa-solid fa-circle-check text-success fs-4"></i></td>
                                @else
                                    <td class="show_detais" data-bs-toggle="modal" data-bs-target="#detaisModal"
                                        class="show-detais"><i class="fa-solid fa-ban text-danger fs-4"></i></td>
                                @endif
                                <td><a href="#" class="EditeBtn" data-bs-toggle="modal"
                                        data-bs-target="#modifierModel"><i class="fa-solid fa-pen-clip"></i></a></td>
                                <td><a href="{{ route('misePro.delete', $item->id) }}" class="DeleteBtn"><i
                                            class="fa-solid fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tbody id="cont_searsh" class="searshData"></tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Ajouter Modal -->
    <div class="modal fade" id="ajouterModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="d-flex align-items-center justify-content-between head">
                    <h5 class="modal-title d-flex align-items-center" id="exampleModalLabel"><i
                            class="fa-solid fa-square-plus fs-2 me-2"></i>Ajouter Nouveau Produit</h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fa-solid fa-xmark"></i></button>
                </div>
                <form action="{{ route('misePro.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body row justify-content-between">
                        <div class="col-12 col-lg-6 pe-0 pe-lg-4">
                            <div class="info-inner">
                                <label for="nom_P" class="d-block">Nom</label>
                                <input type="text" name="nom_P" id="nom_P" class="w-100" autocomplete="off" required>
                            </div>
                            <div class="info-inner">
                                <label for="categories" class="d-block">Categories</label>
                                <select name="categories" id="categories" class="w-100" required>
                                    <option value="" disabled selected>Choisier une categorie</option>
                                    @foreach ($cats as $item)
                                        <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="info-inner">
                                <label for="marques" class="d-block">Marques</label>
                                <select name="marques" id="marques" class="w-100" required>
                                    <option value="" disabled selected>Choisier une marque</option>
                                    @foreach ($mars as $item)
                                        <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="info-inner">
                                <label for="" class="d-block">Description</label>
                                <textarea name="description_P" id="" cols="30" rows="3" class="w-100" autocomplete="off" required></textarea>
                            </div>
                            <div class="info-inner">
                                <label for="" class="d-block">Recomendation</label>
                                <textarea name="recomendation_P" id="" cols="30" rows="3" class="w-100" autocomplete="off" required></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 ps-0 ps-lg-4">
                            <div class="info-inner">
                                <label for="img_p_1">Photo 1</label>
                                <input type="file" name="img_p_1" id="img_p_1" class="w-100" required>
                            </div>
                            <div class="info-inner">
                                <label for="img_p_2">Photo 2</label>
                                <input type="file" name="img_p_2" id="img_p_2" class="w-100">
                            </div>
                            <div class="info-inner">
                                <label for="img_p_3">Photo 3</label>
                                <input type="file" name="img_p_3" id="img_p_3" class="w-100">
                            </div>
                            <div class="info-inner">
                                <label for="img_p_4">Photo 4</label>
                                <input type="file" name="img_p_4" id="img_p_4" class="w-100">
                            </div>
                            <div class="info-inner">
                                <label for="prix_P" class="d-block">Prix</label>
                                <input type="number" name="prix_P" id="prix_P" class="w-100" autocomplete="off" required>
                            </div>
                            <div class="info-inner d-flex align-items-center justify-content-around mt-5">
                                <div class="info-ite d-flex"">
                                    <label>Est médical :</label>
                                    <label class="toggle" for="is_medical">
                                        <input type="checkbox" name="is_medical" class="toggle__input" id="is_medical">
                                        <div class="toggle__fill"></div>
                                    </label>
                                </div>
                                <div class="info-item d-flex">
                                    <label>Disponible :</label>
                                    <label class="toggle" for="disponible">
                                        <input type="checkbox" name="disponible" class="toggle__input" id="disponible">
                                        <div class="toggle__fill"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-3 mt-lg-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-success">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- modifier Modal -->
    <div class="modal fade" id="modifierModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="d-flex align-items-center justify-content-between head">
                    <h5 class="modal-title d-flex align-items-center" id="exampleModalLabel"><i
                            class="fa-solid fa-square-pen fs-2 me-2"></i>Modifier un produit</h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fa-solid fa-xmark"></i></button>
                </div>
                <form action="{{ route('misePro.edite') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body row justify-content-between">
                        <div class="col-12 col-lg-6 pe-0 pe-lg-4">
                            <input type="hidden" name="pro_idE" id="pro_idE">
                            <div class="info-inner">
                                <label for="nom_PE" class="d-block">Nom</label>
                                <input type="text" name="nom_PE" id="nom_PE" class="w-100">
                            </div>
                            <div class="info-inner">
                                <label for="categoriesE" class="d-block">Categories</label>
                                <select name="categoriesE" id="categoriesE" class="w-100">
                                    @foreach ($cats as $item)
                                        <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="info-inner">
                                <label for="marquesE" class="d-block">Marques</label>
                                <select name="marquesE" id="marquesE" class="w-100">
                                    @foreach ($mars as $item)
                                        <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="info-inner">
                                <label for="description_PE" class="d-block">Description</label>
                                <textarea name="description_PE" id="description_PE" cols="30" rows="3" class="w-100"></textarea>
                            </div>
                            <div class="info-inner">
                                <label for="recomendation_PE" class="d-block">Recomendation</label>
                                <textarea name="recomendation_PE" id="recomendation_PE" cols="30" rows="3" class="w-100"></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 ps-0 ps-lg-4">
                            <div class="info-inner">
                                <label for="img_p_1E">Photo 1</label>
                                <input type="file" name="img_p_1E" id="img_p_1E" class="w-100">
                                <input type="hidden" name="old_img_1" id="old_img_1">
                            </div>
                            <div class="info-inner">
                                <label for="img_p_2E">Photo 2</label>
                                <input type="file" name="img_p_2E" id="img_p_2E" class="w-100">
                                <input type="hidden" name="old_img_2" id="old_img_2">
                            </div>
                            <div class="info-inner">
                                <label for="img_p_3E">Photo 3</label>
                                <input type="file" name="img_p_3E" id="img_p_3E" class="w-100">
                                <input type="hidden" name="old_img_3" id="old_img_3">
                            </div>
                            <div class="info-inner">
                                <label for="img_p_4E">Photo 4</label>
                                <input type="file" name="img_p_4E" id="img_p_4E" class="w-100">
                                <input type="hidden" name="old_img_4" id="old_img_4">
                            </div>
                            <div class="info-inner">
                                <label for="prix_PE" class="d-block">Prix</label>
                                <input type="number" name="prix_PE" id="prix_PE" class="w-100">
                            </div>
                            <div class="info-inner d-flex align-items-center justify-content-around mt-5">
                                <div class="info-item d-flex">
                                    <label>Est médical :</label>
                                    <label class="toggle" for="is_medicalE">
                                        <input type="checkbox" name="is_medicalE" class="toggle__input"
                                            id="is_medicalE">
                                        <div class="toggle__fill"></div>
                                    </label>
                                </div>
                                <div class="info-item d-flex">
                                    <label for="disponibleE">Disponible :</label>
                                    <label class="toggle" for="disponibleE">
                                        <input type="checkbox" name="disponibleE" class="toggle__input"
                                            id="disponibleE">
                                        <div class="toggle__fill"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-3 mt-lg-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-success">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--Detais Modal -->
    <div class="modal fade" id="detaisModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="d-flex align-items-center justify-content-between head">
                    <h5 class="modal-title" id="exampleModalLabel">Detais Produit</h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="modal-body row p-0">
                    <div class="col-12 col-lg-6 mb-4">
                        <div class="mt-3">
                            <div class="row">
                                <div class="col-6 mb-2">
                                    <img src="" alt="" id="d_img_1" width="100%">
                                </div>
                                <div class="col-6 mb-2">
                                    <img src="" alt="" id="d_img_2" width="100%">
                                </div>
                                <div class="col-6 mb-2">
                                    <img src="" alt="" id="d_img_3" width="100%">
                                </div>
                                <div class="col-6 mb-2">
                                    <img src="" alt="" id="d_img_4" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 ps-0 ps-lg-4">
                        <div class="pro-info">
                            <span class="cat-det mb-4" id="d_categorie"></span>
                            <h1 class="nom-det mb-4" id="d_nom"></h1>
                            <span class="dispo mb-4" id="d_disponible"></span>
                            <h4 class="prix-det mb-5" id="d_prix"></h4>
                            <div class="descri" id="descri">
                                <h6>Description :</h6>
                                <p id="d_description"></p>
                                <h6>recommandations :</h6>
                                <p id="d_recomendation"></p>
                            </div>
                            <div class="show-more text-center mt-2" id="show-more">
                                <span id="show">montre plus</span>
                                <i class="fa-solid fa-chevron-down" id="down"></i>
                            </div>
                            <div class="row align-items-center mt-3 marq-det mb-3">
                                <div class="col-5 text-start">
                                    <h6>Marque de produit :</h6>
                                </div>
                                <div class="col-6 text-start">
                                    <img src="" alt="" id="d_image_M" width="130px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@endsection
