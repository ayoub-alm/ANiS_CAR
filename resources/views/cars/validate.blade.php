@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row " style="color: #ffffff;">
        <div class="col text-center" >
            <a href="{{ route('login')}}"><h3 class="mt-4" style="color: #ffffff" > Avez vous déjà un compte?</h3></a>
        </div>
        <br><hr>
        
        <div class="col">
           <h3 class="h3">
            Détails de la facturation
           </h3>
           <hr>
        </div>

        <form action="{{route('user.cars.confirm')}}"  method="POST" enctype="multipart/form-data">
            @csrf

        <div class="row py-4 px-1" >
            {{-- last_name --}}
            <div class="form-group col-lg-8 mx-auto">
                <label for="last_name">Prenom</label>
                <input id="last_name" class="form-control" type="text" name="driver1_last_name">
                <br>
            </div>

            {{-- name --}}
            <div class="form-group col-lg-8 mx-auto">
                <label for="name">Nom</label>
                <input id="name" class="form-control" type="text" name="driver1_name">
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


            <div class="form-group col-lg-8 mx-auto">
                <label for="address">Ville</label>
                <input id="text" class="form-control" type="address" name="address">
                <br>
            </div>

            <div class="form-group col-lg-8 mx-auto">
                <label for="city">Adress</label>
                <input id="city" class="form-control" type="text" name="city">
                <br>
            </div>


         

             {{-- permis de conduire --}}
             <div class="form-group col-lg-8 mx-auto">
                <label for="permis">Permis de coduire</label>
                <input id="permis" class="form-control" type="file" name="driver1_license">
                <br>
            </div>

              {{-- Passport  --}}
              <div class="form-group col-lg-8 mx-auto">
                <label for="Passport ">Cin</label>
                <input id="cin " class="form-control" type="file" name="driver1_cin">
                <br>
            </div>

            <div class="form-group col-lg-8 mx-auto" id="">
                <button type="button"  name="" id="toggleButton" class="btn  mx-auto" style="border: solid 2px #F4D160;border-radius: 20px;" >
                    Avec deuxiem condicteur ?
                </button>         
            </div>
            {{-- ************ condicteur 2 ****************** --}}
            <div id="elementToToggle" style="display:none;"> 

          
            {{--  name --}}
            <div class="form-group col-lg-8 mx-auto">
                <label for="last_name">Prenom</label>
                <input id="last_name" class="form-control" type="text" name="driver2_last_name">
                <br>
            </div>

            {{-- name --}}
            <div class="form-group col-lg-8 mx-auto">
                <label for="name">Nom</label>
                <input id="name" class="form-control" type="text" name="driver2_name">
                <br>
            </div>
            
      

        <div class="form-group col-lg-8 mx-auto secend_driver"  >
            <label for="permis">Permis de coduire <sup class="text-mute ml-1">deuxiem condicteur</sup></label>
            <input id="permis" class="form-control" type="file" name="driver2_license">
            <br>
        </div>

          {{-- Passport  --}}
          <div class="form-group col-lg-8 mx-auto secend_driver"  >
            <label for="Passport ">Cin <sub class="text-mute ml-1">deuxiem condicteur</sub></label>
            <input id="cin " class="form-control" type="file" name="driver2_cin">
            <br>
        </div>
 

    </div>

        {{-- Create account  --}}
           <div class="form-check col-lg-8 mx-auto m-4 pl-5" >
                 <label class="form-check-label  mx-2" for="defaultCheck1">
                    Creer un compte
                 </label>
              <input class="form-check-input  ml-4" type="checkbox" value="" id="defaultCheck1" style="transform: scale(2)"> 

            </div>

            <div class="form-check col-lg-8 mx-auto" >
                <br>
                <button class="form-group btn btn-common mt-4 " type="submit" style="width: 100%;border-radius: 20px;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-square mx-3" viewBox="0 0 16 16">
                        <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                        <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                      </svg>
                      Reserve
                  </button>
              </div>
           

              <input type="hidden" name="total_cost" id="" value="{{ $total_cost}}">
              <input type="hidden" name="rental_start_date" id="" value="{{$rental_start_date}}">
              <input type="hidden" name="rental_end_date" id="" value="{{$rental_end_date}}">
              <input type="hidden" name="rental_start_heure" id="" value="{{$rental_start_heure}}">
              <input type="hidden" name="rental_end_heure" id="" value="{{$rental_end_heure}}">
              <input type="hidden" name="user_id" id="" value="1">
              <input type="hidden" name="start_location" id="" value="{{ $start_location}}">
              <input type="hidden" name="end_location" id="" value="{{ $end_location}}">
              <input type="hidden" name="start_location" id="" value="{{ $start_location}}">
              <input type="hidden" name="end_location" id="" value="{{ $end_location}}">
              <input type="hidden" name="car_id" id="" value="{{ $car_id    }}">
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


<style>
    label{
        color: #ffffff;
    }
</style>

@endsection