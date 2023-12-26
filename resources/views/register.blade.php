@extends('layouts.app')



@section('content')
    <div class="d-flex justify-content-center" style="margin-top: 300px;">
        <div class=" border rounded-4 bg-dark p-4">
            <h3 class="text-light">Register Form</h3>
            <form action="#" method="POST" class="d-flex flex-column ">
                @csrf
                <label class="text-light d-flex flex-cloumn">UserName :
                </label>
                <input type="text" name="Uname" class="border rounded-4">

                <label class="text-light d-flex flex-cloumn">Email : </label>
                <input type="text" name="email" class="border rounded-4">

                <label class="text-light d-flex flex-cloumn">Password :
                </label>
                <input type="text" name="password" class="border rounded-4">

                <button type="submit" class="btn btn-primary  rounded-4 mt-4">Register</button>
            </form>

            <a href="{{ route('loginPage') }}" class="text-primary">Already Have An Account ? </a>
        </div>
    </div>
@endsection
