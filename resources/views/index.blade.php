@extends('layouts.app')

@section('content')
    @if (auth()->check())
        <h1 class="text-center">Welcome <span class="text-danger">{{ auth()->user()->name }}</span></h1>


        
        <form action="{{ route('logoutBtn') }}" method="post" class="text-center">
            @csrf
         <button class="btn btn-danger mt-2 ">Logout</button>
        </form>

    @endif
@endsection
