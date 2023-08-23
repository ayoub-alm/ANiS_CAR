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
    </div>
     --}}


    <div class="container pt-5 border border-secondary-subtle"  style="box-shadow: 1px 1px 4px lightgrey;">

          <div class="row">
            <div class="col-lg-6 " style="position: sticky;">
                <img class="img-fluid" src="{{ asset($car->img)}}" alt="">
            </div>


            <div class="col-lg-6 p-3">
                    <h2 class="display-6 mb-3 text-center">
                        {{$car->name}} <br>
                        <p>{{$car->fullDescription->model}}</p>
                    </h2>     
                    
                    
                    <ul class="h5 ml-5 "> <span class="h6">Options</span>
                      @if($car->fullDescription->audio_input)
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-check2-square" viewBox="0 0 16 16">
                            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                            <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                          </svg> 
                              audio
                        </li>                  
                        @endif
                        {{-- Clima --}}
                        @if($car->fullDescription->clim)
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-check2-square" viewBox="0 0 16 16">
                            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                            <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                          </svg> 
                              Clima
                        </li>                  
                        @endif
                          {{-- Direction assistée --}}
                          @if($car->fullDescription->audio_input)
                          <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-check2-square" viewBox="0 0 16 16">
                              <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                              <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                            </svg> 
                            Direction assistée
                          </li>                  
                          @endif
                          {{-- Sacs de couchage --}}
                          @if($car->fullDescription->audio_input)
                          <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-check2-square" viewBox="0 0 16 16">
                              <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                              <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                            </svg> 
                            Sacs de couchage
                          </li>                  
                          @endif

                          {{-- Vitres électriques --}}
                          @if($car->fullDescription->audio_input)
                          <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-check2-square" viewBox="0 0 16 16">
                              <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                              <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                            </svg> 
                            Vitres électriques
                          </li>                  
                          @endif
                               
                          {{--  Trousse mains libres --}}
                          @if($car->fullDescription->audio_input)
                          <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-check2-square" viewBox="0 0 16 16">
                              <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                              <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                            </svg> 
                            Trousse mains libres
                          </li>                  
                          @endif
                                  {{--  Verrouillage centralisé --}}
                            @if($car->fullDescription->audio_input)
                            <li>
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
    
      <div class="row property-main col-lg-6 pb-5 pt-5 p-lg-5 border-secondary-subtle" style="box-shadow: 1px 1px 8px lightgrey;background: #559fee3e;">

        <h2 class="h2"  style="color:#559FEE;">
          Infs de reservation
        </h2>
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
            <div class="form-group col-lg-12">
              <label for="">Plage de dates</label>
              <input type="date" id="range-date" class="border-secondary-subtle form-control" placeholder="sélectionner une plage de dates">
              <br>
            </div>
            
            <button class="col-6 form-group btn btn-common " onclick="test()">
              {{-- <a href="{{route('user.cars.show' , $car->uuid) }}" class="btn btn-common " style="width: 100%;"> --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-square mx-3" viewBox="0 0 16 16">
                  <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                  <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                </svg>
                Reserve
              {{-- </a> --}}
            </button>
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

    function test(){
      alert('test')
    }
    let start_location = '';
    let end_location = '';

    let start_date = '';
    let end_date = '';

    let start_time = '';
    let end_time = '';

    const startLocationInput = document.getElementById("start-location");
    const endLocationInput = document.getElementById("end-location");

    startLocationInput.addEventListener("change", function(event) {
      const location = event.target.value;
      start_location = location;
      console.log("Start Location:", location);
    });

    endLocationInput.addEventListener("change", function(event) {
      const location = event.target.value;
      end_location = location;
      console.log("End Location:", location);
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
          console.log("Start Date:", startDate);
          console.log("End Date:", endDate);
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


  </script>

<a href="" class="back-to-top" style="display: none;">
  <i class="lni-chevron-up"></i>
  </a>
  
  <div id="preloader" style="display: none;">
  <div class="loader" id="loader-1"></div>
  </div>
  
@endsection