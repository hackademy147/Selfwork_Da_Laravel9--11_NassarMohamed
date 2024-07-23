<x-navbar/>

<x-layout>

<h1>Create all Trips</h1>

<form method="POST" action="{{route('trip.store')}}" >
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
    
    <div class="mb-3 mx-5 my-3">
    <label for="name" class="form-label">UserName</label>
    <input type="text" class="form-control" id="name" name="username">
    </div>
    <div class="mb-3 mx-5 my-3">
    <label for="name" class="form-label">From</label>
    <input type="text" class="form-control" id="name" name="departure">
    </div>
    <div class="mb-3 mx-5 my-3">
    <label for="name" class="form-label">To</label>
    <input type="text" class="form-control" id="name" name="arrive">
    </div>
   <div class="mb-3 mx-5 my-3">
    <label for="tipo" class="form-label">Tipo di viaggio</label>
    <input type="text" class="form-control" id="tipo"  name="title">
    <button type="submit" class="btn btn-primary">invia</button>
    </div>

</form>

</x-layout>

