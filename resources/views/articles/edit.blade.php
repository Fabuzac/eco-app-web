@extends('layouts.app')

@section('content')
    <form method="POST" action="" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        {{-- {{ $user->path() }} --}}
        {{-- username --}}
        <div class="form-group row">
            <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

            <div class="col-md-6">
                <input 
                    id="username" 
                    type="text" 
                    class="form-control @error('username') is-invalid @enderror" 
                    name="username" 
                    value="{{ $user->name }}" 
                    autocomplete="username"
                    required >

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- Title --}}
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input 
                    id="name" 
                    type="text" 
                    class="form-control @error('name') is-invalid @enderror" 
                    name="name" 
                    value="{{ $article->title }}" 
                    required 
                    autocomplete="name" 
                    autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        
        
        
    </form>
@endsection