@extends('layouts.app')

@section('content')
<body>    
    <div class="container">
        {{-- App component --}}
        <div class="blanc">
            <h1>VUE.js routes</h1>

            <router-link to="/">Home</router-link>

            <router-link to="/about">About</router-link>
        </div>  

        <hr class="blanc" />

        <router-view></router-view>        
    </div>
</body>
@endsection
