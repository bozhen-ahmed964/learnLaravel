@extends('layouts.app')



@section('content')


<div class="d-flex justify-content-center" style="margin-top: 300px;">
    <div class="d-block border rounded-4 bg-dark p-4">
        <h3 class="text-light">Login</h3>
        <form action="#" method="POST">
            @csrf
              <label class="text-light">Email : <input type="text" name="email" class="border rounded-4"></label>
        <label class="text-light">Password : <input type="text" name="password" class="border rounded-4"></label>
        <button type="submit" class="btn btn-primary ms-2 rounded-4">Login</button>
        </form>
    </div>
</div>



@endsection
