@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/code.svg" alt="" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->name}}</h1>
                <a href="">Add new post</a>
            </div>
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
            <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.stackscale.com%2Fblog%2Ftop-10-programming-languages-2020%2F&psig=AOvVaw1KQ8-818awpmajKCsx2kER&ust=1646152291940000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCODDqbDpovYCFQAAAAAdAAAAABAK" alt="" srcset="" class="w-100">
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




