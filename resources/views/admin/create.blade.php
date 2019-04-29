@extends('layouts.admin')

@section('content')
    @include('partials.errors')
    <div  class="row">
        <div  class="col-md-12">
            <form action="{{ route('admin.create') }}" method="POST">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title" id="title" />
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input class="form-control" type="text" name="content" id="content" />
                </div>
                @csrf
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection