<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$trip->titolo}}</h5>
      <p class="card-text">{{$trip->username}}</p>
      <a href="{{route('trip.show', $trip)}}" class="btn btn-primary">Mostra evento</a>
    </div>
  </div>