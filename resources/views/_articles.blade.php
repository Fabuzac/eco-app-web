
<body class="">
    @foreach ($articles as $article )
        <div class="container card p-4 mb-2">
            
            <div class="d-flex">
                <a href="#">
                    <img class="rounded-circle shadow p-1 mb-2" 
                        src="https://i.pravatar.cc/60?img=10" 
                        alt="Profile picture"
                    >
                </a>

                <a class="" href="#">
                    <h5 class="font-bold ml-2 text-dark mt-3">{{ $article->user->name }}</h5>
                </a>
            </div>
            
            <p class="text-center word-wrap text-dark">
                {{-- Content from DB  // <br/> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur sit sequi vero harum perferendis temporibus veritatis quasi, culpa voluptatem nemo, obcaecati consequuntur earum debitis odit ad necessitatibus ab deserunt quidem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci molestiae facere modi dolorem, numquam reiciendis pariatur voluptate minima voluptates atque temporibus qui libero quos mollitia impedit fuga nisi velit quidem? --}}
                {{ $article->body }}
            </p>
        </div>
    @endforeach 
</body>
