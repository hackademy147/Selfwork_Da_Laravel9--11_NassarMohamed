<x-navbar/>

<x-layout>

<h1>Modifica all Trips</h1>

<form method="POST" action="{{route('trip.update', $trip)}}" >
 @method('PUT')
  @csrf
    <section class="d-flex justify-content-around">
  <div class="mb-3 mx-5 my-3">
    <label for="name" class="form-label">UserName</label>
    <input type="text" class="form-control" id="name" value="{{$trip->username}}" name="username">
  </div>
  <div class="mb-3 mx-5 my-3">
    <label for="name" class="form-label">From</label>
    <input type="text" class="form-control" id="name" value="{{$trip->partenza}}" name="departure">
  </div>
  <div class="mb-3 mx-5 my-3">
    <label for="name" class="form-label">To</label>
    <input type="text" class="form-control" id="name" value="{{$trip->arrivo}}" name="arrive">
  </div>
  </section>
  <section class="d-flex justify-content-center">
  <div class="mb-3 mx-5 my-3">
    <label for="tipo" class="form-label">Tipo di viaggio</label>
    <input type="text" class="form-control" id="tipo"  name="title" value="{{$trip->titolo}}">
      <button type="submit" class="btn btn-primary">invia</button>
    </div>
</section>
</form>

</x-layout>