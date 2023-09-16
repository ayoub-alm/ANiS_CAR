@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col text-center" >
            <a href="{{ route('login')}}"><h3 > Avez vous déjà un compte?</h3></a>
        </div>
        <br><hr>
        
        <div class="col">
           <h3 class="h3">
            Détails de la facturation
           </h3>
           <hr>
        </div>

        <div class="row">
            {{-- last_name --}}
            <div class="form-group col-lg-8 mx-auto">
                <label for="last_name">Prenom</label>
                <input id="last_name" class="form-control" type="text" name="user_last_name">
                <br>
            </div>

            {{-- name --}}
            <div class="form-group col-lg-8 mx-auto">
                <label for="name">Nom</label>
                <input id="name" class="form-control" type="text" name="user_name">
                <br>
            </div>


             {{-- Phone number --}}
             <div class="form-group col-lg-8 mx-auto">
                <label for="phone_number">Telephone</label>
                <input id="phone_number" class="form-control" type="tel" name="phone_number">
                <br>
            </div>

             {{-- Email --}}
             <div class="form-group col-lg-8 mx-auto">
                <label for="email">Email</label>
                <input id="email" class="form-control" type="email" name="email">
                <br>
            </div>

             {{-- permis de conduire --}}
             <div class="form-group col-lg-8 mx-auto">
                <label for="permis">Permis de coduire</label>
                <input id="permis" class="form-control" type="file" name="permis">
                <br>
            </div>

              {{-- Passport  --}}
              <div class="form-group col-lg-8 mx-auto">
                <label for="Passport ">Permis de coduire</label>
                <input id="Passport " class="form-control" type="file" name="Passport">
                <br>
            </div>


            {{-- Create account  --}}
            <div class="form-check col-lg-8 mx-auto">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Creer un compte
                </label>
              </div>

        </div>


    </div>
</div>


@endsection