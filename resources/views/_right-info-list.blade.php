<main class="info-list">   
    <nav class="text-white">            
        <ul class="">
            @forelse ($articles as $article )
                <li class="p-3 mb-3 rounded">
                    <a href="/article/{{ $article->id }}">
                        <h3>{{ $article->title }}</h3>
                    </a>
                    
                    <a class="has-text-weight-bold is-size-4 mb-3 block" href="/article/{{ $article->id }}">
                        {{ $article->summary }}
                    </a>
                </li>
            @empty
                <li class="p-3 mb-3 rounded">
                    <a href="/"><h3>Title</h3></a>
                    <a class="has-text-weight-bold is-size-4 mb-3 block" href="/">Summary etc...</a>
                </li>
            @endforelse
        </ul>                    
    </nav>    
</main>


