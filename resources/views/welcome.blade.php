@extends('layouts.app')
@section('content')
{{-- <section id="intro" class="section-intro">
      <div class="search-container">
        <div class="container">
          <div class="row"> --}}
            {{-- <div class="col-md-12">
              <h4 class="intro-sub-heading">You are using Fre Lite Version!</h4>
              <h2 class="intro-title">Please, Make Purchase Full Version to Get All Pages and Features</h2>
              <a href="https://rebrand.ly/estatebit-purchase-ud" rel="nofollow" class="btn btn-danger btn-lg">PURCHASE NOW</a>
            </div> --}}
          {{-- </div>
        </div>
      </div>
    </section> --}}
 

  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> --}}

  <section class="container-fluid" style="background:url('https://www.ecorentacar.com/blog/wp-content/uploads/2019/09/Car-Image-800x445.jpg');background-repeat: no-repeat; background-size:cover;background-position: center;border-radius: 0px 0px 30px 30px ;overflow: hidden;position: relative;bottom: 60px;z-index: -2; opacity: 0.9;"> 
    <div class="row">
      <div class="h1 display-4 col-12 mx-auto my-auto " >
        <br>
        <h3 class="h6 display-6 mt-5 text-center " style="color: #ffffff;">
          ANIS AUTO
        </h3>
        {{-- <img src="https://www.nicepng.com/png/detail/330-3304412_png-transparent-car-car-rental-logo-png.png" class="img-fluid" alt=""> --}}
        <h2 class="display-6 text-center " style="color: #ffffff;">
          <span class="my-5 display-4"  id="contentSpan" style="color: #F4D160" ></span>
          <br>
          <span class="h1 text-center">
            Agence de location   <br>de voitures au Maroc
          </span>
        </h2>
        <h2 class="mt-4 text-center arrow" style="color: #F4D160;">
            <a name="" id="" class="btn arrow-btn " href="{{route('cars')}}" role="button" style="color: #ffff;">
              Nos Voitures
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
             </svg>
            </a>
        </h2>
        <br><br><br><br><br><br>
      </div>
<!-- 
      <div class="col-12 text-center "  >
        <p style="border-radius: 30px;">
          <img src="https://www.madeirarentcar.com/assets/homebanner/5cb748963fd74.png" class="img-fluid"  width="200%" />
        </p>
      </div> -->

      {{-- <div class="col-12 text-center"  >
        <p style="border-radius: 30px;overflow: hidden;">
          <img src="{{asset('./img/header_car1.png')}}" class="w-100" />
        </p>
      </div> --}}



      <script>
       const contenuListe = [
  "A7ssan ",
  "THE BEST",
  "LA MEILLEUR"
];

const spanElement = document.getElementById("contentSpan");
let index = 0;

function changerContenu() {
  spanElement.textContent = contenuListe[index];
  index = (index + 1) % contenuListe.length;
}

// Appeler la fonction pour la première fois
changerContenu();

// Changer le contenu toutes les 3 secondes
setInterval(changerContenu, 2000);
      </script>    
   </div>
  </section>



    <!-- Intro Section Start -->
    <div class=" search-container" style="border-radius: 30px;overflow: hidden;" >
      <div class="container"  >
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h2 class="section-title" >Chercher Votre Voiture</h2>
            </div>
          </div>
        </div>
        <div class="content" style="border-radius:20px;overflow: hidden;">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-12">
              <div class="search-category-container">
                <label class="styled-select">
                  <select class="classic">
                    <option>Categorie</option>
                    <option>Sport</option>
                    <option>Famille</option>
                    <option>Lux</option>
                  </select>
                </label>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
              <div class="search-category-container">
                <label class="styled-select">
                  <select class="classic">
                    <option>Marque</option>
                    <option>Apartments (3)</option>
                    <option>Houses (2)</option>
                    <option>Condos (1)</option>
                    <option>Industrial (2)</option>
                    <option>Land (3)</option>
                    <option>Offices (1)</option>
                    <option>Retail (2)</option>                              
                    <option>Villas (1)</option>
                  </select>
                </label>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
              <div class="search-category-container">
                <label class="styled-select">
                  <select class="classic">
                    <option>categories</option>
                    <option>Sport</option>
                    <option>Famille</option>
                    <option>Lux</option>
                  </select>
                </label>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
              <div class="text-right btn-section">
                <button type="button" class="btn btn-common"><i class="lni-search"></i> Chercher</button>
              </div>
            </div>
          </div>
          <div class="row range-slider option-hide" style="display: none;">
            <div class="col-lg-3 col-md-6 col-xs-12">
              <div class="search-category-container">
                <label class="styled-select">
                  <select class="classic">
                    <option>All Area</option>
                    <option>San Jose</option>
                    <option>Salt Lake City</option>
                    <option>Las Vegas</option>
                    <option>Boston</option>
                    <option>Tampa</option>
                    <option>Orlando</option>
                  </select>
                </label>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="search-category-container">
                  <label class="styled-select">
                    <select class="classic">
                      <option>Bedrooms</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>                              
                      <option>8</option>
                    </select>
                  </label>
                </div>
              </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
              <!-- Page contents -->
              <input type="text" id="range" value="" name="range" />
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
              <a href="#" class="show-options"> More options</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Intro Section End -->

    <!-- cars Section Start -->
    <section class="property section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h2 class="section-title">Top Voitures</h2>
            </div>
          </div>
        </div>
        <div class="row d-flex justify-content-center ">
       {{-- @foreach ($cars as $car)
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="property-main">
              <div class="property-wrap">
                <div class="property-item">
                  <div class="item-thumb">
                    <a class="hover-effect" href="{{route('user.cars.show' , $car->uuid) }}">
                      <img src="{{ asset($car->img)}}" class="img-fluid rounded-start " alt="...">
                    </a>
                    <div class="label-inner">
                      <span class="label-status label bg-green">For Sale</span>
                    </div>
                  </div>
                  <div class="item-body">
                    <h3 class="property-title"><a href="{{route('user.cars.show' , 1) }}">{{ $car->name}}</a></h3>
                    <div class="adderess"><i class="lni-map-marker"></i>{{ $car->categorie->name }}</div>
                    <div class="pricin-list">
                      <div class="property-price">
                        <span class="display-6">{{$car->price}} DH</span>
                      </div>
                    </div>
                  </div>               
                </div>              
              </div>
            </div>
          </div>
            @endforeach --}}
            @foreach ($cars as $car)
            <div class="card my-1 hover-effect col-lg-12 property-main  animate__animated "  style="border-radius: 30px;overflow: hidden;">
              <div class="row g-0">
                <div class="col-md-5 p-2 m-auto">
                  <a href="{{route('user.cars.show' , $car->uuid) }}">
                  <img src="{{ asset($car->img)}}" class="img-fluid rounded-start " alt="...">
                  </a>
                </div>
                <div class="col-md-4">
                  <div class="card-body">
                    <h5 class="card-title h1 text-center font-weight-bold" style="color:#454545;font-family: 'Bangers', cursive;', sans-serif;">{{$car->name}}  
                    </h5>
                    <div class="pricin-list">
                            
                      <div class="row d-flex justify-content-center p-3">
                          <div class="col-3  text-center box-icon m-1  ">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 409.71 341.41"><defs><style>.cls-1{fill:#F4D160;}</style></defs><g id="dQjmo8.tif"><path class="cls-1" d="M188.15.1Q296.89.1,405.62,0c3.42,0,4.09.67,4.09,4.08q-.18,154.56-.1,309.1C403.06,333.31,392,341.41,371,341.41H82.26c-24.37,0-42.4-13.14-49.44-36.31-10.18-33.52-20.59-67-30.12-100.67-6.31-22.32-1.49-43.08,13.79-60.5,25.41-29,51.36-57.49,77.28-86,10-11,19.1-23,31.36-31.94C144.06,12.24,165.18,3.92,188.15.1ZM215,153.2q76.28,0,152.56,0c6.77,0,7-.2,7-7,0-34.89-.06-69.77.08-104.65,0-4.75-1.57-6.37-6.36-6.36-57.17.12-114.34-.42-171.51.34-23.11.3-43.5,10-59.36,26.84-22.57,23.91-44.16,48.76-66.17,73.21-4.34,4.81-8.71,9.6-13,14.42-.63.7-1.73,1.44-1,2.48.39.52,1.45.65,2.22.72,1.32.11,2.66,0,4,0Zm126.12,67.89c9.45,0,18.91-.08,28.36,0,3.6.05,5.13-1.36,5.08-5-.1-7.62-.12-15.25,0-22.87.07-3.8-1.39-5.35-5.27-5.33q-28.11.17-56.22,0c-3.58,0-5.13,1.35-5.07,5,.12,7.62.13,15.25,0,22.88-.08,3.78,1.34,5.38,5.25,5.31C322.55,221,331.84,221.09,341.13,221.09Z"></path></g></svg>
                            4 portes
                          </div>

                          <div class="col-3  text-center box-icon m-1 ">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 409.71 341.41"><defs><style>.cls-1{fill:#F4D160;}</style></defs><path class="cls-1" d="M145,307c-25.78,0-51.49-.19-77.26.06-9.57.06-17.37-3.35-23.52-10.3a48,48,0,0,1-12.07-37.65c1.53-14.45,13.53-25.53,29.68-26.39,10.23-.61,20.59,1.1,30.89,1.77,17.61,1.1,35.4,3.72,52.88,2.56C162.28,235.92,178.73,231,195,227c7.8-1.88,15.35-5.42,22.66-8.77a58.83,58.83,0,0,1,30.23-5.54c7.61.61,13.52,4.51,18,10.54,13,17.79,11.4,50.26-4,65.92C250.81,300.57,237.1,307,221,307,195.67,307.09,170.38,307,145,307Z"></path><path class="cls-1" d="M104.88,218.43c-6.82-.85-13.65-1.89-20.41-2.31-10.48-.67-21-1.65-31.5-1.1-12.37.67-23,5.73-29.55,18.71-2.26-10.48-4.63-19.62-6.16-28.88C12.15,171.7,7,138.55,2.52,105.35c-2.68-19.62-3.9-39.49-.18-59A105.73,105.73,0,0,1,9.89,22.79C16,9.93,26.83,2.68,40.78.18,46-.73,49.62,2,52.66,5.6c6.65,7.8,8.66,17.19,9,27C62.11,49.9,57,65.92,49.74,81.28c-1.4,3-1,4.75,1.16,7.13,22.18,24.19,40.88,50.51,49.35,82.86,3.66,14,5.91,28.15,5.42,42.59a21.1,21.1,0,0,1-.24,3.36A4.27,4.27,0,0,1,104.88,218.43Z"></path></svg>
                            passager	
                          </div>

                          <div class="col-3  text-center box-icon m-1 ">
                          		<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 409.71 341.41"><defs><style>.cls-1{fill:#F4D160;}</style></defs><g id="_3MsPP4.tif" data-name="3MsPP4.tif"><path class="cls-1" d="M237.23,247.92H185a90,90,0,0,0-10.26-.19c-17.85-.07-35.69,0-53.54-.36-5.24-.11-9.7-1.3-13.78-5-10.34-9.31-21-18.34-30.65-28.34a4.31,4.31,0,0,0-3.39-1.43c-4.55.06-9.1.07-13.64,0a50.21,50.21,0,0,1-9.7-.93,11.36,11.36,0,0,1-8-6.15,20.36,20.36,0,0,1-2-9.62c-.08-8.86,0-17.73-.06-26.6,0-2-.16-2.19-2.22-2.2-3.25,0-6.51,0-9.76,0-2.52,0-2.57.07-2.59,2.52q-.18,15.15-.37,30.3a28.8,28.8,0,0,1-.72,6.34,4.49,4.49,0,0,1-4.15,3.8,92.44,92.44,0,0,1-14.12.06A12.09,12.09,0,0,1,3,209.65a3.08,3.08,0,0,1-2.36-2.56A51.8,51.8,0,0,1,0,199q-.06-46.8,0-93.6a70.09,70.09,0,0,1,.56-7.37,3.69,3.69,0,0,1,3.47-3.38,76.6,76.6,0,0,1,16-.16,4.32,4.32,0,0,1,4.08,3.83,33.43,33.43,0,0,1,.66,6.69q0,15.06,0,30.13c0,2.15.13,2.27,2.31,2.28H37.53c2.45,0,2.47-.06,2.51-2.59.14-9.42-.31-18.85.33-28.27.49-7.08,3.18-10.91,9.36-12.85a18.69,18.69,0,0,1,5.3-.84c5.89-.09,11.79-.25,17.68-.19a6.15,6.15,0,0,0,5-2.12A428.29,428.29,0,0,1,110.15,60a12.37,12.37,0,0,1,7.51-2.88c6-.49,12.12-.43,18.17-.44,45.07-.11,90.15-.49,135.22.39,5.77.11,9.95,2.47,13.65,6.42a15,15,0,0,1,4.48,9.72c.13,2.86.31,5.72.32,8.58q.06,26.69.06,53.36c0,2.14.15,2.3,2.29,2.31h10.61c2.24,0,2.34-.13,2.37-2.41q.17-15.15.36-30.29a28.52,28.52,0,0,1,.75-6.51,4.35,4.35,0,0,1,3.88-3.68,73.57,73.57,0,0,1,16.45.11,3.74,3.74,0,0,1,3.45,3.4c.21,1.44.33,2.89.49,4.33v99.34c-.17,1.67-.35,3.34-.51,5a3.16,3.16,0,0,1-3,3.09,87,87,0,0,1-16.46.17c-2.55-.21-3.89-1.76-4.38-4.16a34,34,0,0,1-.66-6.52c-.12-10-.27-20.08-.33-30.12,0-1.6-.5-2.21-2.13-2.17-3.7.08-7.41.06-11.11,0-1.5,0-2.11.49-2.08,2,.07,4.26-.11,8.53,0,12.79a22.09,22.09,0,0,1-5.29,15.32q-17.64,21.69-36.37,42.42C244.84,243.05,241.63,246.25,237.23,247.92ZM137,190.55c3.11,0,5.07,1.46,5.8,4.49.49,2,.9,4.05,1.25,6.1.23,1.36.83,2.13,2.28,2.13,2.75,0,5.5.09,8.25.06a2.91,2.91,0,0,0,3-2.49c.4-1.86.68-3.74,1.07-5.61a5.84,5.84,0,0,1,8.68-3.78c1.92,1.16,3.82,2.36,5.71,3.57a1.86,1.86,0,0,0,2.56-.19,82.36,82.36,0,0,0,6.51-6.57,1.87,1.87,0,0,0,.26-2.57c-1.24-1.93-2.49-3.87-3.66-5.85a5.83,5.83,0,0,1,3.7-8.48c1.63-.37,3.32-.52,5-.88,2.87-.63,3.23-1.07,3.29-3.95,0-2.53,0-5.05,0-7.58a1.92,1.92,0,0,0-1.8-2.18c-2.25-.44-4.47-1.12-6.74-1.45-3.2-.47-5.49-6.11-3.25-8.7a46.67,46.67,0,0,0,3.54-5.31,2.23,2.23,0,0,0-.24-2.93,41.05,41.05,0,0,0-5.89-5.75,2.83,2.83,0,0,0-3.42-.3c-2.18,1.17-4.2,2.59-6.28,3.93a2.86,2.86,0,0,1-1.5.7c-2.17,0-5.84-2.83-6.36-5.06-.42-1.8-.7-3.64-1.07-5.45-.42-2.1-.86-2.57-3-2.63a63,63,0,0,0-8.24.18,2.21,2.21,0,0,0-2.26,2c-.44,2.14-.84,4.3-1.42,6.4a5.52,5.52,0,0,1-8.4,3.31l-5.61-3.41a2.32,2.32,0,0,0-2.94.27,42.75,42.75,0,0,0-5.92,6,2.31,2.31,0,0,0-.21,2.94,50.75,50.75,0,0,0,3.27,5.29c2.45,3.1.15,8-3.38,8.61-2.1.38-4.15,1-6.24,1.41-1.31.26-2,.87-1.9,2.27.06,1.57,0,3.14,0,4.71-.08,6-.11,6.24,5.78,7.13a8,8,0,0,1,6.93,5.69,2.33,2.33,0,0,1-.19,2.34c-1.41,2.1-2.72,4.25-4.11,6.36a2.22,2.22,0,0,0,.25,3c2,2.33,4.22,4.5,6.44,6.64a1.56,1.56,0,0,0,2.24.12c1.77-1.19,3.57-2.33,5.37-3.47A5.09,5.09,0,0,1,137,190.55Zm52.13-53a2.79,2.79,0,0,0,.65,1.69,26.15,26.15,0,0,0,3.27,3.62c2,1.94,2.31,2,4.56.36a14.06,14.06,0,0,1,3.91-2.28,3.79,3.79,0,0,1,4.84,1.92,9.36,9.36,0,0,1,.94,2.69c1,5.07.65,5.4,6.92,5.22.5,0,1-.19,1.49-.23a2.58,2.58,0,0,0,2.43-2.19c.33-1.31.58-2.63.91-3.93.83-3.18,3.4-4.38,6.34-3,.8.39,1.57.87,2.33,1.34,3.41,2.07,3.4,2.07,6.23-.68,4-3.89,4.15-4.09.79-8.46a4.73,4.73,0,0,1,2.51-7.38c1.43-.3,2.83-.77,4.27-1,1.66-.21,2.17-1,2-2.61-.18-1.73-.23-3.47-.37-5.2a2.59,2.59,0,0,0-1.94-2.48c-1.29-.39-2.61-.66-3.9-1a4.41,4.41,0,0,1-2.78-6.63,42.28,42.28,0,0,1,2.53-4,1.61,1.61,0,0,0-.17-2.47c-1.61-1.48-3.16-3-4.68-4.61A1.45,1.45,0,0,0,230,96.1c-1.24.87-2.58,1.6-3.81,2.47-3.29,2.35-6.51,0-7.15-2.88-.3-1.31-.57-2.63-.79-4a1.39,1.39,0,0,0-1.45-1.32l-7.4-.34c-1.1-.06-1.62.43-1.75,1.54a21.6,21.6,0,0,1-.86,4.79,4.24,4.24,0,0,1-6.37,2.43c-1.46-.84-2.88-1.76-4.26-2.71a1.47,1.47,0,0,0-2.2.19q-2.42,2.47-4.92,4.84a1.24,1.24,0,0,0-.2,1.89c1,1.44,2,2.88,2.79,4.4,1.62,3,.4,5.71-2.88,6.64-1.19.34-2.4.58-3.58.92a2.83,2.83,0,0,0-2.17,2.49,50.91,50.91,0,0,0-.31,6c-.06,1.06.56,1.48,1.49,1.68,1.53.33,3.07.67,4.59,1.06a4.44,4.44,0,0,1,2.83,2,4.2,4.2,0,0,1-.2,5.28C190.44,134.78,189.36,136,189.13,137.57Z"></path><path class="cls-1" d="M173.58,0c13.3,0,26.6-.08,39.9,0a116,116,0,0,1,13.44.53c2.52.31,3.57,1.26,4.1,3.72A8.61,8.61,0,0,1,231.25,6c0,4.32,0,8.64,0,13a6.87,6.87,0,0,1-1.7,4.45,6.06,6.06,0,0,1-5.24,2.3c-11.45-.1-22.9-.05-34.35-.05-2.45,0-2.53.09-2.53,2.58,0,5.89,0,11.78,0,17.67,0,2.36-.09,2.43-2.49,2.43-8.31,0-16.61,0-24.92,0-1.62,0-2.12-.52-2.1-2.13.07-6,0-12,0-18,0-2.51-.05-2.57-2.52-2.57-9.93,0-19.86,0-29.79-.23a31.51,31.51,0,0,1-6.51-.71c-2.3-.53-3.05-1.42-3.32-3.79a108.52,108.52,0,0,1-.21-15.3c.09-3.41,1.39-4.74,4.81-5C127,0,133.62,0,140.24,0q16.68,0,33.34,0Z"></path><path class="cls-1" d="M163.25,163.47a12.18,12.18,0,0,1-12.52,12.19,12.41,12.41,0,0,1-12.17-12.29c0-6.52,5.63-12.52,12-12.33C158.44,151.27,163.45,157,163.25,163.47Z"></path><path class="cls-1" d="M212.88,129.5a9.79,9.79,0,0,1-9.42-9.51c0-4.79,4.48-9.15,9.52-9.2a9.24,9.24,0,0,1,9.69,9.39C222.64,125.21,218.15,129.49,212.88,129.5Z"></path></g></svg>
                                  Auto
                              </div>

                              
                          <div class="col-3  text-center box-icon m-1 ">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 409.71 341.41"><defs><style>.cls-1{fill:#F4D160;}</style></defs><path class="cls-1" d="M226.72,215.74v3.6c0,32,0,64.1-.1,96.1,0,2.4.5,3.5,3.1,3.8,14.7,1.9,22.5,15.6,17.8,29.8-2.9,8.7-9.7,13.3-18.8,14.2-3.3.3-6.6.6-9.9.6q-95.1,0-190.2,0c-6.5,0-13.1-.2-18.9-4-7.7-5-11.1-13.6-9.2-23.6a21.41,21.41,0,0,1,16.6-16.7c5-1.1,5-1.1,5-6.3q0-131.25.1-262.5c0-12.4,2.6-24.1,11-33.8s19.1-15.3,32-16.3c4.6-.4,9.3-.6,13.9-.6,32.3,0,64.6-.1,97,0,12.9.1,24.9,2.9,34.9,11.9,9.5,8.5,14.3,19.2,15.1,31.7.4,5.9.6,11.7.6,17.6v120.6c4.3.5,8.3,1,12.3,1.3,28.5,2.7,52.3,26.4,54.8,55,.8,8.7.7,17.4,1.1,26.1.3,6.2,1.4,12.1,6.7,16.2a16.71,16.71,0,0,0,26.9-10.5,56.56,56.56,0,0,0,.6-8.2q0-49.65.1-99.2c0-3.5-1.1-5.3-4.3-6.5-9.8-3.8-17.3-10.4-23.1-19s-6.6-18.2-6.8-28c-.2-12.5-.1-25,0-37.5a6.87,6.87,0,0,0-2.1-5.3c-5.8-5.8-11.6-11.7-17.3-17.7a40.09,40.09,0,0,1-5.4-6.9,14.88,14.88,0,0,1,2.7-18.5,15.72,15.72,0,0,1,18.9-2,31.17,31.17,0,0,1,5.3,4.3c16.7,16.6,33.4,33.4,50.1,50,7.2,7.1,12.7,15.1,14.3,25.2a97.8,97.8,0,0,1,1.4,15.3q.15,72,0,143.9c0,12.3-1.5,24.4-8.4,35.1-10.5,16.3-30.7,26.5-51.6,22.4-21.3-4.2-36.9-19.3-40.4-39.8-1.3-7.7-1.3-15.6-1.8-23.5-.3-4.2-.1-8.3-.5-12.5a28.69,28.69,0,0,0-21.7-24.3C235,216.14,231,216.14,226.72,215.74Zm-102.5-79.2h42.6c10.2,0,14.3-4.3,14.4-14.4V90c0-10.4.1-20.8-.1-31.3-.1-8.5-3.4-12-11.7-13.2a30.24,30.24,0,0,0-4.3-.2h-40.7c-14.2,0-28.4-.1-42.6,0-10,.1-14.4,3.9-14.5,13.4q-.3,32.4,0,64.8c.1,8,3.4,11.5,11.3,12.7a34,34,0,0,0,4.5.3Z"></path></svg>
                            Diesel
                          </div>
                          <div class="col-3  text-center box-icon m-1 ">
                          		<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 511.4 272.32"><defs><style>.cls-1{fill:#F4D160;}</style></defs><g id="JfAJXq.tif"><path class="cls-1" d="M511.4,234.88v25.91c-3.79,8.47-10.34,11.55-19.55,11.53q-132.47-.26-264.92-.1-104,0-208,0C6.1,272.19.09,266,0,253.18a235.22,235.22,0,0,1,7.62-60.06C42.07,58.32,177.4-25.35,313,6.92c96.23,22.91,158.87,84,188.94,178.2C507.08,201.31,509.31,218.09,511.4,234.88Zm-101.52,3.87q30.44,0,60.87,0c6.16,0,7-.84,6.26-7s-1.67-12.16-2.82-18.18c-7-36.79-22.71-69.52-46.31-98.58-2.63-3.24-4.44-3.17-7.06-.26a73.44,73.44,0,0,1-7.86,7.62c-7.08,5.81-16.33,5.35-22.61-.92s-6.63-15.52-.74-22.57A71.7,71.7,0,0,1,397.27,91c3.08-2.71,2.68-4.48-.42-7a223.14,223.14,0,0,0-54.92-33.06,214.54,214.54,0,0,0-64-16.1c-3.71-.34-5.16.74-5.05,4.54a76.61,76.61,0,0,1-.56,14.9c-1.4,8.41-8.34,14.5-16.55,14.39a16.77,16.77,0,0,1-16.2-14.22A77.48,77.48,0,0,1,239,39.52c.09-3.57-1-5.3-4.88-4.69-5.41.83-10.9,1.18-16.29,2.13a221.83,221.83,0,0,0-102.32,46.6c-3.81,3.06-3.9,5-.33,8a58.53,58.53,0,0,1,7,7.12c5.94,7.07,5.65,16.3-.54,22.59-6.35,6.46-15.76,6.85-23,.81a57.2,57.2,0,0,1-7.13-7c-3.08-3.66-5.09-3.23-8.07.46A221.66,221.66,0,0,0,34.81,231.06c-.81,6.89-.08,7.68,7.08,7.68,39.75,0,79.51-.08,119.25.11,5.26,0,7.46-1.6,8.88-6.79,12.15-44.38,56.59-72.39,101.33-63.91,4.86.92,7.22-.25,9.32-4.61,10.56-21.82,21.38-43.52,32.15-65.24A80.16,80.16,0,0,1,318,88.69a16.52,16.52,0,0,1,30.07,9.9c0,4-1.64,7.41-3.33,10.83-11.4,23.08-22.73,46.19-34.28,69.19-1.83,3.63-1.53,5.65,1.76,8.3a85.05,85.05,0,0,1,29.88,46.51c1.08,4.29,3.26,5.42,7.36,5.39C369.63,238.67,389.75,238.75,409.88,238.75ZM255.61,189.42c-27.19,0-53.49,18.3-61.79,43.12-.58,1.74-2.31,3.9-.18,5.45,2,1.42,4.52,1,6.72.19,1.88-.72,2.22-2.79,2.91-4.44A56.33,56.33,0,0,1,225,207.83c10.38-6.7,21.81-9.5,34.11-9.15,3.54.1,7.77-3.69,7.12-6.67s-3.86-2.3-6.16-2.55A39.52,39.52,0,0,0,255.61,189.42Zm58.93,49.27c3.49.19,5.32-.71,4-4.61a65,65,0,0,0-18.19-27.54c-.83-.76-1.68-1.67-3-.71-2.59,1.85-3.29,7.32-1,9.65A56.91,56.91,0,0,1,309,235C310.07,237.68,311.77,239,314.54,238.69Z"></path></g></svg>	
                               Illimité
                          </div>


                          <div class="col-3  text-center box-icon m-1 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#F4D160" class="bi bi-snow2" viewBox="0 0 16 16">
                              <path d="M8 16a.5.5 0 0 1-.5-.5v-1.293l-.646.647a.5.5 0 0 1-.707-.708L7.5 12.793v-1.086l-.646.647a.5.5 0 0 1-.707-.708L7.5 10.293V8.866l-1.236.713-.495 1.85a.5.5 0 1 1-.966-.26l.237-.882-.94.542-.496 1.85a.5.5 0 1 1-.966-.26l.237-.882-1.12.646a.5.5 0 0 1-.5-.866l1.12-.646-.884-.237a.5.5 0 1 1 .26-.966l1.848.495.94-.542-.882-.237a.5.5 0 1 1 .258-.966l1.85.495L7 8l-1.236-.713-1.849.495a.5.5 0 1 1-.258-.966l.883-.237-.94-.542-1.85.495a.5.5 0 0 1-.258-.966l.883-.237-1.12-.646a.5.5 0 1 1 .5-.866l1.12.646-.237-.883a.5.5 0 0 1 .966-.258l.495 1.849.94.542-.236-.883a.5.5 0 0 1 .966-.258l.495 1.849 1.236.713V5.707L6.147 4.354a.5.5 0 1 1 .707-.708l.646.647V3.207L6.147 1.854a.5.5 0 1 1 .707-.708l.646.647V.5a.5.5 0 0 1 1 0v1.293l.647-.647a.5.5 0 1 1 .707.708L8.5 3.207v1.086l.647-.647a.5.5 0 1 1 .707.708L8.5 5.707v1.427l1.236-.713.495-1.85a.5.5 0 1 1 .966.26l-.236.882.94-.542.495-1.85a.5.5 0 1 1 .966.26l-.236.882 1.12-.646a.5.5 0 0 1 .5.866l-1.12.646.883.237a.5.5 0 1 1-.26.966l-1.848-.495-.94.542.883.237a.5.5 0 1 1-.26.966l-1.848-.495L9 8l1.236.713 1.849-.495a.5.5 0 0 1 .259.966l-.883.237.94.542 1.849-.495a.5.5 0 0 1 .259.966l-.883.237 1.12.646a.5.5 0 0 1-.5.866l-1.12-.646.236.883a.5.5 0 1 1-.966.258l-.495-1.849-.94-.542.236.883a.5.5 0 0 1-.966.258L9.736 9.58 8.5 8.866v1.427l1.354 1.353a.5.5 0 0 1-.707.708l-.647-.647v1.086l1.354 1.353a.5.5 0 0 1-.707.708l-.647-.647V15.5a.5.5 0 0 1-.5.5z"/>
                            </svg>
                            Clima
                          </div>
                          
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 text-center  my-auto">
          
                  <h3  class="h1 bolder " style="color: #454545;">
                      {{ $car->price}} <span class="lead">/par jour</span>
                  </h3>
                  
                  <div class="text-center">
                    <a href="{{route('user.cars.show' , $car->uuid) }}" class="btn btn-common m-3">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2-square mx-3" viewBox="0 0 16 16">
                        <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                        <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                      </svg>
                      Reserve</a>
                  </div> 
                </div>
              </div>
            </div>
         
          @endforeach
        </div>
          <div class="col-12 mt-3">
            <div class="text-center">
              <a href="{{ route('cars')}}" class="btn btn-common" style="width: 100%">Voir tout</a>
            </div> 
          </div>  
        </div>
      </div>
    </section>
    <!-- Property Section End -->   



  

    <!-- Services Section Start -->
    <section class="services section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h2 class="section-title">Nos Valeurs</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon">
                <i class="lni-bolt-alt"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Service Client Rapide et Exceptionnel </a></h3>
                <p>Notre priorité est de vous offrir un service client exceptionnel et rapide. Nous sommes là pour répondre à vos besoins en un clin d'œil</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.4s">
              <div class="icon">
                <i class="lni-leaf"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Transparence Totale</a></h3>
                <p> Chez nous, tout est clair. Vous ne trouverez pas de frais cachés. Notre transparence signifie que vous savez exactement ce que vous payez, sans surprises.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
              <div class="icon">
                <i class="lni-medall"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Flotte de Qualité</a></h3>
                <p>Notre flotte de voitures est régulièrement entretenue pour votre sécurité et votre satisfaction. Des voitures propres et bien entretenues sont prêtes à être louées à tout moment.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    
    <div class="container-fluid search-container">
      <div class="row">
         <div class="col-2"></div>
        <div class="col-4 my-auto mr-3 text-start">
          <h1 class="display-2 mx-auto" style="color:#ffffff; margin-left :3rem;" >
            Votre Liberté <br> sur Quatre <br> Roues 
          </h1>
        </div>
        <div class="col-6" >
          <br>
          <img src="{{ asset('./img/car_brown.png')}}" class="m-lg-5 my-auto img-fluid">
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 mx-auto">
          <h4 class="intro-sub-heading">Voyagez en toute liberté avec notre flotte de véhicules de location de qualité</h4>
          <h2 class="intro-title"> partez à l'aventure, et vivez chaque kilomètre avec confiance et confort</h2>
          <a href="{{ route('cars')}}" rel="nofollow" class="btn  btn-lg" style="background: #F4D160;">Nos voitures</a>
        </div>
      </div>
  </div>

    <!-- Client Logo Section Start -->
    <section id="clients-logo" class="section-padding">
      <div class="container">
        <div class="row" style="">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h2 class="section-title pt-3">Nos Partenaires</h2>
            </div>
          </div>
          <div class="col-lg-2 col-4 my-auto">
            <div class="client-logo my-auto" style="heigth=60px; box-shadow:none;border:none;">
              <a href="#"><img  class="img-fluid" src="https://www.freepnglogos.com/uploads/audi-logo-0.gif" alt=""></a>
            </div>
          </div>
          <div class="col-lg-2 col-4 my-auto">
            <div class="client-logo my-auto" style="heigth:60px; box-shadow:none;border:none;">
              <a href="#"><img  class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Mercedes-Benz_Star_2022.svg/800px-Mercedes-Benz_Star_2022.svg.png" alt=""></a>
            </div>
          </div>
          <div class="col-lg-2 col-4 my-auto">
            <div class="client-logo my-auto" style="heigth:60px; box-shadow:none;border:none;">
              <a href="#"><img  class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Dacia_Logo_new.jpg/250px-Dacia_Logo_new.jpg" alt=""></a>
            </div>
          </div>
          <div class="col-lg-2 col-4 my-auto">
            <div class="client-logo my-auto" style="heigth:60px; box-shadow:none;border:none;">
              <a href="#"><img  class="img-fluid" src="https://upload.wikimedia.org/wikipedia/fr/thumb/e/e9/Volkswagen_2012-2019_Logo.svg/2048px-Volkswagen_2012-2019_Logo.svg.png" alt=""></a>
            </div>
          </div>
          <div class="col-lg-2 col-4 my-auto">
            <div class="client-logo my-auto" style="heigth:60px; box-shadow:none;border:none;">
              <a href="#"><img  class="img-fluid" src="https://lemag.gueudet.fr/wp-content/uploads/gueudet/2023/07/Losange-logo-Renault-e1688320058225.jpg" alt=""></a>
            </div>
          </div>
          <div class="col-lg-2 col-4 my-auto">
            <div class="client-logo my-auto" style="heigth=60px; box-shadow:none;border:none:">
              <a href="#"><img height="80px"  class="img-fluid" src="https://logos-world.net/wp-content/uploads/2021/03/Hyundai-Logo.png" alt=""></a>
            </div>
          </div>
          <div class="row text-center my-2">
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
              <a href="#" class="show-options"> Plus</a>
            </div>
          </div>
        </div>
        
      </div>
    </section>
    <!-- Cleint Logo Section End -->







    <!-- Pricing Table -->
    {{-- <section class="pricing section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h2 class="section-title">Pricing Plans</h2>
              <p>Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Single Table -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="pricing-table text-center">
              <div class="table-header">
                <h3>
                  Personal
                </h3>
              </div>
              <div class="plan">
                <h3 class="price">
                  $99
                </h3>
                <p class="period">
                  NO DISCOUNT ON RENEWAL
                </p>
              </div>
              <div class="plan-info">
                <p>
                  <strong><i class="lni-check-box"></i> Ad Visibility: 3 Months</strong>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                </p>
                <p>
                  <strong><i class="lni-check-box"></i> Number of Ads: 15</strong>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                </p>
                <p>
                  <strong><i class="lni-check-box"></i> Featured Ads: 5</strong>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                </p>
                <div class="button-area">
                  <a href="#" class="btn btn-common btn-lg">
                    Get Started Now
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Single Table -->
         <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="pricing-table pricing-active text-center">
              <div class="table-header">
                <h3>
                  Business
                </h3>
              </div>
              <div class="plan">
                <h3 class="price">
                  $199
                </h3>
                <p class="period">
                  10% Discount on renewal
                </p>
              </div>
              <div class="plan-info">
                <p>
                  <strong><i class="lni-check-box"></i> Ad Visibility: 5 Months</strong>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                </p>
                <p>
                  <strong><i class="lni-check-box"></i> Number of Ads: 50</strong>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                </p>
                <p>
                  <strong><i class="lni-check-box"></i> Featured Ads: 10</strong>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                </p>
                <div class="button-area">
                  <a href="#" class="btn btn-common btn-lg">
                    Get Started Now
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Table -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="pricing-table text-center">
              <div class="table-header">
                <h3>
                  Ultimate
                </h3>
              </div>
              <div class="plan">
                <h3 class="price">
                  $999
                </h3>
                <p class="period">
                  20% Discount on renewal
                </p>
              </div>
              <div class="plan-info">
                <p>
                  <strong><i class="lni-check-box"></i> Ad Visibility: 12 Months</strong>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                </p>
                <p>
                  <strong><i class="lni-check-box"></i> Number of Ads: 100</strong>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                </p>
                <p>
                  <strong><i class="lni-check-box"></i> Featured Ads: 30</strong>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                </p>
                <div class="button-area">
                  <a href="#" class="btn btn-common btn-lg">
                    Get Started Now
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- Pricing Table End -->
  
    <!-- Testimonial Section Start -->
    {{-- <section class="testimonial section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel">
              <div class="item">
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                  </div>
                </div>
                <div class="client-info">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img1.png" alt="">
                  </div>
                  <div class="info-text">
                    <h2><a href="#">Michael Papirov</a></h2>
                    <h4><a href="#">Customer</a></h4>
                  </div>
                </div>
              </div>
             <div class="item">
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                  </div>
                </div>
                <div class="client-info">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img2.png" alt="">
                  </div>
                  <div class="info-text">
                    <h2><a href="#">Josh Rossi</a></h2>
                    <h4><a href="#">Manager</a></h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                  </div>
                </div>
                <div class="client-info">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img3.png" alt="">
                  </div>
                  <div class="info-text">
                    <h2><a href="#">Daniel Greem</a></h2>
                    <h4><a href="#">Customer</a></h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                  </div>
                </div>
                <div class="client-info">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img4.png" alt="">
                  </div>
                  <div class="info-text">
                    <h2><a href="#">John Doe</a></h2>
                    <h4><a href="#">Manager</a></h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                  </div>
                </div>
                <div class="client-info">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img5.png" alt="">
                  </div>
                  <div class="info-text">
                    <h2><a href="#">Michael Papirov</a></h2>
                    <h4><a href="#">Customer</a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    <div class="container-fluid py  -lg-5 section-padding services" id="install-button" style="display: block;">
      <div class="row ">
          <div class="col-md-12 mx-auto">
            <div class=" my-auto  mx-auto">
                <img src="https://autohive-wp.themetags.com/wp-content/plugins/autohive-core/elementor//assets/images/slider/hero-car-3.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="900" height="700" loading="lazy">
                <h3 class="h3 mt-lg-5 text-center " >Notre <span class="h1 fw-300;" style="color:#F4D160;">Application</span> PWA vous offre une expérience de location de voiture sans pareil. Téléchargez-la dès maintenant et partez à l'aventure !</p>
                <br>
                <button  class="btn btn-warning mx-auto" >Install App</button>
            </div>
            </div>
      </div>
  </div>
     
<div class="container mt-3">
      <!-- Map Section Start -->
    <section id="google-map-area" style="border-radius: 30px ; overflow: hidden;">
        <div class="row" style="border-radius: 30px ; overflow: hidden;">
          <div class="section-title-header text-center col-12">
            <h2 class="section-title">Localisation</h2>
          </div style="border-radius: 30px ; overflow: hidden;">
            <iframe  class=" mx-auto col-12" style="border-radius: 30px ; overflow: hidden;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13342.441397606752!2d-7.5856643!3d33.2766919!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda63dcaa2953921%3A0x94c8cc49218f7837!2sAnis%20Auto%20Location%20de%20voitures!5e0!3m2!1sen!2sma!4v1695430084706!5m2!1sen!2sma" width="800" height="600"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        
        </div>
    </section>
</div>

{{-- 
    <!-- Team Section Start -->
<section id="team" class="section-padding text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h2 class="section-title">Nos agences</h2>            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- Team Item Starts -->
            <div class="team-item text-center">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-01.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icon-team">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">David Givens</a></h3>
                <p>Real Estate Agent</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- Team Item Starts -->
            <div class="team-item text-center">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-02.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icon-team">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">John Doe</a></h3>
                <p>Real Estate Agent</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>

          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- Team Item Starts -->
            <div class="team-item text-center">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-03.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icon-team">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Darrell S.Allen</a></h3>
                <p>Real Estate Agent</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>

          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- Team Item Starts -->
            <div class="team-item text-center">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-04.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icon-team">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Justyna Michallek</a></h3>
                <p>Real Estate Agent</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
        </div>
      </div>
    </section>
    <!-- Team Section End -->  --}}





  {{-- <section class="container">
  <div class="row flex-lg-row-reverse align-items-center " style="color:#ffff;">
        
      <div class="col-12 col-lg-6">
        <img src="https://autohive-wp.themetags.com/wp-content/plugins/autohive-core/elementor//assets/images/slider/hero-car-3.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="900" height="700" loading="lazy">
      </div>
      <div class="col-lg-5 text-center">
        <h3 class="h3 text-center fw-bold  lh-1 mb-3" style="color:white;;">partez à l'aventure, et vivez chaque kilomètre avec confiance et confort</h3>
        <div class=" text-center">
            <a name="" id="" class="btn arrow-btn text-center " href="{{route('cars')}}" role="button" style="color: #ffff;">
              Nos Voitures
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
             </svg>
            </a>
        </div>
      </div>
    </div>
  </section> --}}


  <section class='container-fluid' >
    <div class="row" style="background:url('{{ asset('img/footer.png')}}');height:400px;background-size:cover;background-position:center center; position: relative;top:2px;z-index:-1; ">
      <p class="col-12">
        <h1 class="display-6 text-center" style="color:#ffffff;">
            Louez Rapidement Votre Voiture au Maroc
            <br> 
            Voitures Propres et Bien Entretenues
             <h3 class="h3 text-center fw-bold  lh-1 mb-3" style="color:white;;">partez à l'aventure, et vivez chaque kilomètre avec confiance et confort</h3>
        <div class=" text-center">
            <a name="" id="" class="btn arrow-btn text-center " href="{{route('cars')}}" role="button" style="color: #ffff;">
              Nos Voitures
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
             </svg>
            </a>
        </h1>
        {{-- <img src="{{ asset('img/footer.png')}}" alt="" class="img-fluid"> --}}
      </p>
    </div>
  </section>



    <style>
      /* svg{
        padding: 7px;
      } */
    </style>


<style>
        .card{
          opacity: 0%;
        }
        .box-icon{
            transform: scale(0.8);
        }

        .arrow:hover svg{
           transform: scale(1.3);
           position: relative;
           left: 5px;
          -webkit-transition: all 0.5s ease-in-out;
          -moz-transition: all 0.5s ease-in-out;
          -o-transition: all 0.5s ease-in-out;
          -ms-transition: all 0.5s ease-in-out;
          transition: all 0.5s ease-in-out;
          border: 1px solid transparent; 
        }
        .arrow-btn{
          border: solid 1px #F4D160;
          border-radius: 10px;
        }
</style>


<a href="" class="back-to-top" style="display: none;">
  <i class="lni-chevron-up"></i>
</a>
<a href="
"></a>


<!--  Preloader -->
<div id="preloader">
  <div class="loader text-center" id="loader-1">
  </div><br>

  <p class="h2 loader-box font-weight-bold" style="">
    Please wait
  
  </p>

  <style>
    .loader-box {
      color:#F4D160;
      text-align: center;
      position: relative;
      top: 30%;
      right: 1%;
      animation: slide 4s infinite;
    }
  </style>
</div>
<!-- End Preloader -->
<style>
  /* Color Theme Swatches in Hex */
.Illustration-1-hex { color: #F4D160; }
.Illustration-2-hex { color: #0777D9; }
.Illustration-3-hex { color: #021526; }
.Illustration-4-hex { color: #A0C3D9; }
.Illustration-5-hex { color: #F4D160; }

/* Color Theme Swatches in RGBA */
.Illustration-1-rgba { color: rgba(4, 96, 216, 1); }
.Illustration-2-rgba { color: rgba(6, 118, 216, 1); }
.Illustration-3-rgba { color: rgba(1, 21, 38, 1); }
.Illustration-4-rgba { color: rgba(160, 195, 216, 1); }
.Illustration-5-rgba { color: rgba(165, 89, 72, 1); }

/* Color Theme Swatches in HSLA */
.Illustration-1-hsla { color: hsla(213, 96, 43, 1); }
.Illustration-2-hsla { color: hsla(208, 94, 43, 1); }
.Illustration-3-hsla { color: hsla(208, 90, 7, 1); }
.Illustration-4-hsla { color: hsla(202, 42, 73, 1); }
.Illustration-5-hsla { color: hsla(11, 38, 46, 1); }

</style>
@endsection


