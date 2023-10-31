@extends('layouts.admin')


@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800">Reservations</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">tout les reservation</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Annuler</div>
                <a class="dropdown-item" href="#">details</a>
                <a class="dropdown-item" href="#">contract</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
    </div>
    <!-- Card Body -->
        <div class="card-body" >
            <div class="table-responsive" >
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Numero de reservation</th>
                            <th>Nom</th>
                            <th>Matricule</th>
                            <th>Status</th>
                            <th>Total a payer</th>
                            <th>Etat de payement</th>
                            <th>Client</th>
                            <th>Date de creation</th>
                          
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Numero de reservation</th>
                            <th>Nom</th>
                            <th>Matricule</th>
                            <th>Status</th>
                            <th>Total a payer</th>
                            <th>Etat de payement</th>
                            <th>Client</th>
                            <th>Date de creation</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ( $reservations as $reservation)
                        <tr>
                            <td> <a href="{{ route('admin.reservation.show', $reservation->uuid)}}">{{$reservation->uuid }}</a></td>
                            <td>{{$reservation->car->name }}</td>
                            <td>{{$reservation->car->matricule }}</td>
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
                            
                            <td>{{$reservation->total_cost }} DH</td>
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
                            <td>
                            {{  $reservation->drivers->driver1_last_name." ". $reservation->drivers->driver1_name }}
                            </td>
                            <td>{{$reservation->created_at->format('Y-m-d') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<!-- Page level plugins -->

@endsection