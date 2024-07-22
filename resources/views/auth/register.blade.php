<x-layout/>
<x-navbar/>
       
<div class="container my-5 mx-4">
    <form method="POST" action="{{route('register')}}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Username</label>
            <input type="text" class="form-control" id="name" name="name">

          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Conferma Password</label>
            <input type="password" class="form-control" id="password" name="password_confirmation">
          </div>
        <button type="submit" class="btn btn-primary">Registrati</button>
      </form>
</div>
       