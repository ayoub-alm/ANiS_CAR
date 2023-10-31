@extends('layouts.admin')


@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-3 text-gray-800">Reservation N <sub>{{$reservation->uuid}}</sub></h1>
        <div class="dropdown no-arrow show">
            <a class="dropdown-toggle btn btn-sm btn-primary shadow-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Action<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i> 
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in show" aria-labelledby="dropdownMenuLink" x-placement="bottom-end" style="position: absolute; transform: translate3d(-158px, 19px, 0px); top: 0px; left: 0px; will-change: transform;">
                {{-- <div class="dropdown-header">:</div> --}}
                <a class="dropdown-item" href="{{ route('admin.reservation.confirm', $reservation->uuid)}}">Confirmer</a> 
                <a class="dropdown-item" href="#">Annuler</a>
                 <a class="dropdown-item" href ="#">Supprimer</a>
                  <a class="dropdown-item" href ="{{ route('contract')}}">Imprimer</a>
                {{-- <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"> here</a> --}}
            </div>
        </div>
    </div>
</div>
    <div class="container-fluid">
        <div class="row">
            {{-- first card --}}
            <div class="col-lg-6">
                <div class="card shadow mb-4  ">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Information de Reservation</h6>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="row list-group-item "> 
                                <span class="col-lg-6"> Status </span>
                                <span class="col-lg-6"> 
                                    @switch($reservation->state)
                                    @case(-1)
                                    <td><span class="text-danger font-weight-bold ">Anuulé</span></td>
                                        @break
                                        @case(0)
                                        <td><span class="text-warning font-weight-bold ">Créé</span></td>
                                            @break
                                        @case(1)
                                        <td><span class="text-succes font-weight-bold ">Accepter</span></td>
                                            @break
                                        @case(2)
                                        <td><span class="text-primary font-weight-bold ">En cours</span></td>
                                            @break
                                        @case(3)
                                        <td><span class="text-success font-weight-bold ">Terminé</span></td>
                                            @break
                                    
                                        @default
                                            
                                    @endswitch
                                </span>
                            </li>
                          
                            <li class="row list-group-item"> 
                                <span class="col-10"> Date de ramassage </span>
                                <span class="col-lg-6"> {{ Carbon\Carbon::parse( $reservation->rental_start_date )->format('y-m-d')}} {{   Carbon\Carbon::parse($reservation->rental_start_heure)->format('H:i:s')}}</span>
                            </li>
                            <li class="row list-group-item "> 
                                <span class="col-lg-6"> Date de retour </span>
                                <span class="col-lg-6"> {{  Carbon\Carbon::parse($reservation->rental_end_date )->format('y-m-d')}} {{ $reservation->rental_end_heure}}</span>
                            </li>
                            <li class="row list-group-item "> 
                                <span class="col-lg-6"> Date de Creation </span>
                                <span class="col-lg-6"> {{ $reservation->created_at->format('y-m-d')}} </span>
                            </li>
                            <li class="row list-group-item "> 
                                <span class="col-lg-6"> Kilometrage Départ </span>
                                <span class="col-lg-6"> {{ $reservation->kilometrage_start ? $reservation->kilometrage_start  : "N/A"}} </span>
                            </li>
                            <li class="row list-group-item "> 
                                <span class="col-lg-6"> Kilometrage Retour  </span>
                                <span class="col-lg-6"> {{ $reservation->kilometrage_end ? $reservation->kilometrage_end : "N/A"}} </span>
                            </li>

                            <li class="row list-group-item "> 
                                <span class="col-lg-6"> Lieux de Ramassage </span>
                                <span class="col-lg-6"> {{ $reservation->start_location}}  </span>
                            </li>

                            <li class="row list-group-item "> 
                                <span class="col-lg-6"> Lieux de Retour </span>
                                <span class="col-lg-6">  {{ $reservation->end_location}} </span>
                            </li>
                          </ul>


                    </div>
                </div>
            </div>
            
            {{-- secend card  --}}
            <div class="col-lg-6">
                <div class="card shadow mb-4  ">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Information du clinet</h6>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
    
                            <li class="row list-group-item "> 
                                <span class="col-lg-6"> Prenom</span>
                                <span class="col-lg-6"> {{ $reservation->drivers->driver1_name}} </span>
                            </li>
                            <li class="row list-group-item "> 
                                <span class="col-lg-6"> Nom</span>
                                <span class="col-lg-6"> {{ $reservation->drivers->driver1_last_name}} </span>
                            </li>

                            <li class="row list-group-item "> 
                                <span class="col-lg-6"> Prenom <sub>2 cheffeur</sub></span>
                                <span class="col-lg-6"> {{ $reservation->drivers->driver2_name}} </span>
                            </li>
                            <li class="row list-group-item "> 
                                <span class="col-lg-6"> Nom <sub>2 cheffeur</sub></span>
                                <span class="col-lg-6"> {{ $reservation->drivers->driver2_last_name}} </span>
                            </li>
                            <li class="row list-group-item "> 
                                <span class="col-lg-6">Adress </span>
                                <span class="col-lg-6"> {{ $reservation->start_location}} </span>
                            </li>
                            <li class="row list-group-item "> 
                                <span class="col-lg-6">Ville </span>
                                <span class="col-lg-6">berrechid </span>
                            </li>
                            <li class="row list-group-item "> 
                                <span class="col-lg-6">Telephone </span>
                                <span class="col-lg-6"> <a href="tel:0619903092">0619903092</a> </span>
                            </li>
                            <li class="row list-group-item "> 
                                <span class="col-lg-6">Email </span>
                                <span class="col-lg-6"> {{ $reservation->user}} </span>
                            </li>
                            
                          </ul>

                    </div>
                </div>
            </div>
  

            <div class="col-lg-6">
                <div class="card shadow mb-4  ">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Information du Payement</h6>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="row list-group-item "> 
                                <span class="col-lg-6"> Status </span>
                                <span class="col-lg-6"> 
                                    @switch($reservation->payment_status)
                                    @case(0)
                                    <td><span class="text-danger font-weight-bold ">Non Payeé </span></td>
                                        @break
                                    @case(1)
                                    <td><span class="text-warning font-weight-bold ">Payeé</span></td>
                                        @break  
                                    @case(3)
                                    <td><span class="text-success font-weight-bold ">Facturé</span></td>
                                        @break
                                    @default
                                    <td><span class="text-danger font-weight-bold ">Non Payeé </span></td>
                                @endswitch
                                </span>
                            </li>
                            <li class="row list-group-item "> 
                                <span class="col-lg-6"> Total à payer</span>
                                <span class="col-lg-6"> {{ $reservation->total_cost}} </span>
                            </li>
                            <li class="row list-group-item "> 
                                <span class="col-lg-6"> Methode de payement </span>
                                <span class="col-lg-6"> {{ $reservation->pyment_method}} </span>
                            </li>
                          </ul>

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow mb-4  ">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Information du Voiture</h6>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="row list-group-item "> 
                                <span class="col-lg-6"> Status </span>
                                <span class="col-lg-6"> 
                                    @switch($reservation->car->state)
                                    @case(-1)
                                    <td><span class="text-danger font-weight-bold ">Anuulé</span></td>
                                        @break
                                        @case(0)
                                        <td><span class="text-warning font-weight-bold ">Active</span></td>
                                            @break
                                        @case(1)
                                        <td><span class="text-succes font-weight-bold ">Réservée</span></td>
                                            @break
                                            @case(2)
                                            <td><span class="text-warning font-weight-bold ">Active</span></td>
                                            @break
                                        @default
                                    @endswitch
                                </span>
                            </li>
                            <li class="row list-group-item "> 
                                <span class="col-lg-6"> Numéro</span>
                                <span class="col-lg-6"> <a href="">{{ $reservation->Car->uuid}} </a></span>
                            </li>
                            <li class="row list-group-item "> 
                                <span class="col-lg-6"> Nom</span>
                                <span class="col-lg-6"> {{ $reservation->Car->name}} </span>
                            </li>
                            <li class="row list-group-item "> 
                                <span class="col-lg-6">Matricule </span>
                                <span class="col-lg-6"> {{ $reservation->car->matricule}} </span>
                            </li>
                            <li class="row list-group-item "> 
                                <span class="col-lg-6">Categorie </span>
                                <span class="col-lg-6"> {{ $reservation->car->categorie->name}} </span>
                            </li>
                            <li class="row list-group-item "> 
                                <span class="col-lg-6">Prix </span>
                                <span class="col-lg-6"> {{ $reservation->car->price}} </span>
                            </li>
                            
                          </ul>

                    </div>
                </div>
            </div>

                   {{-- photes card --}}
                   <div class="col-lg-6">
                    <div class="card shadow mb-4  ">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Information de Reservation</h6>
                        </div>
                        <div class="card-body">
                            <div  class="row">
                                    <div class="col-8">
                                        <h6> la cart CIN </h6>
                                        <p class="p-3">
                                           <img src="{{asset($reservation->drivers->driver1_cin)}}" alt=""  class="img-fluid" width="">
                                        </p>
                                    </div>
                                    <div class="col-8">
                                        <h6> permis de Conduit</h6>
                                        <p class="p-3">
                                           <img src="{{asset($reservation->drivers->driver1_license)}}" alt=""  class="img-fluid" width="">
                                        </p>
                                    </div>
                                   
                                    @isset($reservation->drivers->driver2_license)
                                    <div class="col-8">
                                        <h6> permis de Conduit <sub>Deuixem chefeur</sub></h6>
                                        <p class="p-3">
                                           <img src="{{asset($reservation->drivers->driver2_cin)}}" alt=""  class="img-fluid" width="">
                                        </p>
                                    </div>
                                    @endisset
                                    @isset($reservation->drivers->driver2_license)
                                    <div class="col-8">
                                        <h6> permis de Conduit <sub>Deuixem chefeur</sub></h6>
                                        <p class="p-3">
                                           <img src="{{asset($reservation->drivers->driver2_license)}}" alt=""  class="img-fluid" width="">
                                        </p>
                                    </div>
                                    @endisset
                                
                            </div>
    
                        </div>
                    </div>
                </div>
        </div>
    </div> 
</div>
<!-- /.container-fluid -->
<!-- Page level plugins -->

@endsection