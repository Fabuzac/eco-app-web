{{-- @extends('layouts.app')

@section('content') --}}
<body>
    @if (auth()->user())
        <div class="container card p-4">        
            <form method="POST" action="/articles">
                @csrf            
                <div class="d-flex pb-3">
                    <img class="rounded-circle shadow p-1" src="https://i.pravatar.cc/60" alt="Profile picture">
                    <p class="pl-3 text-dark">{{ Auth::user()->name }} says...</p>
                </div>
            
                <textarea class="w-100 textarea border-none" 
                          name="body" 
                          placeholder="What would you like to express?"
                          required                
                ></textarea>
            
                <hr class="my-4" />
                <button type="submit" class="width-30 btn-dark shadow py-2 px-2 text-white btn-article rounded">Earthy !</button>            
            </form>        
            @error('body')
                <p class="is-danger text-sm">{{ $message }}</p>
            @enderror
        </div>
    @endif
</body>
{{-- ARTICLES COMPONENT --}}
<h2 class="text-center m-3 text-decoration-underline">Last Community Article</h2>

{{-- <div class="mt-4">
    @include('_articles')
</div>

<div class="mt-2 mb-2">
    @include('_articles')
</div>
@endsection --}}