@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Post Details</h4>
                </div>

                <div class="card-body">
                    <h1 class="mb-4">{{ $post->title }}</h1>
                    <p class="lead">{{ $post->description }}</p>
                    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
