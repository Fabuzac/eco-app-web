@extends('layouts.app')

@section('content')
<div class="mb-6 header relative">
    <div class="relative">
        <img 
            src="/images/default-profile-banner.jpg" 
            alt="Default profile banner rounded-full"
            class="mb-2 banner shadow"
        >

        <img 
            {{-- {{ $user->avatar }} --}}
            {{-- https://i.pravatar.cc/60 --}}
            src="images/logo.png" 
            alt="Profile picture"
            class="rounded-full p-1 image-profile-banner shadow"
        >
    </div>
    @auth
        <div class="d-flex justify-content-between items-center">
            <div class="name-container">
                <h2 class="font-bold is-size-3 mb-0">{{ $user[1]->name }}</h2>
                
                {{-- Il faudrait obtenir: user->name --}}
                
                <p class="text-sm text-primary">{{ $user[1]->email }}</p>
                <p class="text-sm">Profile created {{ $user[1]->created_at }}</p>
            </div>

            {{-- Edit --}}
            <div class="is-flex">
                <a href="" class="button rounded shadow py-2 px-4 text-xs bg-light">Edit Profile</a>
            </div>
        </div> 
    @else

    {{-- Si n'est pas log --}}
        <div class="d-flex justify-content-between items-center">
            <div class="name-container">
                <h2 class="font-bold is-size-3 mb-0">Name</h2>
                {{-- Il faudrait obtenir: user->name --}}
                
                <p class="text-sm text-primary">Email@email.com</p>
                <p class="text-sm">Profile created at 00.00</p>
            </div>

            {{-- Edit --}}
            <div class="is-flex">
                <a href="" class="button rounded shadow py-2 px-4 text-xs bg-light">Edit Profile</a>
            </div>
        </div> 
    @endauth   
</div>

{{-- BIO --}}
<p class="text-sm pb-4">
    Mobile Suit Gundam was developed by animator Yoshiyuki Tomino and a 
    changing group of Sunrise creators with the collective pseudonym of 
    Hajime Yatate. The series was originally entitled Freedom Fighter Gunboy (or Gunboy) 
    for the robot's gun, with teen boys the primary target demographic. 
    Early production had a number of references to freedom: the White Base was originally "Freedom's Fortress"
</p>
@endsection