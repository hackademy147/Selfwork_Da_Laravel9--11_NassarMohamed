<x-navbar/>

<x-layout>
    
    <section class="conatiner">
        <div class="row">
                <h3>Benvenuto {{Auth::user()->name}}</h3>
                </div>
    </section>
    
  <div class="row my-2">
    <h4>Ecco i viaggi da te programmati</h4>
  </div>
    <section class="conatiner my-5">
        <div class="row">
    @foreach (Auth::user()->trips as $trip)
    <div class="col-12 col-md-3">
    <x-card :trip="$trip"/>
</div>
    @endforeach
</div>
</section>


</x-layout>