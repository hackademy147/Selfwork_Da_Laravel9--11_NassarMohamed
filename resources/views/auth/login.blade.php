<x-layout/>
<x-navbar/>


<div class="container my-5 mx-4">
    <form method="POST" action="{{route('login')}}">
      @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">login</button>
      </form>
</div>
       