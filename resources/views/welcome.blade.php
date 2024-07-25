<x-navbar/>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('CompanyCreated'))
    <div class="alert alert-success">
        {{ session('CompanyCreated') }}
    </div>
@endif

<x-layout>
 <div>
    <h1>Nassar Airlines</h1>
 </div>
<div>
   <img src="https://images.spot.im/v1/production/voxvebvq5bal3nzybjg5" alt="">
</div>
 </x-layout>
