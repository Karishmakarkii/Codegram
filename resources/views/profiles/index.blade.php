@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5 ">
        	<img src="https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-19/s320x320/47243513_2342234456018888_5665387413355102208_n.jpg?_nc_ht=instagram.fktm8-1.fna.fbcdn.net&_nc_ohc=x3Z8jHUNqFQAX--LgOf&oh=b17767c0a3878b3a552cbdb3c00badd9&oe=5F82E118"  class="rounded-circle" style="width:150px; height: 150px;">
        </div>
        <div class=" col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline"><h1>{{ $user->username }}</h1>
            <a href="#">Add New Post</a>
            </div>
            <div class="d-flex pt-3">
                <div class="pr-5"><strong>57 </strong> posts</div>
                <div class="pr-5"><strong>419 </strong>followers</div>
                <div class="pr-5"><strong>303 </strong> following</div>
                
            </div>
            <div class="pt-3" style="font-weight: bold;">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description}}</div>
            <div>{{ $user->profile->url }}</div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="/images/card2.jpg" alt="" class="w-100" style="height:300px;">
        </div>
        <div class="col-4">
            <img src="/images/card3.jpg" alt="" class="w-100" style="height:300px;">
        </div>
        <div class="col-4">
            <img src="/images/19.jpg" alt="" class="w-100" style="height:300px;">
        </div>
    </div>
</div>
@endsection

