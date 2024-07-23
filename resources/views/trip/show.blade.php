<x-navbar/>
<x-layout>

    @if (session('Done'))
    <div class="alert alert-success">
        {{ session('Done') }}
    </div>
@endif


    <div class="container my-5">
        <div class ="row">
            <div class="col-12">
            <h1>{{$trip->titolo}}</h1>  
            <a href="{{route('trip.edit', $trip)}}" class="btn btn-primary">modifica</a>
            <form action="{{route('trip.destroy', $trip)}}" method="POST" > 
                @method('DELETE')
                 @csrf
                 <button type="submit" class="btn btn-primary">Elimina</button>
            </form>
            </div>
        </div>
    </div>
</x-layout>