@extends('layouts.app')
@section('content')
<div class="mb-6 header relative">
    <div class="relative">
        <img src="/images/default-profile-banner.jpg" 
             alt="Default profile banner rounded-full"
             class="mb-2 banner shadow"
        >

        <img src="images/logo.png" 
             alt="Profile picture"
             class="rounded-full p-1 image-profile-banner shadow"
        >
    </div>
    @auth
        <div class="d-flex justify-content-between items-center">
            <div class="name-container">
                {{-- NAME --}}
                <h2 class="font-bold is-size-3 mb-0">{{ $user->name }}</h2>   
                {{-- EMAIL --}}             
                <p class="text-sm text-primary">{{ $user->email }}</p>
                {{-- CREATED_AT --}}
                <p class="text-sm">Profile created {{ $user->created_at }}</p>
            </div>
            {{-- EDIT PROFILE --}}
            <div class="is-flex">
                <a href="" class="button rounded shadow py-2 px-4 text-xs bg-light">Edit Profile</a>
            </div>
        </div> 
    @else
    {{-- IF NOT LOG --}}
        <div class="d-flex justify-content-between items-center">
            <div class="name-container">
                {{-- NAME --}}
                <h2 class="font-bold is-size-3 mb-0">{{ $user->name }}</h2>   
                {{-- EMAIL --}}             
                <p class="text-sm text-primary">{{ $user->email }}</p>
                {{-- CREATED_AT --}}
                <p class="text-sm">Profile created {{ $user->created_at }}</p>
            </div>            
        </div> 
    @endauth   
</div>
{{-- BIO --}}
<p class="text-sm pb-4">
    {{ $user->bio }}
</p>

@include('components._articles', [
    'articles' => $articles
])

@endsection