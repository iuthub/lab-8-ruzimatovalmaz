@extends('layouts.admin')

@section('content')
    @include('partials.errors')
    <form action="{{ route('admin.update') }}" method="POST">
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ $post['title'] }}"/>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input class="form-control" type="text" name="content" id="content" value="{{ $post['content'] }}"/>
        </div>
        <input type="hidden" name="id" value="{{ $postId }}"> 
        @csrf
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection