@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="card text-left">
        <img class="card-img-top" src="{{ asset('img/confirm.jpg')}}" alt="">
        <div class="card-body">
        </div>
      </div>
    </div>

    <div class="col-lg-6 p-5 my-auto text-center text-succes">
      <h3 class="h4">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#F4D160" class="bi bi-calendar-check" viewBox="0 0 16 16">
          <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
        </svg><br><br>
        votre reservation numero {{ $reservation_id}} est bien enregistré nous allons vous contactez dans le plus tot possible
    </h3>
    </div>
  </div>
</div>
@endsection