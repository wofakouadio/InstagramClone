@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/code.svg" alt="" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{$user->name}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>999,999k</strong> posts</div>
                <div class="pr-5"><strong>999,999k</strong> followers</div>
                <div class="pr-5"><strong>999,999k</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div class="pt-1">{{ $user->profile->description }}.<br/>LearnToCodeRPG: <a href="#" class="font-weight-bold text-dark">{{ $user->profile->url ?? 'N/A'}}</a></div>
        </div>
    </div>

    {{-- posts div --}}
    <div class="row pt-4">

        <div class="col-4">
            <img src="img/img-3.jpg" alt="" srcset="" class="w-100">
        </div>
        <div class="col-4">
            <img src="img/img-5.jpg" alt="" srcset="" class="w-100">
        </div>
        <div class="col-4">
            <img src="img/img-8.png" alt="" srcset="" class="w-100">
        </div>

    </div>
</div>
@endsection




