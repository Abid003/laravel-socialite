@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
    </div>
    @foreach ($users as $user)

    <div class="row">
        
        <div class="col-2">
            <img width="100px" class="rounded-circle" src="data:image/png;base64,{{ $user->dp }}" alt="img/a.jpg">
        </div>
        <div class="col-10 bg-primary rounded text-white">
            <h1 class="">{{ Auth::user()->name }}
            </h1>
            <p>
                from {{$user->location}}
            </p>
        </div>
    </div>


    <div class="row mt-3 bg-lite">

       
        <col-3></col-3>
        <div class="col-6">
            <div>
                <p><span>Bio: </span>{{$user->bio}}</p>
            </div>
            <div>
                <p><span>Location: </span> {{$user->location}}</p>
            </div>
            <div>
                <p><span>School: </span>{{$user->school}}</p>
            </div>
            <div>
                <p><span>College: </span>{{$user->college}}</p>
            </div>
            <div>
                <p><span>University: </span>{{$user->university}} </p>
            </div>
            <div>
                <p><span>Experience: </span>{{$user->experience}} </p>
            </div>
        </div>
        <div class="col-3"></div>
    </div>

    <a class="text-center" href="/editprofile">edit profile</a>
    @endforeach

   


</div>
@endsection