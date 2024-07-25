<x-navbar/>

<x-layout>

<h1>Create all Trips</h1>

<form method="POST" action="{{route('company.store')}}" >
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
    <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="form-check">
    
      @foreach ($trips as $trip)
      <input class="form-check-input" type="checkbox" id="{{$trip->id}}" value="{{$trip->id}}" name="trips[]" >
      <label class="form-check-label" for="{{$trip->id}}">
      
      <option value="{{$trip->id}}">{{$trip->titolo}}</option> 
      @endforeach
  </div>
    </label>
  </div>














  

   <div class="mb-3 mx-5 my-3">
    <label for="tipo" class="form-label">nation</label>
    <input type="text" class="form-control" id="tipo"  name="nation">
    <button type="submit" class="btn btn-primary">invia</button>
    </div>

</form>

</x-layout>