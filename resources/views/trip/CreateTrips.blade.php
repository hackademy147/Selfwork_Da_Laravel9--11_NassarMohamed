<x-navbar/>

<x-layout>

<h1>Create all Trips</h1>

<form method="POST" action="{{route('show')}}" >
            @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
             </ul>
            </div>
            @endif
  @csrf
    <section class="d-flex justify-content-around">
  <div class="mb-3">
    <label for="name" class="form-label">UserName</label>
    <input type="text" class="form-control" id="name" name="username">
  </div>
  </section>
  <section class="d-flex justify-content-center">
  <div class="mb-3">
    <label for="tipo" class="form-label">Tipo di viaggio</label>
    <input type="text" class="form-control" id="tipo"  name="title">
      <button type="submit" class="btn btn-primary">invia</button>
    </div>
</section>
</form>

</x-layout>

