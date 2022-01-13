@extends('layouts.app')

@section('content')
                
    <body class="">
        <div class="container card p-4 mb-2">
            
            <div class="d-flex">
                <a href="#">
                    <img class="rounded-circle shadow p-1 mb-2" 
                        src="https://i.pravatar.cc/60?img=10" 
                        alt="Profile picture"
                    >
                </a>

                <a class="" href="#">
                    {{-- Vers page profile user --}}
                    <h5 class="font-bold ml-2 text-dark mt-3">{{ $article->user->name }}</h5>
                </a>
            </div>
            
            <h3 class="text-center word-wrap text-dark">                    
                {{ $article->title }}                 
            </h3>                
            
            <img src="../images/green-hydrogen.jpg" alt="hydrogen" class="image-article">
            
            <p class="text-center word-wrap text-dark">
                {{-- Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa voluptatibus illo accusamus repudiandae! Vel non reiciendis eligendi! Corrupti temporibus eveniet accusamus nemo impedit suscipit recusandae harum doloribus! Eos, ipsa labore. --}}
                {{ $article->body }}
            </p>                            
        </div>
    </body>
@endsection