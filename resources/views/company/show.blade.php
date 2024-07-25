<x-navbar/>
<x-layout>

    <section class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <h3>Ecco i dettagli su questo le compagnie inserite</h3>
            </div>
        </div>
    </section>


    <div class="container my-5">
        <div class ="row">
            <div class="col-12">
            <h1>{{$company->name}}</h1> 
            <h6> la compagnia è stata creata da: {{$company->trip->username ?? 'Utente sconosciuto'}}</h6>
            </div>
        </div>
    </div>



    {{-- <section class="container">
        <div class="row justify-content-center">
            @foreach ($companies as $company)
            
            <div class="col-12 col-md-4">
            <x-card/>        
            </div>
            @endforeach
        </div>
    </section> --}}


</x-layout>