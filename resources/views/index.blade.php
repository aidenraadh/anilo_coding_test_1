@extends('layouts.app')

@section('content')
<div style="max-width: 100vw; height: 100vh" class="d-flex-col justify-content-center align-items-center">
    <form style="width: 100%" method="POST" action="{{route('login')}}">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">Username: test</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">Password: 12345678</small>
        </div>            
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <p>
        Response:
    </p>
</div>
@endsection