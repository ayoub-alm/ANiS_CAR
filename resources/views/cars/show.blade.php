@extends('layouts.app')

@section('content')

    
    
    
    {{-- <div id="page-banner-area" class="page-banner">
    <div class="page-banner-title">
    <div class="text-center">
    <h2>Grid Listing</h2>
    <a href="#"><i class="lni-home"></i> Home</a>
    <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
    <span class="current">Grid Listing</span>
    </div>
    </div>
    </div> --}}
     


    <div class="container-fluid pt-1 border "  style="background: white;border-radius: 20px;"  >

          <div class="row">
            <div class="col-lg-6 " style="position: sticky;">
                <img class="img-fluid" src="{{ asset($car->img)}}" alt="" id="car-img" data-action="zoom" 
                id="zoom-image">
            </div>


            <div class="col-lg-6 p-3">
                    <div class="row text-start">
                      <h2 class="display-6 mb-3  col-lg-6" style="color:#fae041;font-family: 'Bangers', cursive;', sans-serif;">
                        {{$car->name}} <br>
                        <p>{{$car->fullDescription->model}}</p>
                      </h2>
                      <h2 class="h4 mb-3 text-center col-lg-6">
                        {{$car->price}} <span style="color: #3d3d3d8b;font-size: 0,5rm;">DH/jour </span>
                      </h2>
                    </div>     
                    
                    
                    <ul class="h5 ml-5 row "> <span class="h6">Options</span>
                      @if($car->fullDescription->audio_input)
                        <li class="col-lg-3 mt-3">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-check2-square" viewBox="0 0 16 16">
                            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                            <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                          </svg> 
                              audio
                        </li>                  
                        @endif
                        {{-- Clima --}}
                        @if($car->fullDescription->clim)
                        <li class="col-lg-3 mt-3">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-check2-square" viewBox="0 0 16 16">
                            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                            <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                          </svg> 
                              Clima
                        </li>                  
                        @endif
                          {{-- Direction assistée --}}
                          @if($car->fullDescription->audio_input)
                          <li class="col-lg-3 mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-check2-square" viewBox="0 0 16 16">
                              <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                              <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                            </svg> 
                            Direction assistée
                          </li>                  
                          @endif
                          {{-- Sacs de couchage --}}
                          @if($car->fullDescription->audio_input)
                          <li class="col-lg-3 mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-check2-square" viewBox="0 0 16 16">
                              <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                              <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                            </svg> 
                            Sacs de couchage
                          </li>                  
                          @endif

                          {{-- Vitres électriques --}}
                          @if($car->fullDescription->audio_input)
                          <li class="col-lg-3 mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-check2-square" viewBox="0 0 16 16">
                              <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                              <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                            </svg> 
                            Vitres électriques
                          </li>                  
                          @endif
                               
                          {{--  Trousse mains libres --}}
                          @if($car->fullDescription->audio_input)
                          <li class="col-lg-3 mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-check2-square" viewBox="0 0 16 16">
                              <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                              <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                            </svg> 
                            Trousse mains libres
                          </li>                  
                          @endif
                                  {{--  Verrouillage centralisé --}}
                            @if($car->fullDescription->audio_input)
                            <li class="col-lg-3 mt-3">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-check2-square" viewBox="0 0 16 16">
                                <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                                <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                              </svg> 
                                Verrouillage centralisé
                            </li>                  
                            @endif
                    </ul>

<br>
<br>
<br>
                    
    </div>


    <div class="container">
      <div class="row">
      <div class="col-lg-6 " >
        <div class="row property-main  m-2 border-secondary-subtle p-5" style="box-shadow: 1px 1px 4px lightgrey;border-radius:10px;" >
          <br>
          <h2 class="h2"  >
            Infs de reservation
          </h2>
          <br>
          {{--  lieux de depart --}}
          <div class="form-group col-lg-6">
              <label for="">lieux de depart</label>
              <input type="text" name="" id="start_input" class="border-secondary-subtle form-control" placeholder="" aria-describedby="helpId">
          </div>
            {{-- lieu de recuperation --}}
          <div class="form-group col-lg-6">
                <label for="">lieu de recuperation</label>
                <input type="text" name="" id="end_input" class=" border-secondary-subtle form-control" placeholder="" aria-describedby="helpId">
          </div>
              {{-- Plage de dates --}}
              
          <div class="form-group col-lg-12 mt-3">
                <label for="">Plage de dates</label>
                <input type="date" id="range-date" class="border-secondary-subtle form-control" placeholder="sélectionner une plage de dates">
                <br>
          </div>
              <button class="col-6 form-group btn btn-common m-3 " onclick="reserver()">
                {{-- <a href="{{route('user.cars.show' , $car->uuid) }}" class="btn btn-common " style="width: 100%;"> --}}
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-square mx-3" viewBox="0 0 16 16">
                    <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                    <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                  </svg>
                  Reserve
                {{-- </a> --}}
              </button>
            </div>
        </div>

        
        <div class="col-lg-6" >
          <ul class="list-group property-main  m-2 border-secondary-subtle p-5" style="display: none;border:solid 2px #0d6efd; " id="rent_info">
            <li class="list-group-item d-flex justify-content-between align-items-center ">
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Number des Jours <span  class="fw-bold" id="number_of_days"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              cout par Jour <span class="fw-bold" id="amount_of_days">{{$car->price}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center disabled">
              Lieux  de depart <span class="fw-bold" id="depart_lieux"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center disabled">
              Lieux de retoure     <span class="fw-bold" id="retour_lieux"></span>
            </li>
  
            <li class="list-group-item d-flex justify-content-between align-items-center disabled">
               Total a payer  <span class="fw-bold" id="total"></span>
            </li>
            <li class="mt-3">
              <form method="POST" action="{{ route('user.cars.validate_rent' , $car->id) }}" id="myForm">
                @csrf
                <button type="submit"  class="btn " style="background-color: #fae041;" >
                  passer au paiement 
                </button>
              </form>
              {{-- <a name="" id="" class="btn " style="background-color: #fae041;" href="#" role="button">passer au paiement </a> --}}
            </li>
          </ul>     
         </div> 
    </div>
</form>
</div>
</div>
</div>

   
   



{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js"></script>
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">


 
 <script>
    var start_location = '';
    var end_location = '';

    let start_date = '';
    let end_date = '';

    let start_time = '';
    let end_time = '';
    let car_price = {{ $car->price}}


    function getDateAndTimeStart(currentDate){
      const year = currentDate.getFullYear();
            const month = currentDate.getMonth() + 1; // Months are 0-indexed, so add 1
            const day = currentDate.getDate();
            const hour = currentDate.getHours();
            const minute = currentDate.getMinutes();
            const second = currentDate.getSeconds();
            // Format components as needed (add leading zeros if necessary)
            const formattedDate = `${year}-${month.toString().padStart(2, '0')}-${day.toString().padStart(2, '0')}`;
            const formattedTime = `${hour.toString().padStart(2, '0')}:${minute.toString().padStart(2, '0')}:${second.toString().padStart(2, '0')}`;
            start_date = formattedDate;
            start_time = formattedTime;
            appendInput('rental_start_date',start_date)
            appendInput('rental_start_heure',start_time)
    }
    
    function getDateAndTimeEnd(currentDate){
      const year = currentDate.getFullYear();
            const month = currentDate.getMonth() + 1; // Months are 0-indexed, so add 1
            const day = currentDate.getDate();
            const hour = currentDate.getHours();
            const minute = currentDate.getMinutes();
            const second = currentDate.getSeconds();
            // Format components as needed (add leading zeros if necessary)
            const formattedDate = `${year}-${month.toString().padStart(2, '0')}-${day.toString().padStart(2, '0')}`;
            const formattedTime = `${hour.toString().padStart(2, '0')}:${minute.toString().padStart(2, '0')}:${second.toString().padStart(2, '0')}`;
            start_date = formattedDate;
            end_time = formattedTime;
            
            appendInput('rental_end_date',start_date)
            appendInput('rental_end_heure',end_time)
    }

    function reserver(){

    }
   

    let startLocationInput = document.getElementById("start_input");
    let endLocationInput = document.getElementById("end_input");

    startLocationInput.addEventListener("change", function(event) {
      const location = event.target.value;
      start_location = event.target.value;
    });

    endLocationInput.addEventListener("change", function(event) {
      const location = event.target.value;
      end_location = event.target.value;
    });
   
    const disabledDateRanges = [
      { from: "2023-08-20", to: "2023-08-25" },
      { from: "2023-08-30", to: "2023-09-02" }
    ];

    // Initialize Flatpickr for the start and end date inputs
    const range = document.querySelector("#range-date");
  

    const fp = flatpickr(range, {
      mode: "range",
      disable:disabledDateRanges,
      minDate: "today",
      minTime: "08:00",
      maxTime: "22:00",
      time_24hr: true,
      enableTime: true,
      dateFormat: "Y-m-d",
      onClose: function (selectedDates) {
       
        if (selectedDates.length > 0) {
          // fpEnd.set("minDate", selectedDates[0]);
          const startDate = selectedDates[0];
          const endDate = selectedDates[1];
          getDateAndTimeStart(startDate);
          getDateAndTimeEnd(endDate);
       
          // Calculate the time difference in milliseconds
          const timeDifference = endDate - startDate;
          // Convert milliseconds to days
          const daysDifference = Math.floor(timeDifference / (1000 * 60 * 60 * 24)) + 1;
          let Total = car_price * daysDifference; 
          console.log(Total);
          document.getElementById('total').innerHTML  = Total + " DH";
          appendInput('total_cost',Total)
          document.getElementById('number_of_days').innerHTML  = daysDifference;
          document.getElementById('rent_info').style.display = "block";
          total_price = daysDifference * {{ $car->price}}
          document.getElementById('depart_lieux').innerHTML = start_location;
          document.getElementById('retour_lieux').innerHTML = end_location;

          // Scroll to the target element
          document.getElementById('rent_info').scrollIntoView();

        }
      },
    });

    fp.config.onValueUpdate = function(selectedDates) {
      const startDate = selectedDates[0];
      const endDate = selectedDates[1];
      if (endDate) {
        const highlightedDates = {
          from: startDate,
          to: endDate,
        };     
        fp.set("highlight", [highlightedDates]);
      }
    };



//************************************************************
    function appendInput(newInputName,valuee) {
    // Create a new input element
    const inputElement = document.createElement('input');

    // Set input attributes
    inputElement.type = 'hidden';
    inputElement.name = newInputName; // Set the name attribute
    inputElement.value = valuee // Optional: Set a placeholder

    // Get the form by its ID
    const form = document.getElementById('myForm');

    // Append the input element to the form
    form.appendChild(inputElement);
}
//************************************************************

  </script>

<a href="" class="back-to-top" style="display: none;">
  <i class="lni-chevron-up"></i>
</a>

@endsection