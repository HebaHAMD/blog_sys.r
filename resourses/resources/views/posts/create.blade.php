@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center" style="margin-top: 50px;">
        <div class="col-md-6">
            <h1>Create New Post</h1>
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                    @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                </div><h1></h1>
                <button type="submit" class="btn btn-success">Create</button>
            </form>
        </div>
    </div>
@endsection
