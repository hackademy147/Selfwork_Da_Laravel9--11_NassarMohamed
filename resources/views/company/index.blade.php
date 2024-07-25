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
            @foreach ($companies as $company)
            <div class="col-12 col-md-3">
                <x-card :oggetto="$company"
                username="{{$company->username}}"
                sottotitolo="{{$company->nation}}"
                url="company.show"
                
                />
            </div>
            @endforeach
        </div>
    </div>












</x-layout>