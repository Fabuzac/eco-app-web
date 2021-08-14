@extends('layouts.app')

@section('content')
<body>    
    <div class="container card p-4">
        
    
        <div class="width-90">
            <a class="" href="user">
                <h5 class="font-bold mb-4 text-dark">name</h5>
            </a>
            <p class="text-dark word-wrap">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel, nobis nulla! Quam hic, possimus sunt consequuntur voluptates tempore. Libero quas aperiam quam hic nisi fugit nesciunt, quidem itaque officiis veniam?
            </p>
    
            @auth
                <div class="is-flex mt-3">
                    {{-- Like --}}
                    <form
                        class="is-flex"
                        method="POST"
                        action=""
                    >
                        @csrf
                                            
                        <button type="submit" class="button border-none mr-1">
                            <span class="icon has-text-link">
                                <i class='fa fa-thumbs-up'></i>                    
                             </span>
                        </button>
    
                        <div class="mt-3 mb-3 mr-2">                    
                            <span>
                                
                            </span>
                        </div>    
                    </form>
                    
                    {{-- Dislike --}}
                    <form
                        class="is-flex ml-3" 
                        method="POST"
                        
                    >
                        @csrf
                     
    
                        {{-- {{ $tweet->isDislikedBy(current_user()) ? 'text-blue-500' : 'text-gray-500' }} --}}
                        <button type="submit" class="button border-none mr-1">
                            <span class="icon has-text-danger">
                                <i class='fa fa-thumbs-down'></i>
                            </span>   
                        </button>
    
                        <div class="mt-3 mb-3 is-flex">
                                                             
                        </div>
                    </form>
                </div>
            @endauth
        </div>
    </div>
</body>
@endsection
