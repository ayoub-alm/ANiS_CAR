@extends('layouts.admin')

@section('content')

<div class="container">
    <!-- Ajouter une voiture -->
    <div class="card shadow mb-2">
     <div class="card-header py-2">
         <h6 class="m-0 font-weight-bold text-primary">Ajouter une Categores</h6>
     </div>
     <div class="card-body">
        <form action="{{ route('admin.cars.categorie.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="mb-3 col-lg-4">
                    <label for="formGroupExampleInput" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="" name="name" required >
                  </div>
                  <div class="mb-3 col-lg-4">
                    <label for="formGroupExampleInput2" class="form-label">Description</label>
                    <input type="text" class="form-control" id="" name="description" required>
                  </div>
                  <div class="mb-3 col-lg-4">
                    <br>
                    <button type="reset" class="btn btn-outline-primary">Reset</button>
                        <button type="submit" class="btn btn-primary"> Ajouter</button>
                   </div>
            </div>
        </form>
     </div>
        
     </div>





     <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tout les voitures</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Date de creation</th>
                            <th>Number de Voiture</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Date de creation</th>
                            <th>Number de Voiture</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($categories as $categorie )
                        <tr>
                            <td>{{$categorie->name}}</td>
                            <td>{{$categorie->description}}</td>
                            <td>{{$categorie->created_at}}</td>
                            <td>61</td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




@endsection