<body class="">
    @foreach ($articles as $article )
        <div class="container card p-4 mb-2 article-size">
            
            <div class="d-flex">
                <a href="#">
                    <img class="rounded-circle shadow p-1 mb-2" 
                        src="https://i.pravatar.cc/60?img=24" 
                        alt="Profile picture"
                    >
                </a>
                {{-- Author Name --}}
                <a class="" href="profile/{{ $article->user->name }}">
                    {{-- Vers page profile user --}}
                    <h5 class="font-bold ml-2 text-dark mt-3">{{ $article->user->name }}</h5>                    
                </a>
            </div>
            <p class="black">{{ $article->created_at }}</p>
            {{-- Title Article --}}
            <a class="" href="/article/{{ $article->id }}">
                <h3 class="text-center word-wrap text-dark">                    
                    {{ $article->title }}                    
                </h3>                
            </a>

            <img src="images/eco.jpg" alt="Hydrogene vert" class="image-minuature">

            {{-- Summary Article --}}
            <a class="" href="/article/{{ $article->id }}">
                <p class="text-center word-wrap text-dark">                    
                    {{ $article->summary }}                    
                </p>                
            </a>
            {{-- DELETE Button --}}
            @if (auth()->user())
                <form action="/articles/{{ $article->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> Delete</button>
                </form>
            @endif            
        </div>
    @endforeach 
</body>
