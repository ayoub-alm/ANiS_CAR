@extends('layouts.admin')

@section('content')

 <div class="container">
   <!-- Ajouter une voiture -->
   <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ajouter une voiture</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.cars.store')}}"  enctype="multipart/form-data">
        @csrf
        <div class="row">
            {{-- nom de voiture  --}}
            <div class="form-group col-lg-6">
                <label for="">nom du voiture</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" >
            </div>
            {{-- matricule --}}
            <div class="form-group col-lg-6">
                <label for="">Matricule</label>
                <input type="text" name="matricule" id="" class="form-control" placeholder="" >
            </div>
                <div class="form-group col-lg-6">
                <label for="">Image</label>
                <input type="file" name="img" id="" class="form-control" placeholder="" >
            </div>
            {{-- price --}}
            <div class="form-group col-lg-6">
                <label for="">Prix -7J </label>
                <input type="number" name="price_per_day" id="" class="form-control" placeholder=""  step="0.1">
            </div>

            <div class="form-group col-lg-6">
                <label for="">Prix pour  un semaine et plus </label>
                <input type="number" name="price_per_week" id="" class="form-control" placeholder=""  step="0.1">
            </div>

             <div class="form-group col-lg-6">
                <label for="">Prix pour  1 mois et plus </label>
                <input type="number" name="price_per_mounth" id="" class="form-control" placeholder=""  step="0.1">
            </div>
             {{-- Model --}}
            <div class="form-group col-lg-6">
                <label for="">Model</label>
                <input type="text" name="model" id="" class="form-control" placeholder="" >
            </div>

            {{-- Color --}}
             <div class="form-group col-lg-6">
                <label for="">Coleur</label>              
                <select class=" select2 col-lg-6 form-control-lg" aria-label="" name="color" style="width: 100%;height: 1.5rem;">
                    <option value="Black" selected >Noir</option>
                    <option value="white">Blanche</option>
                    <option value="yellow">Jaune</option>
                    <option value="red">Rouge</option>
                    <option value="blue">Blue</option>
                    <option value="green">Vert</option>
                    <option value="ornage">Orange</option>
                    <option value="gray ">Gree</option>
                    <option value="brown">Marron</option>
                    <option value="pink">Rose</option>
                    <option value="purple">Violet</option>
                </select>
            </div>

             {{-- Year --}}
            <div class="form-group col-lg-6">
                <label for="">Année</label>
                <input type="number" min="1900" max="2099" step="1" value="2016" class="form-control"  name="year" >
            </div>
            {{-- Categorie --}}
            <div class="form-group col-lg-6">
                <label for="">Categories</label>              
                <select class=" select2 col-lg-6 form-control-lg" aria-label="" name="categories_id" style="width: 100%;height: 1.5rem;">
                    <option selected >select ..</option>
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{  $categorie->name }}</option>
                        @endforeach
                 </select>
            </div>

            {{-- brand --}}
            <div class="form-group col-lg-6">
                <label for="">Marque</label>              
                <select class=" select2 col-lg-6 form-control-lg" aria-label="" name="brand" style="width: 100%;height: 1.5rem;">
                    <option selected disabled>Marque</option>
                    <option value="1">Dacia</option>
                    <option value="2">Fait</option>
                    <option value="3">Renult</option>
                </select>
            </div>
            {{-- status --}}
             <div class="form-group col-lg-6">
                <label for="">Status</label>              
                <select class=" select2 col-lg-6 form-control-lg" aria-label="" name="state" style="width: 100%;height: 1.5rem;">
                    <option selected disabled>status</option>
                    <option value="1">Desctive</option>
                    <option value="2">Active</option>
                    <option value="3">En attente d'arrivée</option>
                </select>
            </div>

            {{-- Fuel --}}
             <div class="form-group col-lg-6">
                <label for="">Feul type</label>              
                <select class=" select2 col-lg-6 form-control-lg" aria-label="" name="Fuel" style="width: 100%;height: 1.5rem;">
                    <option  selected disabled>Feul type</option>
                    <option value="gasoline">Gasoline</option>
                    <option value="diesel">Diesel</option>
                    <option value="electric">Electric</option>
                    <option value="hybrid">Hybrid</option>
                </select>
            </div>
            {{-- Transmission type --}}
            <div class="form-group col-lg-6">
                <label for="">Type de transmission</label>              
                <select class=" select2 col-lg-6 form-control-lg" aria-label="" name="Transmission_type" style="width: 100%;height: 1.5rem;">
                    <option value="">Select...</option>
                    <option value="manual">Manual</option>
                    <option value="automatic">Automatic</option>
                    <option value="cvT">CVT (Continuously Variable Transmission)</option>
                    <option value="dual_clutch">Dual-Clutch</option>
                </select>
            </div>

              {{-- vitess --}}
            <div class="form-group col-lg-6">
                <label for="">Vitess</label>              
                <select class=" select2 col-lg-6 form-control-lg" aria-label="" name="vitess_number" style="width: 100%;height: 1.5rem;">
                    <option value="">Select...</option>
                    <option value="4">4 Gears</option>
                    <option value="5">5 Gears</option>
                    <option value="6">6 Gears</option>
                    <option value="7">7 Gears</option>
                </select>
            </div>
            {{-- Doors --}}
            <div class="form-group col-lg-6">
                <label for="">portes</label>              
                <select class=" select2 col-lg-6 form-control-lg" aria-label="" name="dors_numbers" style="width: 100%;height: 1.5rem;">
                        <option value="">Select...</option>
                        <option value="2">2 portes</option>
                        <option value="3">3 portes</option>
                        <option value="4">4 portes</option>
                        <option value="5">5 portes</option>
                </select>
            </div>
            {{-- Year --}}
            <div class="form-group col-lg-6">
                <label for="">.</label>
                <input type="text" min="1900" max="2099" step="1" value="" class="form-control"  name="" disabled >
            </div>
            {{-- clima --}}
            <div class="col-lg-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="power_steering" name="clim">
                    <label class="form-check-label" for="clim">Clima</label>
                </div>
            </div>
            {{-- direction assisstee --}}
            <div class="col-lg-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="power_steering" name="power_steering" value="1">
                    <label class="form-check-label" for="power_steering">Direction assistée</label>
                </div>
            </div>
            {{-- audio inputs --}}
            <div class="col-lg-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="audio_input" name="audio_input">
                    <label class="form-check-label" for="audio_input">Audio Input</label>
                </div>
            </div>
            {{-- sac de couchage --}}
            <div class="col-lg-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="sleeping_bags" name="sleeping_bags">
                    <label class="form-check-label" for="sleeping_bags">Sacs de couchage</label>
                </div>
            </div>
            {{-- vitre electrique --}}
            <div class="col-lg-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="electric_windows" name="electric_windows">
                    <label class="form-check-label" for="electric_windows">Vitres électriques</label>
                </div>
            </div>
            {{--  verrouillage centralise --}}
            <div class="col-lg-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="central_locking" name="central_locking">
                    <label class="form-check-label" for="central_locking"> Verrouillage centralisé</label>
                </div>
            </div>
            {{-- free-hands pack --}}
            <div class="col-lg-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="hands_free_kit" name="hands_free_kit">
                    <label class="form-check-label" for="hands_free_kit">Trousse mains libres</label>
                </div>
            </div>
            {{-- description --}}
            <br>    <br>
            <div class="form-floating col-lg-12">
                <label for="">Description</label>
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            </div>
            </div>
            <br>
            {{-- subimte Button  --}}
            <button type="submit" class="btn btn-primary col-lg-6" >Ajouter</button>
         </div>
      </form>
</div>
 </div>



@endsection