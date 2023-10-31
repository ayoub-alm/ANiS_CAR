@extends('layouts.admin')
@section('content')

<div class="container">
    <!-- Ajouter une voiture -->
    <div class="card shadow mb-4">
     <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Créer une réservation.</h6>
     </div>
     <div class="card-body">
         <form method="POST" action="{{ route('admin.reservation.store')}}"  enctype="multipart/form-data">
         @csrf
         <div class="row">
            {{-- status --}}
            <div class="form-group col-lg-6">
                <label for="">Voiture</label>              
                <select class=" select2 col-lg-6 form-control-lg" aria-label="" name="car_id" style="width: 100%;height: 1.5rem;">
                    @foreach ($cars as  $car )
                    <option value="{{$car->id}}" >{{ $car->name . " " . $car->matricule}}</option> 
                    @endforeach
                </select>
            </div>
             {{-- rental_start_date  --}}
             <div class="form-group col-lg-6">
                 <label for="">Date de départ</label>
                 <input type="date" name="rental_start_date" id="" value="" class="form-control">
             </div>
               {{-- rental_start_time  --}}
            <div class="form-group col-lg-6">
                <label for="">Heure de départ</label>
                <input type="time" name="rental_start_heure" id="" value="" class="form-control">
            </div>

              {{-- rental_end_date  --}}
              <div class="form-group col-lg-6">
                <label for="">Date de fin</label>
                <input type="date" name="rental_end_date" id="" value="" class="form-control">
            </div>
             {{-- rental_end_time  --}}
            <div class="form-group col-lg-6">
                <label for="">Heure de fin</label>
                <input type="time" name="rental_end_heure" id="" value="" class="form-control">
            </div>

             {{-- Lieux de depart  --}}
             <div class="form-group col-lg-6">
                 <label for="">Lieux de départ </label>
                 <input type="text" name="start_location" id="" class="form-control" placeholder="" >
             </div>

            {{-- matricule --}}
            <div class="form-group col-lg-6">
                <label for="">Lieux de retour </label>
                <input type="text" name="end_location" id="" class="form-control" placeholder="" >
            </div>


            {{-- last_name --}}
            <div class="form-group col-lg-6">
                <label for="last_name">Prenom</label>
                <input id="last_name" class="form-control" type="text" name="driver1_last_name">
            </div>

            {{-- name --}}
            <div class="form-group col-lg-6">
                <label for="name">Nom</label>
                <input id="name" class="form-control" type="text" name="driver1_name">
            </div>


             {{-- Phone number --}}
             <div class="form-group col-lg-6">
                <label for="phone_number">Telephone</label>
                <input id="phone_number" class="form-control" type="tel" name="phone_number">

            </div>

             {{-- Email --}}
             <div class="form-group col-lg-6">
                <label for="email">Email</label>
                <input id="email" class="form-control" type="email" name="email">
            </div>


            <div class="form-group col-lg-6">
                <label for="address">Ville</label>
                <input id="text" class="form-control" type="address" name="address">

            </div>

            <div class="form-group col-lg-6">
                <label for="city">Adress</label>
                <input id="city" class="form-control" type="text" name="city">

            </div>


         

             {{-- permis de conduire --}}
             <div class="form-group col-lg-6">
                <label for="permis">Permis de coduire</label>
                <input id="permis" class="form-control" type="file" name="driver1_license">

            </div>

              {{-- Passport  --}}
              <div class="form-group col-lg-6">
                <label for="Passport ">Cin</label>
                <input id="cin " class="form-control" type="file" name="driver1_cin">
            </div>

            <div class="form-group col-lg-6">
                <label for="Passport "></label>
                <input id="cin " class="form-control" type="text" name="driver1_cin" disabled>
            </div>

            <div class="form-group col-lg-6" id="">
                <button type="button"  name="" id="toggleButton" class="btn  mx-auto" style="border: solid 2px #607bf4;border-radius: 20px;" >
                    Avec deuxiem condicteur ?
                </button>         
            </div>
            <hr><hr>
            <div class="form-group col-lg-6" id="">
              
            </div>
            {{-- ************ condicteur 2 ****************** --}}
            {{-- <div class="row" id="elementToToggle" style="display:none;">  --}}
            {{--  name --}}
            <div class="form-group col-lg-6">
                <label for="last_name">Prenom</label>
                <input id="last_name" class="form-control" type="text" name="driver2_last_name">
            </div>

            {{-- name --}}
            <div class="form-group col-lg-6">
                <label for="name">Nom</label>
                <input id="name" class="form-control" type="text" name="driver2_name">
            </div>
            
      

        <div class="form-group col-lg-6 secend_driver"  >
            <label for="permis">Permis de coduire <sup class="text-mute ml-1">deuxiem condicteur</sup></label>
            <input id="permis" class="form-control" type="file" name="driver2_license">
        </div>

          {{-- Passport  --}}
          <div class="form-group col-lg-6 secend_driver"  >
            <label for="Passport ">Cin <sub class="text-mute ml-1">deuxiem condicteur</sub></label>
            <input id="cin " class="form-control" type="file" name="driver2_cin">
        </div>

        {{-- Create account  --}}
           <div class="form-check col-lg-6 " >
                 <label class="form-check-label  mx-2" for="defaultCheck1">
                    Creer un compte
                 </label>
              <input class="form-check-input  ml-4" type="checkbox" value="" id="defaultCheck1" style="transform: scale(2)"> 
            </div>
 
             {{-- subimte Button  --}}
             <button type="submit" class="btn btn-primary col-lg-6" >Ajouter</button>
          </div>
       </form>
 </div>
  </div>
 
 
 
<script>

    document.addEventListener('DOMContentLoaded', function () {
        
        const toggleButton = document.getElementById('toggleButton');
        const elementToToggle = document.getElementById('elementToToggle');
       console.log(elementToToggle);
        // Add a click event listener to the button
        toggleButton.addEventListener('click', function () {
          // Toggle the element's visibility
          if (elementToToggle.style.display === 'none') {
            document.getElementById('elementToToggle').style.display = 'block';
          } else {
            elementToToggle.style.display = 'none';
          }
        });
    });
        
    </script>
 @endsection