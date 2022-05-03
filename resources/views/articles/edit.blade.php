@extends('layouts.app')
@section('content')
    <form method="POST" action="" enctype="multipart/form-data" class="text-light">
        @csrf
        @method('PATCH')
        {{-- USERNAME --}}
        <div class="form-group row">
            <label for="username" 
                   class="col-md-4 col-form-label text-md-right">Username
            </label>
            <div class="col-md-6">
                <input 
                    id="username" 
                    type="text" 
                    class="form-control @error('username') is-invalid @enderror" 
                    name="username" 
                    value="{{ $article->user->name }}" 
                    autocomplete="username"
                    required >
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        {{-- TITLE --}}
        <div class="form-group row">
            <label for="name" 
                   class="col-md-4 col-form-label text-md-right">Title
            </label>
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
        {{-- SUMMARY --}}
        <div class="form-group row">
            <label for="username" 
                   class="col-md-4 col-form-label text-md-right">Summary
            </label>
            <div class="col-md-6">
                <input 
                    id="username" 
                    type="text" 
                    class="form-control @error('username') is-invalid @enderror" 
                    name="username" 
                    value="{{ $article->summary }}" 
                    autocomplete="username"
                    required >

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        {{-- BODY --}}
        <div class="form-group row">
            <label for="username" 
                   class="col-md-4 col-form-label text-md-right">Body
            </label>
            <div class="col-md-6">
                <input 
                    id="username" 
                    type="text" 
                    class=" w-100 form-control @error('username') is-invalid @enderror w-100 textarea border-none" 
                    name="username" 
                    value="{{ $article->body }}" 
                    autocomplete="username"
                    required >

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        {{-- SEND BUTTON --}}
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Apply Changes
                </button>
                <a href="{{ route('articles.index') }}" 
                   class="ml-6 btn btn-danger">Cancel
                </a>
            </div>
        </div>        
    </form>
@endsection