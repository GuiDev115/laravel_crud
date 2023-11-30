@extends('master')

@section('content')

<h2>users</h2>

<ul>
    @foreach (%users as $user)
     <li>{{$user->firstName}}</li>
     @endforeach
</ul>

@endsection