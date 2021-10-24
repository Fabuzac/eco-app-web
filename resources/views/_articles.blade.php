
<body class="">
    @foreach ($articles as $article )
        <div class="container card p-4 mb-2">
            
            <div class="d-flex">
                <a href="#">
                    <img class="rounded-circle shadow p-1 mb-2" 
                        src="https://i.pravatar.cc/60?img=24" 
                        alt="Profile picture"
                    >
                </a>

                <a class="" href="#">
                    {{-- Vers page profile user --}}
                    <h5 class="font-bold ml-2 text-dark mt-3">{{ $article->user->name }}</h5>
                </a>
            </div>

            <a class="" href="/article/{{ $article->id }}">
                <h3 class="text-center word-wrap text-dark">                    
                    {{ $article->title }}                    
                </h3>                
            </a>

            <a class="" href="/article/{{ $article->id }}">
                <p class="text-center word-wrap text-dark">                    
                    {{ $article->summary }}                    
                </p>                
            </a>
            
        </div>
    @endforeach 
</body>
