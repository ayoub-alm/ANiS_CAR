@extends('layouts.admin')


@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800">Voitures</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tout les voitures</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>image</th>
                            <th>Nom</th>
                            <th>Matricule</th>
                            <th>Status</th>
                            <th>categories</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>image</th>
                            <th>Nom</th>
                            <th>Matricule</th>
                            <th>Status</th>
                            <th>categories</th>
                            <th>Price</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ( $cars as $car)
                        <tr>
                            <td class="text-center"><img src="{{asset($car->img) }}" alt="" width="50"></td>
                            <td>{{$car->name }}</td>
                            <td>{{$car->categorie->name }}</td>
                            <td>{{$car->state }}</td>
                            <td>{{$car->state }}</td>
                            <td>{{$car->price }}</td>
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