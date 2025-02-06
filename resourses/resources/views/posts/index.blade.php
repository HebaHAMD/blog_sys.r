@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">All Posts</h1>
        <div class="text-center mb-4">
            <a href="{{ route('posts.create') }}" class="btn btn-success btn-lg">Create New Post</a>
        </div>
        
        <div class="row">
            @foreach($posts as $post)
                <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                    <div class="card shadow-sm rounded border-0">
                        <div class="card-body">
                            <h4 class="card-title text-primary">{{ $post->title }}</h4>
                            <p class="card-text text-muted">{{ \Str::limit($post->description, 100) }}</p>
                            
                            <!-- Buttons aligned to the left with increased space between them -->
                            <div class="d-flex justify-content-start">
                                <a href="{{ route('posts.show', $post) }}" class="btn btn-info mr-3">View</a> <!-- Adjusted margin -->
                                
                                @if(Auth::id() == $post->user_id)
                                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning mr-3">Edit</a> <!-- Adjusted margin -->
                                    
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger ml-3">Delete</button> <!-- Added left margin to delete button -->
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
