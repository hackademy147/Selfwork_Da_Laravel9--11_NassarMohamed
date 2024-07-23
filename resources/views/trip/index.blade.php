<x-navbar/>
<x-layout>

    <div class="container my-5">
        <div class ="row">
            <div class="col-12">
            <h1>Tutti Gli eventi</h1>  
            </div>
        </div>
    </div>

    @if (session('gameDeleted'))
<div class="alert alert-success">
    {{ session('gameDeleted') }}
</div>
@endif

    <div class="container my-5">
        <div class ="row">
            @foreach ($trips as $trip)
            <div class="col-12 col-md-3">
                <x-card :trip="$trip"/>
            </div>
            @endforeach
        </div>
    </div>












</x-layout>